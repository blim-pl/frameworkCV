<?php

namespace Test\Fixtures\Modules;

class Section
{
    public static function getSectionsCollectionCorrectData()
    {
        $data = [
            'position' => 2,
            'name' => 'Edukacja',
            'type' => 'edu', //edukacja
            'sectionItems' => [
                self::getSectionsItemCorrectData(),
                self::getSectionsItemCorrectData()
            ]
        ];

        return $data;
    }

    public static function getSectionsItemCorrectData()
    {
        $startYear = rand(2000, 2016);

        $data = [
            'name' => 'school no. ' . rand(0, 10),
            'date_from' => rand(1, 12) . '/' . rand(2000, 2016) . ' r.',
            'date_to' => '04/' . $startYear . ' r.',
            'degree' => 'correct school degree',
            'description' => 'correct description'
        ];

        return $data;
    }
}