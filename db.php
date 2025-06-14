<?php
$sql="CREATE TABLE `block` (
  `id` int(11) NOT NULL,
  `blocker_id` int(11) NOT NULL,
  `block_id` int(11) NOT NULL,
  `type` varchar(55) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `chat_id` int(11) NOT NULL,
  `p.id` int(11) NOT NULL,
  `in_pay` int(11) NOT NULL DEFAULT 0,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;CREATE TABLE `chat_tickets` (
  `id` int(11) NOT NULL,
  `ticket_title` varchar(100) COLLATE utf8_persian_ci NOT NULL,
  `receive_id` int(11) NOT NULL,
  `ticket_content` text COLLATE utf8_persian_ci NOT NULL,
  `ticket_date` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ticket_status_seen` int(11) NOT NULL DEFAULT 0,
  `close_ticket` int(11) NOT NULL DEFAULT 0,
  `user_block` varchar(50) COLLATE utf8_persian_ci NOT NULL DEFAULT 'show',
  `role` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `dep_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `text` text CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;CREATE TABLE `content_post` (
  `id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;CREATE TABLE `departemants` (
  `departemant_id` int(11) NOT NULL,
  `departemant_name` varchar(150) COLLATE utf8_persian_ci NOT NULL,
  `departemant_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;CREATE TABLE `footer` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `contents` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `word_key` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;CREATE TABLE `icons` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `class` varchar(255) CHARACTER SET utf8 NOT NULL,
  `shrtcd` varchar(50) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `method` varchar(6) NOT NULL,
  `params` text DEFAULT NULL,
  `api_key` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` int(11) NOT NULL,
  `rtime` float DEFAULT NULL,
  `authorized` varchar(1) NOT NULL,
  `response_code` smallint(3) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;CREATE TABLE `map` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `longitude` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `latitude` text CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `side_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `parent_id` int(11) NOT NULL DEFAULT 0,
  `side_id` int(11) NOT NULL,
  `icon_name` varchar(255) DEFAULT NULL,
  `place` varchar(255) NOT NULL,
  `li_css` varchar(255) DEFAULT NULL,
  `link_css` varchar(255) DEFAULT NULL,
  `ul_css` varchar(255) DEFAULT NULL,
  `custom_html` text DEFAULT '<!-- <div>-->',
  `end_custom_html` text DEFAULT '<!-- </div> -->',
  `megaMenu` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;CREATE TABLE `news` (
  `user_id_reporter` int(11) NOT NULL,
  `title` varchar(250) COLLATE utf8_persian_ci NOT NULL,
  `content` text COLLATE utf8_persian_ci NOT NULL,
  `role_reporter` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `start_time` int(11) NOT NULL,
  `end_time` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `dep_id` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `header_id` int(11) NOT NULL,
  `footer_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `link` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;CREATE TABLE `page_sidebar` (company
  `id` int(11) NOT NULL,
  `side_id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `satatus` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;CREATE TABLE `pay_info` (
  `id` int(11) NOT NULL,
  `chat_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `phone` int(11) NOT NULL,
  `token` text NOT NULL,
  `date` date NOT NULL,
  `success` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;CREATE TABLE `pic` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `link` text NOT NULL,
  `page_id` int(11) NOT NULL DEFAULT 0,
  `date` date NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `pic_id` text NOT NULL,
  `price` int(11) NOT NULL,
  `des` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` tinytext NOT NULL,
  `des` text NOT NULL,
  `photo_id` text NOT NULL,
  `file_address` text NOT NULL,
  `price` int(11) NOT NULL,
  `available` int(11) NOT NULL DEFAULT 1,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;CREATE TABLE `sidebars_place` (
  `id` int(11) NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `place` varchar(255) CHARACTER SET utf8 NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `Priority` int(11) DEFAULT 1,
  `custom_html` text CHARACTER SET utf8 DEFAULT NULL,
  `end_custom_html` text CHARACTER SET utf8 DEFAULT NULL,
  `logo` int(11) DEFAULT NULL,
  `com` text CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL,
  `user_pic` varchar(255) CHARACTER SET utf8 COLLATE utf8_persian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `user_password` varchar(40) NOT NULL,
  `user_type` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code_mely` varchar(255) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `family` varchar(255) DEFAULT NULL,
  `parent_name` varchar(255) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `birthday_place` varchar(255) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `code_posty` varchar(50) NOT NULL,
  `address` text DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `pic` text NOT NULL,
  `role` varchar(50) NOT NULL DEFAULT 'user',
  `status` int(11) NOT NULL DEFAULT 1,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;CREATE TABLE `users_bot` (
  `id` int(11) NOT NULL,
  `chat_id` int(11) NOT NULL,
  `pay_count` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `block`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `content_post`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `icons`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `map`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `page_sidebar`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pay_info`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `pic`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `sidebars_place`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `tbl_sample`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `users_bot`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `block`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `content_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `icons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `page_sidebar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `pay_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `pic`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `sidebars_place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

ALTER TABLE `tbl_sample`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

ALTER TABLE `users_bot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
    } catch(PDOException $e) {
        echo 0;
        die($e->getMessage());
    }