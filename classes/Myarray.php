<?php
namespace App;

use App\ItemArray;

class MyArray {

    private $arr;
    function __construct($arr)
    {
        $this->arr = $arr;
    }

    public function hasItem($key) {
        return array_key_exists($key, $this->arr) ? true : false;
    }

    public function only($key) {
        if(!is_array($key)) {
            unset($this->arr[$key]);
        } else {
            foreach($key as $k) {
                unset($this->arr[$k]);
            }
        }
        return $this->arr;
    }
}