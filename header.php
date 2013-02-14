<?php
namespace Habari;
if ( !defined( 'HABARI_PATH' ) ) { die('No direct access'); }
?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?php echo $locale; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="<?php echo $locale; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="<?php echo $locale; ?>"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="<?php echo $locale; ?>"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<title><?php if($request->display_entry && isset($post)) { echo $post->title_title . ' - '; } ?><?php echo Options::get ('title'); ?></title>
    	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $theme->get_url( 'assets/css/docs.css' ); ?>">
	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $theme->get_url( 'assets/css/bootstrap.css' ); ?>">
<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $theme->get_url( 'assets/css/bootstrap-responsive.css' ); ?>">
    	<link rel="stylesheet" type="text/css" media="screen" href="<?php echo $theme->get_url( 'assets/css/style.css' ); ?>">

<meta name="viewport" content="width=device-width">
<!-- <link rel="profile" href="http://microformats.org/profile/hcard"> -->
	<?php
		echo $theme->header();
	?>
</head>

<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href=""<?php echo Site::get_url( 'habari' ); ?>"><?php echo Options::get ('title'); ?></a>
          <div class="nav-collapse collapse">
            <ol class="nav">
              <li class="active"><a href="#"><i class="icon-home icon-white"></i>Home</a></li>
                        	<ul id="#" class="menu">
	<?php echo $theme->area( 'nav' ); ?>
	
		
	</ul>
            </ol>
          
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>