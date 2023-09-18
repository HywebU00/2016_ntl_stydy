<script  src="assets/js/jquery-1.11.2.js"></script>

<!-- Bootstrap JavaScript -->
<script src="assets/module/bootstrap-3.3.2/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.lazyload.min.js"></script>
<script src="assets/js/BS3JS.min.js"></script>

<!-- header offcanvas -->	
<script src="assets/js/bootstrap.offcanvas.js"></script>

<!-- slick  -->
<script src="assets/module/slick/slick.js"></script>
<!-- slick 自訂 -->
<script src="js/slick-addscripts.js"></script> 
<script type="text/javascript">
	$(function(){
		$('.Multiple_slider').slick({
			dots: true,
			dotsClass: 'slick-number', //原點可以換成數字
			infinite: true,
			autoplay: true,
			autoplaySpeed: 3000,
			arrows:false,
			slidesToShow: 1, //一次顯示幾張
			slidesToScroll: 1 //一次輪播幾張
		});
	});

	$(document).ready(function() {
		$('.Responsive_slider').slick({
			dots: true,
			infinite: true,
			speed: 500,
			slidesToShow: 3,
			slidesToScroll: 1,
			autoplay: true,
			autoplaySpeed: 1500,
			responsive: [{
				breakpoint: 900,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
					dots: true
				}
			}, {
				breakpoint: 720,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
			}, {
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
			}]
		});
	});

	$(function(){
		$('.open-popup').click(function(){
			$('.popup').show();
			$('.popup').addClass('act');
		});

		$('.btn-close').click(function(){
			$('.popup').hide;
			$('.popup').removeClass('act');
		});
	})
</script>

<!-- 送select選單內容至select框內 -->	
<script type="text/javascript">
	$(document).ready(function(e){
		$('.search-panel .dropdown-menu').find('a').click(function(e) {
			e.preventDefault();
			var param = $(this).attr("href").replace("#","");
			var concept = $(this).text();
			$('.search-panel span#search_concept').text(concept);
			$('.input-group #search_param').val(param);
		});
	});
</script>  

<!-- 左右主選單 點一個秀一個-->
<script type="text/javascript">
	$(function(){
		$('#Header .navbar-header .pull-right').click(function(){
			$(this).parent().siblings().eq(1).removeClass('in');
		});

		$('#Header .navbar-header .pull-left').click(function(){
			$(this).parent().siblings().eq(0).removeClass('in');
		});
	})
</script>

<!-- Open Fatfooter-->
<script type="text/javascript">
	$(document).ready(function() {
	    $(".FatFooterBtn").click(function(){
			$('#FatFooter nav').slideToggle(function() {
				if ($(this).is(':hidden')) {
						document.getElementById("FatFooterBtn").value = "展開";
					} else {
						document.getElementById("FatFooterBtn").value = "收合";
					}
				});
			$(this).toggleClass('close');
		});
	});
</script>


<!-- Tab -->
<script type="text/javascript">
	//阿尼的寫法 RWD
	$(function(){
	   $('.options li.here .contents').show();
	  
	   //點到頁籤後
	   // $('.options>li>a').focus(function(){
	   $('.options>li>a').click(tabs);
	   $('.options>li>a').focus(tabs);//因為無障礙要可以使用鍵盤點選，所以用focus的設定
		  
		function tabs(){
			    
			var  li_index=$(this).index();
			
			$('.options .here').removeClass('here');
			$(this).parent().addClass('here');

			return false;
		}
  })
</script>

<!-- scrollUp-->
<script type="text/javascript" src="assets/js/jquery.scrollUp.js"></script> 
<!-- scrollUp 自訂-->     
<script type="text/javascript">
	$(function () {
		$.scrollUp({
		    scrollName: 'scrollUp', // Element ID
		    topDistance: '300', // Distance from top before showing element (px)
		    topSpeed: 300, // Speed back to top (ms)
		    animation: 'fade', // Fade, slide, none
		    animationInSpeed: 200, // Animation in speed (ms)
		    animationOutSpeed: 200, // Animation out speed (ms)
		    scrollText: 'Scroll to top', // Text for element
		    activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
		});
	});
</script>

<!-- 字級 -->
<script type="text/javascript">
	$(function(){
		$(".Word-Class .FontSmall").click(
			function(){
				$(".ContentPage").css({fontSize:"90%"});
				$(".PopBox .Block_Title").css({fontSize:"16px"});
				$(".PopBox .Block_Text").css({fontSize:"13px"});
				$("#FatFooter").css({fontSize:"90%"});
				$("#FatFooter .Title").css({fontSize:"90%"});
				$("h1").css({fontSize:"30px"});
				$("h2").css({fontSize:"26px"});
				$("h3").css({fontSize:"20px"});
				$("h4").css({fontSize:"16px"});
				$("h5").css({fontSize:"11px"});
				$("h6").css({fontSize:"11px"});
				/*$(".Block0 .MainLink ul li a").css({fontSize:"1em"});*/
				$("#Header .navbar #offcanvas-right ul.nav.White > li a").css({fontSize:"0.9em"});
				return false;
				}
		)
		$(".Word-Class .FontMidium").click(
			function(){
				$(".ContentPage").css({fontSize:"100%"});
				$(".PopBox .Block_Title").css({fontSize:"18px"});
				$(".PopBox .Block_Text").css({fontSize:"15px"});
				$("#FatFooter").css({fontSize:"100%"});
				$("#FatFooter .Title").css({fontSize:"18px"});
				$("h1").css({fontSize:"32px"});
				$("h2").css({fontSize:"2.2em"});
				$("h3").css({fontSize:"26px"});
				$("h4").css({fontSize:"20px"});
				$("h5").css({fontSize:"13px"});
				$("h6").css({fontSize:"13px"});
				/*$(".Block0 .MainLink ul li a").css({fontSize:"1.2em"});*/
				$("#Header .navbar #offcanvas-right ul.nav.White > li a").css({fontSize:"1em"});
				return false;
				}
		)
		$(".Word-Class .FontLarge").click(
			function(){
				$(".ContentPage").css({fontSize:"110%"});
				$(".PopBox .Block_Title").css({fontSize:"20px"});
				$(".PopBox .Block_Text").css({fontSize:"17px"});
				$("#FatFooter").css({fontSize:"110%"});
				$("#FatFooter .Title").css({fontSize:"22px"});
				$("h1").css({fontSize:"43px"});
				$("h2").css({fontSize:"36px"});
				$("h3").css({fontSize:"30px"});
				$("h4").css({fontSize:"23px"});
				$("h5").css({fontSize:"19px"});
				$("h6").css({fontSize:"17px"});
				/*$(".Block0 .MainLink ul li a").css({fontSize:"1.4em"});*/
				$("#Header .navbar #offcanvas-right ul.nav.White > li a").css({fontSize:"1.2em"});
				return false;	
				}
		)
		//$(this).addClass('');
	})

	$(function(){
		$('.Word-Class').find('a').on('click' , function(){
			$('.Word-Class a').removeClass('active');
			$(this).addClass('active');
		})
	})
</script>

<!-- 數位館藏 -->
<script type="text/javascript">
	$(function(){
	    var $website = $('.website'),
	        $web_a = $website.find('.Foto').find('a'),
	        $image = $website.find('.Foto').find('img'),
	        $a = $website.find('.Digi_List').find('a'),
	        $a_length = $a.length,
	        _active_className = 'active',
	        _sliderSpeed = 4000,
	        _index = 0;

	    $a.on('mouseenter focusin', function(){
	        $(this).trigger('change.pic');
	    });

	    $a.on('change.pic', function(){
	        var $this = $(this),
	            $this_i = $this.closest('li').index(),
	            _src = $this.data('src'),
	            _href = $this.attr('href');

	        _index = $this_i;

	        $image.attr('src', _src);
	        $web_a.attr('href', _href);
	        $a.removeClass(_active_className);
	        $this.addClass(_active_className);
	    });

	    $a.eq(_index).trigger('change.pic');

	    //設定計時器
	    var timer;

	    //設定自動撥放涵式
	    function auto(){
	        _index = ( _index + 1 + $a_length ) % $a_length; //算出第幾個要被撥放
	        $a.eq(_index).trigger('change.pic');

	        timer = setTimeout(auto, _sliderSpeed);
	    }

	    //設定滑進滑出項目
	    $website.mouseover(function () {
	        clearTimeout(timer);
	    });

	    $website.mouseout(function () {
	        timer = setTimeout(auto, _sliderSpeed);
	    });

	    //輪播開始
	    timer = setTimeout(auto, _sliderSpeed);
	});
</script>

<!-- dropdownHover-->
<script src="js/bootstrap-hover-dropdown.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
      $('.js-activated').dropdownHover().dropdown();
    });
</script>
<script type="text/javascript">
	$(function () {

		$('ul.nav').children('li.dropdown').keyup(
			function(){
				$(this).children().show();
				$(this).siblings().focus(function(){
					$(this).hide()
				});
			});
		$('ul.nav').children('li.dropdown').keyup(	
			function(){
				$(this).siblings().children('ul').hide();
			});
		$('ul.nav li.dropdown li:last>a').focusout(
		function(){
			$('ul.nav li.dropdown ul').hide();
		})
	});
</script>
<script type="text/javascript">
	$(function () {
		$('.FAQ dd').hide();
    	$('.FAQ dd:first-of-type').show();
    	$('.FAQ dt:first-of-type').addClass("Answerclose");

		$('.FAQ dt').click(function() {
			$('.FAQ dd').slideUp();
			$('.FAQ dt').removeClass("Answerclose");

			$(this).next().slideDown();
			$(this).addClass("Answerclose");
			return false;
		});
	});
</script>

<!--fancy box-->
<script type="text/javascript" src="js/fancyBox/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript">
	$(function(){
	    /* Button helper. Disable animations, hide close button, change title type and content */
	    $('.fancybox-buttons').fancybox({
	        openEffect  : 'none',
	        closeEffect : 'none',

	        prevEffect : 'none',
	        nextEffect : 'none',

	        closeBtn  : false,

	        helpers : {
	            title : {
	                type : 'inside'
	            },
	            buttons : {}
	        },

	        afterLoad : function() {
	            this.title = 'Image ' + (this.index + 1) + ' of ' + this.group.length + (this.title ? ' - ' + this.title : '');
	        }
	    });
	})
</script>
