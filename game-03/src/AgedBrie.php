<?php

namespace App;

class AgedBrie extends NormalItem {

	protected function updateQuality() {
		$this->increaseQuality();
	}

	protected function updateItemExpired() {
		$this->increaseQuality();
	}

}