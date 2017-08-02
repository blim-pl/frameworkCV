<?php
namespace Modules\CvMaker\Model\Person;

interface IPerson
{
    public function getName();

    public function getSurname();

    public function getBirthYear();

    public function getLivingCity();

    public function getEmail();

    public function getMobile();

    public function getAbstract();

    public function toHtml();
}
