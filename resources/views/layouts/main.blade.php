<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<title>White | responsive bootstrap3 html5 one page template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">

	<link rel="shortcut icon" href="images/favicon.ico">

	<!-- CSS -->
	<link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ URL::asset('css/flexslider.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ URL::asset('css/prettyPhoto.css') }}" rel="stylesheet" type="text/css" />
	<link href="{{ URL::asset('css/animate.css') }}" rel="stylesheet" type="text/css" media="all" />
  <link href="{{ URL::asset('css/owl.carousel.css') }}" rel="stylesheet">
	<link href="{{ URL::asset('css/style.css') }}" rel="stylesheet" type="text/css" />

	<!-- FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500italic,700,500,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

	<!-- SCRIPTS -->
	<!--[if IE]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <!--[if IE]><html class="ie" lang="en"> <![endif]-->

	<script src="{{ URL::asset('js/jquery.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/jquery.prettyPhoto.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/jquery.nicescroll.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/superfish.min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/jquery.flexslider-min.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/owl.carousel.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/animate.js') }}" type="text/javascript"></script>
	<script src="{{ URL::asset('js/jquery.BlackAndWhite.js') }}"></script>
	<script src="{{ URL::asset('js/myscript.js') }}" type="text/javascript"></script>
	<script>

		//PrettyPhoto
		jQuery(document).ready(function() {
			$("a[rel^='prettyPhoto']").prettyPhoto();
		});

		//BlackAndWhite
		$(window).load(function(){
			$('.client_img').BlackAndWhite({
				hoverEffect : true, // default true
				// set the path to BnWWorker.js for a superfast implementation
				webworkerPath : false,
				// for the images with a fluid width and height
				responsive:true,
				// to invert the hover effect
				invertHoverEffect: false,
				// this option works only on the modern browsers ( on IE lower than 9 it remains always 1)
				intensity:1,
				speed: { //this property could also be just speed: value for both fadeIn and fadeOut
					fadeIn: 300, // 200ms for fadeIn animations
					fadeOut: 300 // 800ms for fadeOut animations
				},
				onImageReady:function(img) {
					// this callback gets executed anytime an image is converted
				}
			});
		});

	</script>

</head>
<body>

<!-- PRELOADER -->
<img id="preloader" src="{{ URL::asset('images/preloader.gif') }}" alt="" />
<!-- //PRELOADER -->
<div class="preloader_hide">

	<!-- PAGE -->
	<div id="page">

		<!-- HEADER -->
		<header>
			@include('layouts.menu')
			</div><!-- //CONTAINER -->
		</header><!-- //HEADER -->
    @yield('content')
	</div><!-- //PAGE -->

	<!-- CONTACTS -->
	<section id="contacts">
	</section><!-- //CONTACTS -->

	<!-- FOOTER -->
	<footer>

		<!-- CONTAINER -->
		<div class="container">
			<!-- ROW -->
			<div class="row" data-appear-top-offset="-200" data-animated="fadeInUp">
        @include('layouts.last_posts')
				<div class="col-lg-4 col-md-4 col-sm-6 padbot30 foot_about_block">
					<h4><b>About</b> us</h4>
					<p>We value people over profits, quality over quantity, and keeping it real. As such, we deliver an unmatched working relationship with our clients.</p>
					<p>Our team is intentionally small, eclectic, and skilled; with our in-house expertise, we provide sharp and</p>
					<ul class="social">
						<li><a href="javascript:void(0);" ><i class="fa fa-twitter"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="fa fa-facebook"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="fa fa-google-plus"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="fa fa-pinterest-square"></i></a></li>
						<li><a href="javascript:void(0);" ><i class="map_show fa fa-map-marker"></i></a></li>
					</ul>
				</div>

				<div class="respond_clear"></div>

				<div class="col-lg-4 col-md-4 padbot30">
					<h4><b>Contacts</b> Us</h4>

					<!-- CONTACT FORM -->
					<div class="span9 contact_form">
						<div id="note"></div>
						<div id="fields">
							<form id="contact-form-face" class="clearfix" action="#">
								<input type="text" name="name" value="Name" onFocus="if (this.value == 'Name') this.value = '';" onBlur="if (this.value == '') this.value = 'Name';" />
								<textarea name="message" onFocus="if (this.value == 'Message') this.value = '';" onBlur="if (this.value == '') this.value = 'Message';">Message</textarea>
								<input class="contact_btn" type="submit" value="Send message" />
							</form>
						</div>
					</div><!-- //CONTACT FORM -->
				</div>
			</div><!-- //ROW -->
		</div><!-- //CONTAINER -->
	</footer><!-- //FOOTER -->


	<!-- MAP -->
	<div id="map">
		<a class="map_hide" href="javascript:void(0);" ><i class="fa fa-angle-right"></i><i class="fa fa-angle-left"></i></a>
		<iframe src="http://maps.google.com/maps?f=q&amp;give%20a%20hand=s_q&amp;hl=en&amp;geocode=&amp;q=london&amp;sll=37.0625,-95.677068&amp;sspn=42.631141,90.263672&amp;ie=UTF8&amp;hq=&amp;hnear=London,+United+Kingdom&amp;ll=51.500141,-0.126257&amp;spn=0.026448,0.039396&amp;z=14&amp;output=embed" ></iframe>
	</div><!-- //MAP -->

</div>
</body>
</html>
