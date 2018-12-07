<!DOCTYPE html>
<html>
<head>
	<title>Landing Page</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/js/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/js/slick/slick-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/js/fancybox-master/dist/jquery.fancybox.css">

	
</head>
<body>
	<header class="site-header">
		<div class="container header-container">
		<a href="/img" class="site-header__logo"><img src="assets/img/logo.png"></a>

		<nav class="site-header__menu main-menu">
			<ul>
				<li><a href="?page=home">Home</a></li>
				<li><a href="?page=features">Features</a></li>
				<li><a href="?page=gallery">Gallery</a></li>
				<li><a href="?page=video">Video</a></li>
				<li><a href="?page=prices">PriceS</a></li>
				<li><a href="?page=testimonials">Testimonials</a></li>
				<li><a href="?page=download">Download</a></li>
				<li><a href="?page=contact">Contact</a></li>		                                                                                
			</ul>
		</nav>

       
            
        
        <div class="slick-slider">
            <div class="container_content">
                <div class="container_content--title">Simple, Beautiful <span>and Amazing</span></div>
                <div class="container_content--text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget nunc vitae tellus luctus ullamcorper. Nam porttitor ullamcorper felis at convallis. Aenean ornare vestibulum nisi fringilla lacinia. Nullam pulvinar sollicitudin velit id laoreet. Quisque non rhoncus sem.</div>
                <div class="container_content--buttons"></div>
                <div class="container_content--aavialable"></div>

                <a href="#" class="container_content-downloadbutton">download</a>
                <a href="#" class="container_content-learnmore">LEARN MORE</a>

                <div class="available-block">
                <span>Aavailable on :</span>
                <a href="#"> <div class="available-block-apple"></div></a>
                <a href="#"><div class="available-block-android"></div></a>
                </div>
            </div>

            <div class="container_content">
                <div class="container_content--title">Simple, Beautiful <span>and Amazing</span></div>
                <div class="container_content--text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget nunc vitae tellus luctus ullamcorper. Nam porttitor ullamcorper felis at convallis. Aenean ornare vestibulum nisi fringilla lacinia. Nullam pulvinar sollicitudin velit id laoreet. Quisque non rhoncus sem.</div>
                <div class="container_content--buttons"></div>
                <div class="container_content--aavialable"></div>

                <a href="#" class="container_content-downloadbutton">download</a>
                <a href="#" class="container_content-learnmore">LEARN MORE</a>

                <div class="available-block">
                <span>Aavailable on :</span>
                <a href="#"> <div class="available-block-apple"></div></a>
                <div class="available-block-android"></div>
                </div>
            </div>

            <div class="container_content">
                <div class="container_content--title">Simple, Beautiful <span>and Amazing</span></div>
                <div class="container_content--text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eget nunc vitae tellus luctus ullamcorper. Nam porttitor ullamcorper felis at convallis. Aenean ornare vestibulum nisi fringilla lacinia. Nullam pulvinar sollicitudin velit id laoreet. Quisque non rhoncus sem.</div>
                <div class="container_content--buttons"></div>
                <div class="container_content--aavialable"></div>

                <a href="#" class="container_content-downloadbutton">download</a>
                <a href="#" class="container_content-learnmore">LEARN MORE</a>

                <div class="available-block">
                <span>Aavailable on :</span>
                <a href="#"><div class="available-block-apple"></div></a>
                <a href="#"><div class="available-block-android"></div></a>
                </div>


            </div>
        </div>
        

		</div>
	</header>
	<div class="first-screen">
		
	</div>

    <?
        if ( $_GET['page'] == 'features') {
            // echo "features";
            include_once('pages/features.php');

        } else if ($_GET['page'] == 'gallery') {
            // echo "gallery";
            include_once('pages/gallery.php');
        } else if ($_GET['page'] == 'video') {
            // echo "video";
            include_once('pages/video.php');
        } else if ($_GET['page'] == 'prices') {
            // echo "prices";
            include_once('pages/prices.php');
        } else if ($_GET['page'] == 'testimonials') {
            // echo "testimonials";
            include_once('pages/testimonials.php');
        } else if ($_GET['page'] == 'download') {
            // echo "download";
            include_once('pages/download.php');
        }  else if ($_GET['page'] == 'contact') {
            // echo "contact";
            include_once('pages/contact.php');
        } else  {
            // echo "home";
            include_once('pages/home.php');
        } 

    ?>
                     
   
    
    <footer>
        <div class="container">
            
            <div class="copyright"><a href="#">
                Copyright © 2013 | bazinger | All Rights Reserved</a>
            </div>
            
            <div class="privacy">
               <a href="#"> Terms of Service | Privacy Policy</a>
            
            </div>
            
        </div>
    </footer>
    
    <script type="text/javascript" src="assets/js/jquery-3.0.0.min.js"></script>
    <script type="text/javascript" src="assets/js/slick/slick.js"></script>
    <script type="text/javascript" src="assets/js/fancybox-master/dist/jquery.fancybox.js"></script>
    <!-- <script src="https://api-maps.yandex.ru/2.1/?apikey=<ACB6_lsBAAAA53FkIQIAsNm4RHO5kcp5WfW1XpROqz-8qewAAAAAAAAAAAAmEGU1wH49W1Xwb_v07X_OSLQDmg==>&lang=ru_RU" type="text/javascript">
    </script> -->
    <script type="text/javascript" src="assets/js/ajaxScript.js"></script>
    <script type="text/javascript" src="assets/js/scripts.js"></script>
    
     
</body>
</html>