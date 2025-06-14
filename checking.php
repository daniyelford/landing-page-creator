<?php
    if(isset($_POST['send'])&&!empty($_POST['send'])){
        $company=$_POST['com'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $servername = $_POST['dbname'];
        $_SESSION['url']=$_POST['url1'];
        require('db.php');
        global $conn;
        global $sql;
        if($conn->exec($sql)){
            define('COMPANY',$company);
            define('DBNAME', $servername);
            define('USERNAME' ,$username);
            define('PASSWORD' ,$password);
            echo 1;
            die();
        }else{
            echo 0;
            die();
        }
    }elseif(isset($_POST['send_user'])&&!empty($_POST['send_user'])){
        require('db.php');
        global $conn;
        $res=$conn->prepare('INSERT INTO `users` (`username`,`password`,`role`) VALUES (:username,:password,:role);');
        $res->bindValue(':username',md5($_POST['usr']));
        $res->bindValue(':password',md5($_POST['pss']));
        $res->bindValue(':role','admin');
        if($res->execute()){
            rcopy('project', './');
            rrmdir('project');
            $_SESSION['run_project']='on';
            $sql=null;
            $conn=null;
            rrmdir('db.php');
            echo 1;
            die();
        }else{
            echo 0;
            die();
        }
    }elseif(isset($_POST['send_cap'])&&!empty($_POST['send_cap'])){
        if($_POST['cap']==$_SESSION['cap_frst']){
            rrmdir('cap.php');
            echo 1;
            die();
        }else{
            echo 0;
            die();
        }
    }else{
        header('Location: ./');
        exit;
    }
    
    // Function to remove folders and files 
    function rrmdir($dir) {
        if (is_dir($dir)) {
            $files = scandir($dir);
            foreach ($files as $file)
                if ($file != "." && $file != "..") rrmdir("$dir/$file");
            rmdir($dir);
        }
        else if (file_exists($dir)) unlink($dir);
    }

    // Function to Copy folders and files       
    function rcopy($src, $dst) {
        if (file_exists ( $dst ))
            rrmdir ( $dst );
        if (is_dir ( $src )) {
            mkdir ( $dst );
            $files = scandir ( $src );
            foreach ( $files as $file )
                if ($file != "." && $file != "..")
                    rcopy ( "$src/$file", "$dst/$file" );
        } else if (file_exists ( $src ))
            copy ( $src, $dst );
    }
    
    
?>