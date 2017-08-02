<?php
namespace Modules\CvMaker\Model\Section;

use Modules\CvMaker\Model\Section\ISection;

interface ISectionCollection
{
    public function addSection(ISection $section): ISectionCollection;

    public function getSections(): array;

    public function toHtml();
}
