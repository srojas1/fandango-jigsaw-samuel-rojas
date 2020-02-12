<?php

namespace App;

class NormalItem {

	protected $item;

	function __construct($item) {
			$this->item = $item;
	}

	protected function decreaseQuality() {
		if($this->item->quality > 0) {
			$this->item->quality = $this->item->quality - 1;
		}
	}

	protected function increaseQuality() {
		if($this->item->quality < 50) {
			$this->item->quality = $this->item->quality + 1;
		}
	}

	protected function updateQuality() {
		$this->decreaseQuality();
	}

	public function updateSellIn() {
		$this->item->sellIn = $this->item->sellIn - 1;
	}

	protected function updateItemExpired() {
		$this->decreaseQuality();
	}

	public function update() {
		$this->updateQuality();
		$this->updateSellIn();
		if ($this->item->sellIn < 0) {
			$this->updateItemExpired();
		}
	}

}