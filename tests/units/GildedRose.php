<?php

namespace Klnjmm\tests\units;

use Klnjmm\Item;

class GildedRose extends \atoum
{
    public function testFoo() {
        $items      = [new Item("foo", 0, 0)];
        $gildedRose = $this->newTestedInstance($items);
        $gildedRose->updateQuality();

        $this->string($items[0]->name)->isEqualTo("fixme");
    }
}