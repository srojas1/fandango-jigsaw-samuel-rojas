<?php

	namespace App;
	use App\Constants as Constants;

	class GildedRose {

		public $name;
		public $quality;
		public $sellIn;

		public function __construct($name, $quality, $sellIn) {
				$this->name = $name;
				$this->quality = $quality;
				$this->sellIn = $sellIn;
		}

		public static function of($name, $quality, $sellIn) {
				return new static($name, $quality, $sellIn);
		}

		public function tick() {;
			switch ($this->name) {
				case Constants::BACKSTAGE:
					$item = new Backstage($this);
					break;
				case Constants::AGED_BRIE:
					$item = new AgedBrie($this);
					break;
				case Constants::SULFURAS:
					$item = new Sulfuras($this);
					break;
				case Constants::CONJURED:
					$item = new Conjured($this);
					break;
				default:
					$item = new NormalItem($this);
					break;
			}
			$item->update();
	}
}
