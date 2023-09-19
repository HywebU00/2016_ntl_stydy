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
							<h2 class="PageTitle">國內/外籍人士 訪問申請表單</h2>				
							<!-- content -->
							<div class="Block">
                <div class="remark">
                  <b>說明</b>
									<div class="info">
										<p> 國立臺灣圖書館多年來致力於以豐富的臺灣學特色館藏支援臺灣史課程教學，每年度我們規劃不同主題辦理「臺灣歷史現場踏查」，歡迎各位老師與我們以不一樣的視野認識臺灣的文化，一同踏查歷史現場。</p>
										<p>備註：報名過程需提供您的服務證（可證明本學期仍為現職教師之相關證件，拍照或其他方式上傳即可，檔案格式PDF/JPG/JPEG/PNG/HEIC）查驗，謝謝。</p>
									</div>
									<button type="clear" class="btn btn-switch">收合內容</button>
                </div>
								<div class="blockB">
									<p>此符號<span class="required">*</span>為必填欄位</p>
									<form class="form-horizontal">
                    <div class="form-group">
											<label for="inputTitle" class="col-md-2 control-label"><span class="required">*</span>input</label>
											<div class="col-md-10">
												<input type="text" class="form-control" id="inputTitle" placeholder="請輸入主旨">
											</div>
										</div>
                    <div class="form-group">
											<label for="inputNo" class="col-md-2 control-label"><span class="required">*</span>select</label>
											<div class="col-md-10">
												<select class="form-control">
													<option>項目1</option>
													<option>項目2</option>
                          <option>項目3</option>
												</select>
											</div>
										</div>
                    <div class="form-group">
											<label for="inputNo" class="col-md-2 control-label"><span class="required">*</span>select 場次</label>
											<div class="col-md-10">
												<select class="form-control">
													<option>項目1</option>
													<option>項目2</option>
                          <option>項目3</option>
                          <option>其他</option>
												</select>
											</div>
										</div>
                    <div class="form-group">
											<label for="inputTitle" class="col-md-2 control-label"><span class="required">*</span>input 其他場次</label>
											<div class="col-md-10">
												<input type="text" class="form-control" id="inputTitle" placeholder="預設 readonly，請填選場次" readonly>
                        <p class="hint">說明：場次選其他時，本欄位移除 readonly</p>
											</div>
										</div>
                    <div class="form-group">
											<label for="" class="col-md-2 control-label"><span class="required">*</span>radio</label>
											<div class="col-md-10">
												<div class="radio">
													<label><input type="radio" name="sampleRadio1" checked>單選項目1</label>
                          <label><input type="radio" name="sampleRadio1">單選項目2</label>
                          <label><input type="radio" name="sampleRadio1">單選項目3</label>
                        </div>
											</div>
										</div>
                    <div class="form-group">
											<label for="" class="col-md-2 control-label"><span class="required">*</span>radio 程度</label>
											<div class="col-md-10">
                        <div class="form-check">不熟悉</div>
                        <div class="form-check radio">
													<label><input type="radio" name="sampleRadio2" checked>1</label>
                          <label><input type="radio" name="sampleRadio2">2</label>
                          <label><input type="radio" name="sampleRadio2">3</label>
                          <label><input type="radio" name="sampleRadio2">4</label>
                          <label><input type="radio" name="sampleRadio2">5</label>
                        </div>
                        <div class="form-check">極佳</div>
											</div>
										</div>
                    <div class="form-group">
											<label for="checkbox_1" class="col-md-2 control-label"><span class="required">*</span>checkbox</label>
											<div class="col-md-10">
                        <div class="form-check checkbox" id="checkbox_1">
                          <label><input type="checkbox" name="" value="" checked="">複選項目1</label>
                          <label><input type="checkbox" name="" value="">複選項目2</label>
                          <label><input type="checkbox" name="" value="">複選項目3</label>
                          <label><input type="checkbox" name="" value="">複選項目4</label>
                          <label><input type="checkbox" name="" value="">複選項目5</label>
                        </div>
											</div>
										</div>
										<div class="form-group">
											<label for="checkbox_2" class="col-md-2 control-label"><span class="required">*</span>checkbox 申請展出日期</label>
											<div class="col-md-10">
                        <div class="form-check checkbox setFlex" id="checkbox_2">
													<label>
														<input type="checkbox" name="" value="" checked="">
														<b>日期1：</b>
														<span>開始日期<input type="date"></span>
														<span>結束日期<input type="date"></span>
													</label>
                          <label><input type="checkbox" name="" value="">
														<input type="checkbox" name="" value="">
														<b>日期2：</b>
														<span>開始日期<input type="date"></span>
														<span>結束日期<input type="date"></span>
													</label>
                          <label><input type="checkbox" name="" value="">
														<b>日期3：</b>
														<span>開始日期<input type="date"></span>
														<span>結束日期<input type="date"></span>
													</label>
                          <label><input type="checkbox" name="" value="">
														<b>日期4：</b>
														<span>開始日期<input type="date"></span>
														<span>結束日期<input type="date"></span>
													</label>
                          <label><input type="checkbox" name="" value="">
														<b>日期5：</b>
														<span>開始日期<input type="date"></span>
														<span>結束日期<input type="date"></span>
													</label>
                        </div>
											</div>
										</div>
										<div class="form-group">
											<label for="inputContent" class="col-md-2 control-label"><span class="required">*</span>textarea</label>
											<div class="col-md-10">
												<textarea class="form-control" rows="3" placeholder="請輸入內容" id="inputContent"></textarea>
											</div>
										</div>
										<div class="form-group">
											<label for="inputName" class="col-md-2 control-label"><span class="required">*</span>姓名</label>
											<div class="col-md-10">
												<input type="text" class="form-control" id="inputName" placeholder="請輸入姓名">
											</div>
										</div>
										<div class="form-group">
											<label for="inputName" class="col-md-2 control-label"><span class="required">*</span>生日</label>
											<div class="col-md-10">
												<input type="date" class="form-control" id="" placeholder="請輸入生日">
											</div>
										</div>
										<div class="form-group">
											<label for="inputEmail1" class="col-md-2 control-label"><span class="required">*</span>您的E-mail</label>
											<div class="col-md-10">
												<input type="email" class="form-control" id="inputEmail1" placeholder="請輸入您的E-mail">
											</div>
										</div>
										<div class="form-group">
											<label class="col-md-2 control-label">資料來源</label>
											<div class="col-md-10">
												<a href="" title="">感謝秀威資訊、尖端出版捐贈出版品電子檔案，加速身心障礙圖書資源轉製</a>
											</div>
										</div>
										<div class="form-group">
											<label for="inputCaptcha" class="col-md-2 control-label"><span class="required">*</span>檔案上傳</label>
											<div class="col-md-5">
												<input type="file" class="form-control" id="inputCaptcha" placeholder="檔案上傳">
											</div>
											<div class="col-md-5">
												<button type="search" class="btn btn-default i_file">瀏覽</button>
											</div>
											<div class="col-md-10 col-md-offset-2">
												<p class="hint">說明：可上傳的檔案類型限（DOC、DOCX、XLS、XLSX、PPT、PPTX、PDF、JPG、GIF、BMP、PNG、TIFF、ZIP、RAR、TXT、RTF），如果有多個檔案請壓縮後再上傳，檔案總大小不可超過10MB。</p>
											</div>
										</div>
										<div class="form-group">
											<label for="inputCaptcha" class="col-md-2 control-label"><span class="required">*</span>驗證碼</label>
											<div class="col-md-5">
												<input type="text" class="form-control" id="inputCaptcha" placeholder="驗證碼">
											</div>
											<div class="col-md-5">
												<span class="captcha"><img src="images/basic/code.bmp"></span>
												<button type="submit" class="btn btn-default i_reflash">重新產生</button>
												<button type="submit" class="btn btn-default i_play">語音播放</button>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-offset-2 col-md-10">
												<button type="submit" class="btn btn-orange open-popup">送出</button>
												<button type="clear" class="btn btn-gray">清除重填</button>
												<button type="button" class="btn btn-orange open-popup">開燈箱</button>
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