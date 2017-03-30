<?php

require 'inc/config.php';
use inc\model\Categorie;

$categorieList=Categorie::getCategory();

require 'inc/view/header.php';
require 'inc/view/main.php';
require 'inc/view/footer.php';
