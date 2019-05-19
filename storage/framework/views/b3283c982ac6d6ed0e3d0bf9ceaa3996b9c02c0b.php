<!DOCTYPE HTML>
<html>
<head>
<title>SurPrice</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" type="image/png" href="<?php echo e(URL::asset('iconku.png')); ?>">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
<link href="<?php echo e(URL::asset('css/style.css')); ?>" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?php echo e(URL::asset('js/jquery.min.js')); ?>"></script>

<!-- Bootstrap -->
    <link href="<?php echo e(URL::asset('css/bootstrap.min.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/css/animate.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/css/iconfont.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/css/bootstrap.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/css/magnific-popup.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/css/bootsnav.css')); ?>">
<!--Theme Responsive css-->
    <link rel="stylesheet" href="<?php echo e(URL::asset('assets/css/responsive.css')); ?>">

<!-- start slider -->		
	<link href="<?php echo e(URL::asset('css/slider.css')); ?>" rel="stylesheet" type="text/css" media="all">
	<script type="text/javascript" src="<?php echo e(URL::asset('js/modernizr.custom.28468.js')); ?>"></script>
	<script type="text/javascript" src="<?php echo e(URL::asset('js/jquery.cslider.js')); ?>"></script>
	<script type="text/javascript">
		$(function() {
			$('#da-slider').cslider();
		});
	</script>
		<!-- Owl Carousel Assets -->
		<link href="<?php echo e(URL::asset('css/owl.carousel.css')); ?>" rel="stylesheet">
		     <!-- Owl Carousel Assets -->
		    <!-- Prettify -->
		    <script src="<?php echo e(URL::asset('js/owl.carousel.js')); ?>"></script>
		        <script>
		    $(document).ready(function() {
		
		      $("#owl-demo").owlCarousel({
		        items : 4,
		        lazyLoad : true,
		        autoPlay : true,
		        navigation : true,
			    navigationText : ["",""],
			    rewindNav : false,
			    scrollPerPage : false,
			    pagination : false,
    			paginationNumbers: false,
		      });
		
		    });
		    </script>
		   <!-- //Owl Carousel Assets -->
		<!-- start top_js_button -->
		<script type="text/javascript" src="<?php echo e(URL::asset('js/move-top.js')); ?>"></script>
		<script type="text/javascript" src="<?php echo e(URL::asset('js/easing.js')); ?>"></script>
		   <script type="text/javascript">
				jQuery(document).ready(function($) {
					$(".scroll").click(function(event){		
						event.preventDefault();
						$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
					});
				});
			</script>
</head>
<body>
<!-- start header -->
<div class="header_bg">
<div class="wrap">
	<div class="header">
		<div class="logo">
			<a href="index.html"><img src="<?php echo e(URL::asset('images/Surprice.png')); ?>" alt=""/> </a>
		</div>
	
		<div class="h_search">
    		<form>
    			<input type="text" value="">
    			<input type="submit" value="">
    		</form>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
<div class="header_btm">
<div class="wrap">
	<div class="header_sub">
		<div class="top-nav">
	        <div class="search_box">
				<form>
				   <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
			    </form>
			</div>
	          <div class="clear"> </div>
	          <script src="<?php echo e(URL::asset('js/responsive.menu.js')); ?>"></script>
         </div>		  
	<div class="clear"></div>
</div>
</div>
</div>

<!-- start main -->
<div class="main_bg">
<div class="wrap">	
	<div class="main">
		<!-- start grids_of_3 -->
		<div class="grids_of_3">
			<div class="grid1_of_3">
				<a href="https://www.tokopedia.com/fat-on-ah/oppo-f9-4-64gb-brand-new-in-box-garansi-resmi?src=topads">
					<img src="images/pic1.jpg" alt=""/>
					<h3>Oppo F9</h3>
					<br><h5>Tokopedia</h5></br>
					<div class="price">
						<h4>Rp 3.799.000</h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="grid1_of_3">
				<a href="https://www.tokopedia.com/williamandy/rice-cooker-cosmos-magic-com-1-8liter-nonstick-crj323s?trkid=f=Ca0000L000P0W0S0Sh00Co0Po0Fr0Cb0_src=search_page=1_ob=23_q=Magic+Com_po=2_catid=920&lt=/searchproduct%20-%20p1%20-%20product">
					<img src="images/pic2.jpg" alt=""/>
					<h3>Magic Com</h3>
					<br><h5>Tokopedia</h5></br>
					<div class="price">
						<h4>Rp 228.900</h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="grid1_of_3">
				<a href="https://www.tokopedia.com/alvieofashion/jaket-bomber-pilot-pria-kekinian-navy-army-original-v-club-e328?src=topads">
					<img src="images/pic3.jpg" alt=""/>
					<h3>Jaket Bomber</h3>
					<br><h5>Tokopedia</h5></br>
					<div class="price">
						<h4>Rp 150.000</h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="grids_of_3">
			<div class="grid1_of_3">
				<a href="https://www.tokopedia.com/risrus/celana-tactical-celana-panjang-cargo-outdoor-pria-army-cowok-polisi-hijau-28?src=topads">
					<img src="images/pic4.jpg" alt=""/>
					<h3>Celana Cargo</h3>
					<br><h5>Tokopedia</h5></br>
					<div class="price">
						<h4>Rp 90.000</h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="grid1_of_3">
				<a href="https://www.tokopedia.com/kitaro/jas-hujan-axio-original-parasut-m-l-xl?trkid=f=Ca0000L000P0W0S0Sh00Co0Po0Fr0Cb0_src=search_page=1_ob=23_q=Jas+Hujan+Axio_po=4_catid=1318&lt=/searchproduct%20-%20p1%20-%20product">
					<img src="images/pic5.jpg" alt=""/>
					<h3>Jas Hujan</h3>
					<br><h5>Tokopedia</h5></br>
					<div class="price">
						<h4>Rp 189.000</h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="grid1_of_3">
				<a href="https://www.bukalapak.com/p/kamera/kamera-digital/10i09ct-jual-kamera-dslr-canon-600d-fulset-layar-flip-jernih?from=&keyword=&product_owner=normal_seller">
					<img src="images/pic6.jpg" alt=""/>
					<h3>Kamera Dslr Canon</h3>
					<br><h5>Bukalapak</h5></br>
					<div class="price">
						<h4>Rp 3.850.000</h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="clear"></div>
		</div>
		<div class="grids_of_3">
			<div class="grid1_of_3">
				<a href="https://www.bukalapak.com/p/komputer/printer/unit-printer/rf70lj-jual-printer-epson-l120?from=omnisearch&product_owner=normal_seller&search%5Bkeywords%5D=Printer%20epson">
					<img src="images/pic7.jpg" alt=""/>
					<h3>Printer</h3>
					<br><h5>Bukalapak</h5></br>
					<div class="price">
						<h4>Rp 1.410.000</h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="grid1_of_3">
				<a href="https://www.bukalapak.com/p/olahraga/outdoor/tas-ransel-carrier/2s9w6f-jual-tas-carrier-consina-tarebi-60l-tas-gunung-karier-keril-outdoor?from=omnisearch&product_owner=normal_seller&search%5Bkeywords%5D=Tas%20Karier">
					<img src="images/pic8.jpg" alt=""/>
					<h3>Tas Carrier Consina 60L</h3>
					<br><h5>Bukalapak</h5></br>
					<div class="price">
						<h4>Rp 515.000</h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="grid1_of_3">
				<a href="https://www.bukalapak.com/p/olahraga/outdoor/sleeping-bag/y836d5-jual-xaba-sleeping-bag-mummy-lore-ultralight-merah?dtm_section=top_promoted&dtm_source=list-product&from=&product_owner=seller_brand">
					<img src="images/pic9.jpg" alt=""/>
					<h3>Sleeping Bag Xaba</h3>
					<br><h5>Bukalapak</h5></br>
					<div class="price">
						<h4>Rp 166.500</h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			<div class="clear"></div>
		</div>	
		<!-- end grids_of_3 -->
	</div>
</div>
</div>	

<!-- start footer -->
<div class="footer_bg">
<div class="wrap">	
	<div class="footer">
		<!-- start grids_of_4 -->	
		<div class="grids_of_4">
			<div class="grid1_of_4">
				<style>
<div.static {
  position: fixed;
  bottom: 0;
  right: 0;
  width: 300px;
  border: 3px solid #543535;
}
</style>
<h4>Contact Us</h4>
<ul class="f_nav">
	<li><a href="https://www.instagram.com/moehtaroom27/">Alwan Muhtarom</a></li>
	<li><a href="https://www.instagram.com/bo2ho_hrlambang/">Eggi Herlambang</a></li>
	<li><a href="https://www.instagram.com/fahniamsyari/">Fahni Amsyari</a></li>
</ul>
</div>
<div class="clear"></div>
</div>
</div>
</div>
</div>



</body>
</html>
