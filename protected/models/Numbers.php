<?php

/**
 * Created by PhpStorm.
 * User: dmitrij
 * Date: 31.12.2016
 * Time: 10:36
 */
class Numbers
{

    private $numbers;

    public function __construct()
    {
        $this->numbers = [55.10, 55.01, 50.01, 55.00, 50.00];
    }

    public function getCut() {
        $retArray = [];
        foreach ($this->numbers as $number) {
            $retArray[] = preg_replace("/d+\.d+/i","\$1\$.{2}", $number);
        }

        return $retArray;
    }
}