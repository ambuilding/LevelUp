<?php

namespace App;

class GildedRose {

    protected static $lookup = [
        'normal' => Normal::class,
        'Aged Brie' => Brie::class,
        'Backstage passes to a TAFKAL80ETC concert' => BackstagePass::class,
        'Conjured Mana Cake' => Conjured::class
    ];

    public static function of($name, $quality, $sellIn) {
        /*
        $lookup = [
            'normal' => Normal::class,
            'Aged Brie' => Brie::class,
            //'Sulfuras, Hand of Ragnaros' => Sulfuras::class,
            'Backstage passes to a TAFKAL80ETC concert' => BackstagePass::class,
            'Conjured Mana Cake' => Conjured::class
        ];*/
        $class = static::$lookup[$name] ?? Item::class;
        return new $class($quality, $sellIn);
        //return new static($name, $quality, $sellIn);
    }

    /*
    public function tick()
    {
        switch ($this->name) {
            case 'normal':
                return $this->normalTick();
            case 'Aged Brie':
                return $this->brieTick();
            case 'Sulfuras, Hand of Ragnaros':
                return $this->sulfurasTick();
            case 'Backstage passes to a TAFKAL80ETC concert':
                return $this->backstagePassTick();
        }
    }*/
}