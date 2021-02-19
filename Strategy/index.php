<?php
declare(strict_types = 1);

include_once("classes/Weapons.php");
include_once("classes/Characters.php");

$knight = new Knight();
$knight -> useWeapon();
$knight -> setWeapon(new SpearBehavior); // change state on runtime
$knight -> useWeapon();

echo "=====================\n";

$spearman = new Spearman();
$spearman -> useWeapon();
$spearman -> setWeapon(new SwordBehavior);
$spearman -> useWeapon();