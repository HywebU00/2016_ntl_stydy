<!DOCTYPE html>
<html lang="">
<?php require_once('include_head.php'); ?>
<body class="Bg_Flower_Page">
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
							<h2 class="PageTitle">電子報訂閱/取消</h2>				
							<!-- content -->
							<div class="Block">
								<div class="blockB">														
									<p>此符號<span class="required">*</span>為必填欄位</p>
									<form class="form-horizontal">
										<div class="form-group">
											<label for="inputEmail" class="col-md-2 control-label"><span class="required">*</span>訂閱E-mail</label>
											<div class="col-md-10">
												<input type="email" class="form-control" id="inputEmail" placeholder="請輸入E-mail">
											</div>
										</div>
										<div class="form-group">
											<label for="" class="col-md-2 control-label"><span class="required">*</span>電子報</label>
											<div class="col-md-10">
												<div class="checkbox">
													<label><input type="checkbox" name="sampleRadio1" checked>藝文資訊電子報</label>
													<label><input type="checkbox" name="sampleRadio1">臺灣學通訊電子報</label>
												</div>
											</div>
										</div>
										<div class="form-group MarginBottom15">
											<label for="inputCaptcha" class="col-md-2 control-label"><span class="required">*</span>驗證碼</label>
											<div class="col-md-5">
												<input type="password" class="form-control" id="inputCaptcha" placeholder="驗證碼">
											</div>
											<div class="col-md-5">
												<span class="captcha"><img src="images/basic/code.bmp"></span>
												<button type="submit" class="btn btn-default i_reflash">重新產生</button>
												<button type="submit" class="btn btn-default i_play">語音播放</button>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-offset-2 col-md-10">
												<button type="submit" class="btn btn-orange">訂閱</button>
												<button type="clear" class="btn btn-gray">取消訂閱</button>
											</div>
										</div>
									</form>	
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