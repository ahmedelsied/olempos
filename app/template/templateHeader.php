<!doctype html>
<html class="no-js" lang="ar">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>عنوان</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- favicon -->		
		<link rel="shortcut icon" type="image/x-icon" href="<?=IMG?>logo/favicon.png">
		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="<?=CSS?>bootstrap.min.css">
        <!-- bootstrap RTL -->
		<link rel="stylesheet" href="<?=CSS?>bootstrap-rtl.css">
		<!-- owl.carousel css -->
		<link rel="stylesheet" href="<?=CSS?>owl.carousel.css">
		<link rel="stylesheet" href="<?=CSS?>owl.transitions.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="<?=CSS?>meanmenu.min.css">
		<!-- font-awesome css -->
		<link rel="stylesheet" href="<?=CSS?>font-awesome.min.css">
		<link rel="stylesheet" href="<?=CSS?>icon.css">
		<link rel="stylesheet" href="<?=CSS?>flaticon.css">
		<!-- magnific css -->
        <link rel="stylesheet" href="<?=CSS?>magnific.min.css">
		<!-- venobox css -->
		<link rel="stylesheet" href="<?=CSS?>venobox.css">
		<!-- style css -->
		<link rel="stylesheet" href="<?=CSS?>style.css">
		<!-- responsive css -->
		<link rel="stylesheet" href="<?=CSS?>responsive.css">
		<!-- modernizr css -->
		<script src="<?=JS?>vendor/modernizr-2.8.3.min.js"></script>
		<style>
			.suc-msg{    
				position: fixed;
				top: 20px;
				right: 20px;
				width: 400px;
				padding: 10px;
				font-weight: bold;
				z-index: 999999;
			}
			.parent {
				cursor: default;
				height: 300px;
				color: white !important;
				position: absolute;
				top: 43%;
				left: 50%;
				transform: translateY(-50%) translateX(-50%);
			}
			.parent .message {
				letter-spacing: 1px;
				font-weight: 600;
				color: white !important;
				font-size: 25px;
			}
			.parent .error {
				font-size: 288px;
				font-weight: bold;
				margin-top: 125px;
				margin-bottom: 85px;
				color: white !important;
				margin-right: 180px;
			}
			.parent .error span {
				position: absolute;
				transform: rotate(-39.61deg);
				right:0;
			}
			.parent .word {
				font-weight: bold;
				line-height: normal;
				font-size: 96px;
			}
			.parent a {
				color: white;
				background: #001d38;
				-webkit-box-shadow: 1px 1px 7px #040404;
				-moz-box-shadow: 1px 1px 7px #040404;
				-o-box-shadow: 1px 1px 7px #040404;
				-ms-box-shadow: 1px 1px 7px #040404;
				box-shadow: 1px 1px 7px #040404;
				border: none;
				border-radius: 9px;
				padding: 5px;
				line-height: normal;
				font-size: 17px;
				outline: none;
			}
		</style>
	</head>
		<body <?=isset($this->bodyBG)? $this->bodyBG : ''?>>
        