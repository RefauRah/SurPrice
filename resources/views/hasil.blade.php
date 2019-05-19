<!DOCTYPE HTML>
<html>
<head>
<title>SurPrice</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" type="image/png" href="{{ URL::asset('iconku.png') }}">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700' rel='stylesheet' type='text/css'>
<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>

<!-- Bootstrap -->
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/iconfont.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/bootsnav.css') }}">
<!--Theme Responsive css-->
    <link rel="stylesheet" href="{{ URL::asset('assets/css/responsive.css') }}">

<!-- start slider -->		
	<link href="{{ URL::asset('css/slider.css') }}" rel="stylesheet" type="text/css" media="all">
	<script type="text/javascript" src="{{ URL::asset('js/modernizr.custom.28468.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/jquery.cslider.js') }}"></script>
	<script type="text/javascript">
		$(function() {
			$('#da-slider').cslider();
		});
	</script>
		<!-- Owl Carousel Assets -->
		<link href="{{ URL::asset('css/owl.carousel.css') }}" rel="stylesheet">
		     <!-- Owl Carousel Assets -->
		    <!-- Prettify -->
		    <script src="{{ URL::asset('js/owl.carousel.js') }}"></script>
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
		<script type="text/javascript" src="{{ URL::asset('js/move-top.js') }}"></script>
		<script type="text/javascript" src="{{ URL::asset('js/easing.js') }}"></script>
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
			<a href="{{route('surprice')}}"><img src="{{ URL::asset('images/Surprice.png') }}" alt=""/> </a>
		</div>
	
		<div class="h_search">
    		<form method="post" action="{{ route('produk.search') }}" enctype="multipart/form-data">
    			@csrf
    			<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
    			<input type="text" value="" name="nama_produk">

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
				<form method="post" action="{{ route('produk.search') }}" enctype="multipart/form-data">
					@csrf
					<input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
				   <input type="text" name="nama_produk" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
			    </form>
			</div>
	          <div class="clear"> </div>
	          <script src="{{ URL::asset('js/responsive.menu.js') }}"></script>
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
			@foreach ($data_produk as $produk)
			<div class="grid1_of_3">
				<a href="{{$produk->link}}">
					<img src="{{URL::asset($produk->image)}}" alt=""/>
					<h3>{{$produk->nama_produk}}</h3>
					<br><h5>{{$produk->asal}}</h5></br>
					<div class="price">
						<h4>Rp {{$produk->harga}}</h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			@endforeach
			
			<div class="clear"></div>
		</div>

		<div class="grids_of_3">
			@foreach ($data_produk2 as $produk)
			<div class="grid1_of_3">
				<a href="{{$produk->link}}">
					<img src="{{URL::asset($produk->image)}}" alt=""/>
					<h3>{{$produk->nama_produk}}</h3>
					<br><h5>{{$produk->asal}}</h5></br>
					<div class="price">
						<h4>Rp {{$produk->harga}}</h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			@endforeach
			
			<div class="clear"></div>
		</div>

		<div class="grids_of_3">
			@foreach ($data_produk3 as $produk)
			<div class="grid1_of_3">
				<a href="{{$produk->link}}">
					<img src="{{URL::asset($produk->image)}}" alt=""/>
					<h3>{{$produk->nama_produk}}</h3>
					<br><h5>{{$produk->asal}}</h5></br>
					<div class="price">
						<h4>Rp {{$produk->harga}}</h4>
					</div>
					<span class="b_btm"></span>
				</a>
			</div>
			@endforeach
			
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
