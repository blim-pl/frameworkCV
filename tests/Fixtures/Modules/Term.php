<?php

namespace Test\Fixtures\Modules;

class Term
{
    public static function getTermCorrectData()
    {
        return 'Lorem ispum ' . rand(1000, 100000);
    }
}