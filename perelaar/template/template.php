<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
<title>B&amp;B De Perelaar - <?= $title ?></title>
<?php
	if ($lang == 'en') {
		$description = 'A new Bed &amp; Breakfast with two luxury rooms in an exclusive country-side location in Libeek, South Limburg, in rolling hills 10 Km from Maastricht';
		$footer = 'All interior photos were taken inside De Perelaar and all exterior photos in Libeek and the immediate environment. Web site content and design copyright &copy;2007-' . date("Y") . ' De Perelaar. All rights reserved.';
	}
	else {
		$description = 'Een nieuwe Bed &amp; Breakfast met twee luxe kamers op een exclusieve en landelijke locatie in Libeek, Zuid-Limburg, op 10 km afstand van Maastricht midden in het Heuvelland';
		$footer = 'Alle interieur foto’s zijn in De Perelaar genomen en alle foto’s buiten in Libeek en directe omgeving. Website inhoud en ontwerp copyright &copy;2007-' . date("Y") . ' De Perelaar. Alle rechten voorbehouden.';
	}
?>
<meta name="description" content="<?= $description ?>" />
<link rel="shortcut icon" href="/perelaar/favicon.ico">
<link rel="stylesheet" type="text/css" href="style/screen.css">
<style type="text/css">
</style>
</head>
<body id="<?= $page ?>">

<div id="content">

<div id="masthead">
<h1>B&amp;B De Perelaar</h1>
</div>

<?php
	output_content();
?>

<p id="language">
<?php
	if ($lang == 'en') {
		echo '<a href="' . $page . '">Nederlands</a>';
	}
	else {
		echo '<a href="' . $page . '_en">English</a>';
	}
?>
</p>

<ul id="navigation">
<?php
	if ($lang == 'en') {
		navigation_link('home_en', 'Home');
		navigation_link('locatie_en', 'Location');
		navigation_link('kamers_en', 'Rooms');
		navigation_link('adres_en', 'Address &amp; directions');
		navigation_link('tarieven_en', 'Rates');
	}
	else {
		navigation_link('.', 'Home');
		navigation_link('locatie', 'Locatie');
		navigation_link('kamers', 'Kamers');
		navigation_link('adres', 'Adres &amp; route');
		navigation_link('tarieven', 'Tarieven');
	}
?>
</ul>

<p id="footer"><?= $footer ?></p>

</div>

</body>
</html>
