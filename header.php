<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link href='https://fonts.googleapis.com/css?family=Quicksand:400,700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<?php wp_head();?>
</head>

<body>
  <div class="container">
  	<div class="row header">
  		
  		<div class="col-xs-12 nav">
  			
  		<?php

		$defaults = array(
    
    		'menu_class'      => 'nav nav-pills',
    
		);

		wp_nav_menu( $defaults );

		?>
  		</div> <!-- end of nav --> 


	
  	</div> <!-- end of header -->

	
<div class="category">

	<?php

		if(( is_home() )){

    		echo '<h2>- Start Your Adventure -<h2>';

}
		else{

    	echo the_category('<h2>','</h2>');
}

?>

	</h2>
</div> <!-- end of category title -->