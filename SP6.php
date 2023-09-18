<!DOCTYPE html>
<html lang="">
<?php require_once('include_head.php'); ?>
<body class="Bg_Flower_Page">
	<!-- popup -->
	<div class="popup">
		<div class="box">
			<p>親愛的老師您好：<br>
			這裡是國立臺灣圖書館，我是承辦人周慧茹。感謝老師報名參加本館「臺灣歷史現場踏查」活動，由於本活動僅限現職教師參加，待確認您於報名時提供的服務證（可證明本學期仍為現職教師之相關證件，拍照或其他方式上傳即可）查驗無誤後，我們將另行提供活動報名費帳戶資訊，謝謝。
			</p>
			<span>國立臺灣圖書館 敬上</span>
			<div class="btnGrp">
				<a href="" class="btn btn-orange btn-close" title="">確定</a>
			</div>
		</div>
	</div>
	<!-- Header -->
	<?php require_once('include_header.php'); ?>
	<!-- Content -->
	<section id="MainContent">
		<section class="Bg_Flower_Content">
			<!-- function -->
			<div class="Block">
				<div class="container">
					<div class="row">
						<article class="col-sm-12 col-md-12">
							<!-- breadcrumb -->
							<?php require_once('include_breadcrumb.php'); ?>
							<!-- function -->
							<?php require('include_functiontop.php'); ?>
						</article>
					</div>
				</div>
			</div>
			<!-- content -->
			<div class="Block ContentPage">
				<div class="container">
					<div class="row">
						<article class="col-sm-12 col-md-12">
							<h2 class="PageTitle">活動名稱 </h2>				
							<!-- content -->
							<div class="Block">
								<div class="blockB Preparation">
                  本活動尚未開放<br>非定期活動，詳情請見官網
								</div>
							</div>
						</article>
					</div>
				</div>
			</div>
			<!-- function -->
			<div class="Block hidden-xs">
				<div class="container">
					<div class="row">
						<article class="col-sm-12 col-md-12">
							<?php require_once('include_functionbottom.php'); ?>
						</article>
					</div>
				</div>
			</div>
		</section>
	</section>
	<!-- fatfooter -->
	<?php require_once('include_fatfooter.php'); ?>	
	<!-- footer -->
	<?php require_once('include_footer.php'); ?>
	<!-- jQuery -->
	<?php require_once('include_jq.php'); ?>
</body>
</html>