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
							<h2 class="PageTitle">條件查詢</h2>				
							<!-- content -->
							<div class="Block">
								<div class="blockB">
									<form class="form-horizontal">
										<div class="form-group">
											<label for="inputName" class="col-md-2 control-label">標題</label>
											<div class="col-md-8">
												<input type="text" class="form-control" id="inputName" placeholder="標題">
											</div>
										</div>
										<div class="form-group">
											<label for="inputDate" class="col-md-2 control-label">日期</label>
											<div class="col-md-4">
												<div class="input-group date">
												    <input type="date" class="form-control" id="inputDate" placeholder="起">
												    <div class="input-group-addon">
												        <span class="icon-calendar"></span>
												    </div>
												</div>	
											</div>
											<div class="col-md-4">
												<div class="input-group date">
												    <input type="date" class="form-control" placeholder="迄">
												    <div class="input-group-addon">
												        <span class="icon-calendar"></span>
												    </div>
												</div>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-offset-2 col-md-10">
												<button type="submit" class="btn btn-orange">查詢</button>
												<button type="clear" class="btn btn-gray">重設</button>
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