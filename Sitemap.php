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
							<h2 class="PageTitle">網站導覽</h2>				
							<!-- content -->
							<div class="Block">
								<p>本網站依無障礙網頁設計原則建置，網站的主要內容分為四大區塊： <br>1. 上方功能區塊、2. 中央內容區塊。</p>
								<p>本網站的快速鍵﹝Accesskey﹞設定如下：</p>
								<div class="Sitemap">
									<dl class="dl-horizontal">
										<dt>Alt+U：</dt><dd>上方功能區塊，包括行動版、訂閱電子報、網站導覽、下載專區、回首頁、English、日本語等。</dd>
										<!-- <dt>Alt+C：</dt><dd>左方導覽區塊，為本網站的主選單區。</dd> -->
										<dt>Alt+C：</dt><dd>中央內容區塊，為本頁主要內容區。</dd>
										<dt>Alt+S：</dt><dd>網站搜尋。</dd>
										<dt>← → or ↑↓：</dt><dd>當本網站項目頁籤無法以滑鼠點選時，您可利用以下鍵盤操作方式瀏覽資料 ◾← → or ↑↓：按左右鍵或上下鍵移動標籤順序。</dd>
										<dt>Home or End→：</dt><dd>可直接跳至標籤第一項或者最後一項。 </dd>
										<dt>Tab：</dt><dd>停留於該標籤後,可利用Tab鍵跳至內容瀏覽該筆資料，遇到radio按鈕時請配合使← → or↑↓鍵移動項目順序。</dd>
										<dt>Tab + Shift：</dt><dd>按Tab + Shift可往回跳至上一筆資料；當跳回至標籤項目時您可繼續利用← → or↑↓鍵移動標籤順序。</dd>
										<!-- <dt>Alt+R：</dt><dd>右方相關資訊區塊，其他相關連結區。</dd> -->
										
									</dl>
									<ul>
										<ul>
											<li><a href="">1.認識本館</a></li>
											<ul>
												<li><a href="" title="">1-1 緣起</a></li>
												<li><a href="" title="">1-2 服務內容</a></li>
												<li><a href="" title="">1-3 館藏特色</a></li>
												<li><a href="" title="">1-4 任務與展望</a></li>
											</ul>
											<li><a href="">2.公佈欄</a></li>
											<ul>
												<li><a href="" title="">2-1 最新活動消息</a></li>
												<li><a href="" title="">2-2 活動報導</a></li>
											</ul>
											<li><a href="">3.講座研習</a></li>
											<ul>
												<li><a href="" title="">3-1 講座</a></li>
												<li><a href="" title="">3-2 研習</a></li>
												<li><a href="" title="">3-3 研討會</a></li>
												<li><a href="" title="">3-4 歷年成果</a></li>
											</ul>
											<li><a href="">4.館藏臺灣學研究書展</a></li>
											<ul>
												<li><a href="" title="">4-1 當年展覽</a></li>
												<li><a href="" title="">4-2 行動展覽館</a></li>
												<li><a href="" title="">4-3 歷年展覽</a></li>
											</ul>
											<li><a href="">5.臺灣學數位圖書館</a></li>
											<ul>
												<li><a href="" title="">5-1 臺灣學電子資源整合查詢系統</a></li>
												<li><a href="" title="">5-2 臺灣研究主題資料庫</a></li>
												<li><a href="" title="">5-3 日治時期圖書影像系統</a></li>
												<li><a href="" title="">5-4 日治時期期刊影像系統</a></li>
												<li><a href="" title="">5-5 臺灣政經資料庫</a></li>
												<li><a href="" title="">5-6 臺灣學通訊資料庫</a></li>
											</ul>
											<li><a href="">6.出版品</a></li>
											<ul>
												<li><a href="" title="">6-1 臺灣學通訊</a></li>
												<li><a href="" title="">6-2 臺灣學研究</a></li>
												<li><a href="" title="">6-3 其他出版品</a></li>
												<li><a href="" title="">6-4 創意商品</a></li>
												<li><a href="" title="">6-5 訂購資訊</a></li>
											</ul>
											<li><a href="">7.研究支援</a></li>
											<ul>
												<li><a href="" title="">7-1 博碩士論文研究獎助</a></li>
												<li><a href="" title="">7-2 申請研究小間</a></li>
											</ul>
											<li><a href="">8.活動報名</a></li>
										</ul>
									</ul>
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