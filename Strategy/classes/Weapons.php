<?php

// strategies

interface WeaponBehavior {
	public function useWeapon() : string;
}

// Behaviors

class BowBehavior implements WeaponBehavior {
	public function useWeapon() : string {
		return 'Bow';
	}
}

class SwordBehavior implements WeaponBehavior {
	public function useWeapon() : string {
		return 'Sword';
	}
}

class SpearBehavior implements WeaponBehavior {
	public function useWeapon() : string {
		return 'Spear';
	}
}