<style>
    #news-pointer{
        cursor: pointer;
    }
</style>
<div style="margin-right: 0px;padding-top:20px;" class="container-fluid mt-5">
	<div class="row row-sm mt-3">
    <div class="col-xl-7 col-lg-7 col-md-7 col-xm-12">
        <div class="card overflow-hidden sales-card bg-info-gradient">
            <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
							<div class="">
								<h6 class="mb-3 tx-12 text-white">اطلاعیه ها</h6>
							</div>
							<div class="pb-0 mt-0">
								<div class="d-flex">
									<div class="">
										<h4 class="tx-20 font-weight-bold mb-1 text-white">جدید ترین ها</h4>
										<p class="mb-0 tx-12 text-white op-7">در مقایسه با هفته گذشته</p>
									</div>
									<span class="float-right my-auto mr-auto">
										<i class="fas fa-arrow-circle-down text-white" id="news-pointer"></i>
										<span class="text-white op-7">۴ جدید</span>
									</span>
									
								</div>
							</div>
						</div>
            <span class="pt-1" id="compositeline3">

            <canvas width="283" height="30" style="display: inline-block; width: 283px; height: 30px; vertical-align: top;"></canvas>

            </span>
            <div id='news-paper' class='p-4 text-white'>
                <ol>
                    <?php if(!empty($news)){
                    foreach($news as $val){?>
                    <li>
                        <h5><?= $val['title']?></h5>
                        <?= $val['content']?>
                    </li>
                    <?php }
                    }else{?>
                        <div class='alert alert-primary text-center'>اطلاعیه ی جدیدی موجود نیست</div>
                    <?php }?>
                </ol>
            </div>
        </div>
    </div>
    <div class="col-xl-5 col-lg-5 col-md-5 col-xm-12">
        <div class="card overflow-hidden sales-card bg-success-gradient">
        <div class="pl-3 pt-3 pr-3 pb-2 pt-0">
							<div class="">
								<h6 class="mb-3 tx-12 text-white">آمار بازدید</h6>
							</div>
							<div class="pb-0 mt-0">
								<div class="d-flex">
									<div class="">
										<h4 class="tx-20 font-weight-bold mb-1 text-white">۵۶۰۰۰۰۰ نفر</h4>
										<p class="mb-0 tx-12 text-white op-7">از دیروز تا امروز</p>
									</div>
									<span class="float-right my-auto mr-auto">
										<i class="fas fa-arrow-circle-up text-white"></i>
										<span class="text-white op-7">۱۸۰۰۰۰ نفر</span>
									</span>
								</div>
							</div>
						</div>
            <span class="pt-1" id="compositeline3">

            <canvas width="283" height="30" style="display: inline-block; width: 283px; height: 30px; vertical-align: top;"></canvas>

            </span>
        </div>
    </div>
</div>
</div>
</div>