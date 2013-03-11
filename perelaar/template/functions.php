<?php

	function navigation_link($relative_url, $label) {
		global $page;
		$is_home_page = ($relative_url === '.' && $page === 'home');
		echo '<li>';
		if ($relative_url === $page || substr($relative_url, 0, -3) === $page || $is_home_page) {
			echo "<strong>$label</strong>";
		} 
		else { 
			echo "<a href=\"$relative_url\">$label</a>";
		}
		echo '</li>';
	}

?>