<!doctype html>
<!--[if lt IE 7]><html class="ie6" lang="en"> <![endif]-->
<!--[if IE 7]><html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8]><html class="ie8" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head> 
    <title>Responsive Parallax Scroll</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta charset="utf-8"> 
    <meta name="description" content="" /> 
    <meta name="keywords" content="" />
    <meta name="author" content="Jack Stenson" /> 
    <!-- STYLES --> 
    <link href="./css/style.min.css?v1" rel="stylesheet" type="text/css" media="screen" /> 
    <!--[if lte IE 8]>
        <link rel="stylesheet" type="text/css" href="./css/styleie8.css?v1" />
    <![endif]-->  
    <!--[if lte IE 7]>
        <link rel="stylesheet" type="text/css" href="./css/styleie7.css?v1" />
    <![endif]-->
    <!--[if lte IE 6]>
        <link rel="stylesheet" type="text/css" href="./css/styleie6.css?v1" />
    <![endif]-->
    <!-- ICONS -->
    <link href="./favicon.ico" type="image/x-icon" rel="icon" />
    <link href="./favicon.ico" rel="shortcut icon" type="image/x-icon"/>
    <link href="./touch-icon-iphone.png" rel="apple-touch-icon"/>
    <link href="./touch-icon-iphone4.png" rel="apple-touch-icon" sizes="114x114"/>
    <link href="./touch-icon-ipad.png" rel="apple-touch-icon" sizes="72x72"/>
    <link href="./touch-icon-ipad3.png" rel="apple-touch-icon" sizes="144x144"/>
    <!-- SCRIPTS -->
	<link rel="canonical" href="/items" />
	<link rel="next" href="/items.php?page=2"/>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="./script/jquery.stellar.min.js"></script>
	<script src="./script/picturefill.min.js"></script>
	<script>
		$(function(){
			$.stellar({
				responsive:true,
				horizontalScrolling: false,
				verticalOffset: -100
			});
		});
	</script>
	<script src="./script/resources.js"></script>

	<script>initPaginator();</script>
</head>
<body>
	<div id="container" class="clearfix">
		<h1>123</h1>
		<p>test</p>
		<div class="banner-1" data-stellar-background-ratio="0.8" data-stellar-horizontal-offset="1000"></div>
		<div class="divide" data-stellar-background-ratio="0.8" data-stellar-horizontal-offset="1000">
			<div class="content bodytext">
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque ante massa, iaculis placerat erat vitae, elementum convallis libero. Morbi hendrerit lorem sed iaculis ultricies. Vivamus et venenatis lacus. Duis quam lacus, scelerisque at luctus quis, malesuada sed enim. Nulla sodales magna arcu, in eleifend nisl rutrum vel. Proin pharetra at libero id viverra. Nulla a risus molestie, fermentum urna eget, pharetra lectus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla euismod vel eros quis congue. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
			</div>
		</div>

	</div>
<!-- SCRIPTS -->
<script type="text/javascript">
next_data_url = './script/items.php?page=2&type=json';
prev_data_url = '';
primeCache();
 </script>
</body>
</html>