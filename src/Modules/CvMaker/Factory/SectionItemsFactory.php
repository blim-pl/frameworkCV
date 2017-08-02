<?php
namespace Modules\CvMaker\Factory;

use BlimCms\Factory\Factory;

/**
 *  Section items factory.
 *  Keeps map of item types and classes
 *
 * Class SectionItemsFactory
 *
 * @package Modules\CvMaker\Factory
 */
class SectionItemsFactory extends Factory
{
    protected $typesMap = [
        'Modules\CvMaker\Model\Section\SectionItem\ItemWork' => 'work',
        'Modules\CvMaker\Model\Section\SectionItem\ItemEdu' => 'edu',
        'Modules\CvMaker\Model\Section\SectionItem\ItemLanguage' => 'lang',
        'Modules\CvMaker\Model\Section\SectionItem\ItemSkill' => 'skill'
    ];
}
