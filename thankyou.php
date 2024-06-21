<?php
include "includes/session.php";
?>
<!doctype html>
<html class="no-js">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Zasya Online</title>
<meta name="viewport" content="width=device-width">
<link rel="shortcut icon" href="images/fav.webp">
<!--[if lt IE 9]>
		<script src="script/html5shiv.min.js"></script>
<![endif]-->
<link rel="stylesheet" href="style/main.css" />
<link rel="stylesheet" href="style/home-animation.css" />
<link href="style/animation.css" rel="stylesheet">
</head>

<body>
<div class="scroll"><img src="images/scroll.png"></div>
<div class="header">
      <div class="tbl-t-1">
        <div class="tbl-r-1">
          <div class="tbl-c-1"><a href="index.html">
            <a href="index.html">
              <img src="images/Zasya Logo-new-1.webp" alt="Logo" />
            </a>
          </a></div>
          <div class="tbl-c-1">
            <div class="mobile-menu"><img src="images/menu.png" /></div>
            <div class="nav-1">
              <ul>
                <li><a href="consulting.html">Consulting Services</a></li>
                <li><a href="mybantu.html">MyBantu</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="contact.html">Contact Us</a></li>
                <li><a href="partner.html"> Partner with Us</a></li>
                <li><a href="careers.html">Careers</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

<section class="panel slide3 img-bg-1 inside-1" data-section-name="slide3">
  <div class="wrapper">
    <div class="home-sec-1a">
      <div class="about-1 text-center-1">
        <div class="getintouch">
        <div class="tbl-gt-1">
          <div class="tbl-gr-1">
            <div class="tbl-gc-1">
			 
              <h2 style="text-align: center;">Thank You</h2>
              <p style="color:Black;font-size: 18px; text-align: center;">Your message has been successfully sent. We will contact you very soon!</p>
            
			<?php if($_SESSION['mag'] == 'ERR'){ ?>
			<h2 style="text-align: center; color:red;">Oops!</h2>
              <p style="color:red;font-size: 18px; text-align: center;">Something went wrong please try again.</p>
			<?php } unset($_SESSION['mag']);?>
			</div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>

  <div class="footer-2">
        <b>&copy; 2024. ZASYA.ONLINE. All Rights Reserved.</b>
  </div>
</section>
<script src="js/jquery-1.11.1.js"></script> 
<script src="js/scroll.js"></script> 
<script src="js/main.js"></script> 
<script src="slider-2/slick.js"></script> 
<script src="js/animation.js"></script> 
<script>
$(document).ready(function(){
$(".Modern-Slider").slick({
autoplay:true,
autoplaySpeed:10000,
speed:1200,
slidesToShow:1,
slidesToScroll:1,
pauseOnHover:false,
dots:true,
pauseOnDotsHover:false,
cssEase:'linear',
// fade:true,
draggable:false,
prevArrow:'<button class="PrevArrow"></button>',
nextArrow:'<button class="NextArrow"></button>', 
});
})
</script> 
<script>
AOS.init({
	easing: 'ease-out-back',
	duration: 1000
});
</script> 
<script>
$(document).ready(function(){
$('.mobile-menu').click(function(){
$('.nav-1').slideToggle(500)
})
})
</script>
	 <script type="text/javascript">

        $(document).ready(function () {

	$('#choose-file').change(function () {

		var i = $(this).prev('label').clone();

		var file = $('#choose-file')[0].files[0].name;

		$(this).prev('label').text(file);

	}); 

 });

    </script>
</body>
</html>
