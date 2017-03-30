<?php

require 'inc/config.php';
use inc\model\Film;

$currentId = 0;
$filmInfos = FILM::getFilm($currentId);

require 'inc/view/header.php';

if (sizeof($filmInfos) > 0) {
	require 'inc/view/details.php';
}
else {
	echo 'ID non reconnu<br />';
}

require 'inc/view/footer.php';
