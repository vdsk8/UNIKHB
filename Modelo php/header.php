<!doctype html>

<html <?php language_attributes(); ?> class="no-js">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title><?php wp_title(''); ?></title>

<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

<meta name="classification" content="" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<meta name="language" content="pt-br" />
<meta name="resource-type" content="document" />
<meta name="DC.title" content="" />
<meta name="robots" content="ALL" />
<meta name="distribution" content="Global" />
<meta name="rating" content="General" />
<meta name="doc-class" content="Completed" />
<meta name="doc-rights" content="Public" />
<meta name="expires" content="never" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<!-- wordpress head functions -->
<?php wp_head(); ?>
<!-- end of wordpress head -->
<!-- IE8 fallback moved below head to work properly. Added respond as well. Tested to work. -->
<!-- media-queries.js (fallback) -->
<!--[if lt IE 9]>
			<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>			
		<![endif]-->

<!-- html5.js -->
<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

<!-- respond.js -->
<!--[if lt IE 9]>
		          <script type='text/javascript' src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.js"></script>
		<![endif]-->

    <!-- Bootstrap Core CSS -->
    <!-- <link href="<?php //bloginfo('template_url'); ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Theme CSS -->
   <link href="style.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php bloginfo('template_url'); ?>/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- Font -->
	<link href="https://fonts.googleapis.com/css?family=Yesteryear" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
	<!-- ==================================================================================================================== -->
        
</head>


<body id="page-top" class="index">