<?php 
/**
 * Header Template
 *
 * @package [level 1]\[level 2]\[etc.]
 */

?><!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8">

		<!-- Make Responsive -->
		<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

		<?php wp_head(); ?>
	</head>

	<body <?php body_class( '' ); ?>>
		<?php echo '<!-- ' . basename( get_page_template() ) . ' -->'; ?>