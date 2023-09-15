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
					<div class="row row-offcanvas row-offcanvas-left row-offcanvas-right">
						<div class="col-xs-6 col-sm-3 sidebar-offcanvas sidebar-offcanvas-left SidebarLeft" id="SidebarLeft">
							<div class="SidebarMenu">
								<div class="list-group">
									<a href="#slide" class="list-group-item active">選項一</a>
									<a href="#" class="list-group-item">選項二</a>
									<a href="#" class="list-group-item">選項三</a>
									<a href="#" class="list-group-item">選項四</a>
									<a href="#" class="list-group-item">選項五</a>
									<a href="#" class="list-group-item">選項六</a>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-9">
							<button type="button" class="btn Btn_SidebarMenu pull-left visible-xs LeftSlide" data-toggle="SidebarLeft">開啟節點選單</button>
							<div class="col-xs-12">
								<!-- page -->
								<?php require('include_pageSidebarMenu.php'); ?>
								<!-- list 列表-->
								<div>
									<div class="List">
										<span class="MetaDay">2015/11/10</span>
										<div class="List_Text"><a href="#">第58期終身學習研習班招生中!歡迎加入學習行列</a></div>
									</div>
									<div class="List">
										<span class="MetaDay">2015/11/10</span>
										<div class="List_Text"><a href="#">感謝「印度—臺北協會」致贈圖書，豐富本館相關館藏</a></div>
									</div>
									<div class="List">
										<span class="MetaDay">2015/11/10</span>
										<div class="List_Text"><a href="#">教育部獎助家庭教育碩博士論文要點申請公告教育部獎助家庭教育碩博士論文要點申請公告教育部獎助家庭教育碩博士論文要點申請公告</a></div>
									</div>
									<div class="List">
										<span class="MetaDay">2015/11/10</span>
										<div class="List_Text"><a href="#">教育部優良家庭教育推廣方案徵選公告</a></div>
									</div>
									<div class="List">
										<span class="MetaDay">2015/11/10</span>
										<div class="List_Text"><a href="#">蘇迪勒颱風過後 羅東林管處所轄太平山及社區型自然步道持續封閉中</a></div>
									</div>
									<div class="List">
										<span class="MetaDay">2015/11/10</span>
										<div class="List_Text"><a href="#">蘇迪勒颱風過後 羅東林管處所轄太平山及社區型自然步道持續封閉中</a></div>
									</div>
									<div class="List">
										<span class="MetaDay">2015/11/10</span>
										<div class="List_Text"><a href="#">蘇迪勒颱風過後 羅東林管處所轄太平山及社區型自然步道持續封閉中</a></div>
									</div>
									<div class="List">
										<span class="MetaDay">2015/11/10</span>
										<div class="List_Text"><a href="#">蘇迪勒颱風過後 羅東林管處所轄太平山及社區型自然步道持續封閉中</a></div>
									</div>
									<div class="List">
										<span class="MetaDay">2015/11/10</span>
										<div class="List_Text"><a href="#">蘇迪勒颱風過後 羅東林管處所轄太平山及社區型自然步道持續封閉中</a></div>
									</div>
									<div class="List">
										<span class="MetaDay">2015/11/10</span>
										<div class="List_Text"><a href="#">蘇迪勒颱風過後 羅東林管處所轄太平山及社區型自然步道持續封閉中</a></div>
									</div>
								</div>
								<!-- page -->
								<?php require('include_pageSidebarMenu.php'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
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
	<!-- fatfooter -->
	<?php require_once('include_fatfooter.php'); ?>	
	<!-- footer -->
	<?php require_once('include_footer.php'); ?>
	
	<!-- jQuery -->
	<?php require_once('include_jq.php'); ?>
</body>
</html>