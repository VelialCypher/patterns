<?php
declare(strict_types = 1);
include_once("classes/Observer.php");
include_once("classes/Subject.php");
include_once("classes/Tower.php");
include_once("classes/Town.php");

$mainTown = new Town();

$t1 = new Tower();
$t2 = new Tower();
$t3 = new Tower();
$t4 = new Tower();

$t1 -> register($mainTown);
$t2 -> register($mainTown);
$t3 -> register($mainTown);
$t4 -> register($mainTown);

$t1 -> lookAround("20 Knights, 10 Archers");