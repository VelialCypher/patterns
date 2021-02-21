<?php
class Town implements Observer {
	private string $info;

	public function update(string $info) : void {
		$this -> info = $info;
		$this -> display();
	}

	public function display() {
		echo "We are notified of the enemy: {$this -> info}.\n";
	}
}