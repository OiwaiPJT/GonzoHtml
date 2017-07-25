<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="HandheldFriendly" content="true" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/content/icon.png">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
  <?php if ( is_singular() ) wp_enqueue_script( "comment-reply" );
  wp_head(); ?>
</head>
<body>
	<!-- <div class="page-loader">
		 <div class="vertical-align align-center">
			  <img src="<?php echo get_template_directory_uri(); ?>/assets/loader/loader.gif" alt="" class="loader-img">
		 </div>
	</div> -->
