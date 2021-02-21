<?php
interface Observer {
	public function update(string $info) : void;
}