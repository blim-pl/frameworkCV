<?php
namespace Test\Fixtures\Modules;

class Person
{
    public static function getPersonCorrectData()
    {
        $data = [
            'name'      => 'Correct',
            'surname'   => 'Correct-value',
            'bitrhYear' => 1970,
            'livingCity'=> 'Good City',
            'email'     => 'correct@email.pl',
            'mobile'    => '+48123456789',
            'abstract'  => 'correctValue'
        ];

        return $data;
    }

    public static function getPersonDataWithoutEmail()
    {
        $data = [
            'name'      => 'Correct',
            'surname'   => 'Correct-value',
            'bitrhYear' => 1970,
            'email'     => 'wrong_value',
            'livingCity'=> 'Good City',
            'mobile'    => '+48123456789',
            'abstract'  => 'correctValue'
        ];

        return $data;
    }
}