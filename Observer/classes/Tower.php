<?php
class Tower implements Subject {
	private $observers = array();
	private string $info;

	public function lookAround(string $seenEnemies) {
		$this -> info = $seenEnemies;
		$this -> notify();
	}

	public function register(Observer $o) : void {
		$this -> observes[] = $o;
	}

	public function unregister(Observer $o) : void {}

	public function notify() : void {
		foreach ($this -> observes as &$town) {
			$town -> update($this -> info);
		}
	}
}