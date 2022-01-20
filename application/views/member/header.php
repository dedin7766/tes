

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>SMAN 2 KLARI</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Startup Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->
	<!-- Custom-Files -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.css'?>"
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css'?>" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="<?php echo base_url().'assets/css/font-awesome.min.css'?>" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext"
	 rel="stylesheet">
	<!-- //Web-Fonts -->

<body style="padding:0px; margin:0px; background-color:#fff;font-family:arial,helvetica,sans-serif,verdana,'Open Sans'">

    <!-- #region Jssor Slider Begin -->
    <!-- Generator: Jssor Slider Maker -->
    <!-- Source: https://www.jssor.com -->
    <script src="<?php echo base_url().'assets3/js/jquery-1.11.3.min.js'?>" type="text/javascript"></script>
    <script src="<?php echo base_url().'assets3/js/jssor.slider-27.5.0.min.js'?>" type="text/javascript"></script>
    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_SlideshowTransitions = [
              {$Duration:800,$Opacity:2}
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $SlideshowOptions: {
                $Class: $JssorSlideshowRunner$,
                $Transitions: jssor_1_SlideshowTransitions,
                $TransitionsOrder: 1
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 980;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        });
    </script>
    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 051 css*/
        .jssorb051 .i {position:absolute;cursor:pointer;}
        .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;}
        .jssorb051 .i:hover .b {fill-opacity:.7;}
        .jssorb051 .iav .b {fill-opacity: 1;}
        .jssorb051 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 051 css*/
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
  

</head>

<body>
	<!-- main banner -->
	<div class="main-top" id="home">
		<!-- header -->
		<header>

			<div class="container-fluid">
				<div class="header d-lg-flex justify-content-between align-items-center py-3 px-sm-3">
					<!-- logo -->
					 
    <!-- #endregion Jssor Slider End -->

					<div id="logo">
						<h1><a href="index.html"><span class="fa fa-university"></span>SMAN 2 KLARI</a></h1>
					</div>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav_w3ls">
						<nav>
							<label for="drop" class="toggle">Menu</label>
							<input type="checkbox" id="drop" />
							<ul class="menu">
                                <?php if ($chek['status'] == "Sudah Pilih"): ?>

                                 <a href="<?= base_url() ?>member/sukses"><img src="<?php echo base_url().'/assets/upload/'.$anggota['gambar']; ?>" width="30" height="30" alt="User" class="rounded-circle"> <i class="fa fa-circle text-success"></i> <?=$this->session->userdata('nama_agt')?></a></li>
                              
                               <?php else:?>
                                 <li><a href="<?= base_url() ?>member/voting">Vote</a></li>
                             
                                <?php if ( ! $this->session->userdata('nama_agt') ): ?>
      <?php else: ?>

                                  <i class="fa fa-circle text-success"></i> <?=$this->session->userdata('nama_agt')?></a></li>
<?php endif?>

							</ul>
						</nav>
					</div>
					<!-- //nav -->
					<div class=" justify-content-center">
						<!-- search -->
						  <?php endif ?>
						<!-- //search -->
						<!-- download -->
					
            
             <?php if ( ! $this->session->userdata('nama_agt') ): ?>
						<a class="dwn-w3ls btn" href="<?= base_url(); ?>login_siswa">
							<span class="fa fa-sign-in"></span>
						</a>
				    <?php else: ?>
                    <a class="btn btn-danger" href="<?= base_url() ?>member/logout"><span class="fa fa-sign-out"></span></a>
                    <?php endif ?>
						<!-- //download -->
					</div>
				</div>
			</div>
		</header>

		<!-- banner -->
		