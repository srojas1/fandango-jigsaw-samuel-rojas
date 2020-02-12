<?php

namespace App;

class Backstage extends NormalItem {

	protected function updateQuality() {
		$this->increaseQuality();

		if ($this->item->sellIn < 11) {
			$this->increaseQuality();
		}
		if ($this->item->sellIn < 6) {
			$this->increaseQuality();
		}
	}

	protected function updateItemExpired() {
		$this->item->quality = 0;
	}

}