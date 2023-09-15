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
							<h2 class="PageTitle">我要報名</h2>				
							<!-- content -->
							<div class="Block">
								<div class="blockB">	
									<p>此符號<span class="required">*</span>為必填欄位，限微軟IE9.0以上</p>
									<form class="form-horizontal">
										<div class="form-group">
											<label for="inputName" class="col-md-2 control-label"><span class="required">*</span>姓名</label>
											<div class="col-md-10">
												<input type="text" class="form-control" id="inputName" placeholder="請輸入姓名">
											</div>
										</div>
										<div class="form-group">
											<label for="inputID" class="col-md-2 control-label">身分證字號</label>
											<div class="col-md-10">
												<input type="tel" class="form-control" id="inputID" placeholder="請輸入身分證字號">
											</div>
										</div>
										<div class="form-group">
											<label for="inputNo" class="col-md-2 control-label">葷或素</label>
											<div class="col-md-10">
												<select class="form-control">
													<option>葷</option>
													<option>素</option>
												</select>
											</div>
										</div>
										<div class="form-group">
											<label for="" class="col-md-2 control-label"><span class="required">*</span>性別</label>
											<div class="col-md-10">
												<div class="radio">
													<label>
											        	<input type="radio" checked> 男
											        </label>
											        <label>
											        	<input type="radio"> 女
											        </label>
										        </div>
											</div>
										</div>
										<div class="form-group">
											<label for="inputCaptcha" class="col-md-2 control-label"><span class="required">*</span>驗證碼</label>
											<div class="col-md-5">
												<input type="password" class="form-control" id="inputCaptcha" placeholder="驗證碼">
											</div>
											<div class="col-md-5">
												<span class="captcha"><img src="images/basic/code.bmp"></span>
												<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-refresh"></i> 重新產生</button>
												<button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-volume-up"></i> 語音播放</button>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-offset-2 col-md-10">
												<button type="submit" class="btn btn-orange">送出</button>
												<button type="clear" class="btn btn-gray">清除重填</button>
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