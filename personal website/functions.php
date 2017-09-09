<?php
	include('includes/class-theme-methods.php');

	function do_main_nav() {
		global $dtm;
		
		$class = "main_nav";
		
		$items_array = array ( 
									array('text' => 'Home', 'url' => '/test'),
									array('text' => 'About', 'url' => 'about.php'),
									array('text' => 'Recent Talks', 'url' => 'Recent Talks.php'),
									array('text' => 'Gallary ', 'url' => 'http://localhost/test/admin/gallery/index.php'),
									array('text' => 'Journal Articles ', 'url' => 'Journal Articles.php'),
									array('text' => 'Honours and Awards', 'url' => 'Honours and Awards.php'),
									array('text' => 'Login', 'url' => 'http://localhost/test/admin/')


								);
		
		return $dtm->navigation($items_array, $class);
	}
	
	function do_html_title($page_title) {
		$title = $page_title . ' | Demo Theme';
		
		return $title;
	}
?>
