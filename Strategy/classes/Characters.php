<?php

class Character {
	public string $name;
	public WeaponBehavior $weaponBehavior;

	public function __construct() {
		$this -> name = get_class($this);
	}

	public function useWeapon() : void {
		echo "{$this -> name} use {$this -> weaponBehavior -> useWeapon()}\n";
	}

	public function setWeapon(WeaponBehavior $wp) : void {
		$this -> weaponBehavior = $wp;
		$wpName = get_class($this -> weaponBehavior);
		echo "{$this -> name} change weapon to $wpName\n";
	}
}

class Knight extends Character {
	public function __construct() {
		parent::__construct();
		$this -> weaponBehavior = new SwordBehavior();
	}
}

class Archer extends Character {
	public function __construct() {
		parent::__construct();
		$this -> weaponBehavior = new BowBehavior();
	}
}

class Spearman extends Character {
	public function __construct() {
		parent::__construct();
		$this -> weaponBehavior = new SpearBehavior();
	}
}