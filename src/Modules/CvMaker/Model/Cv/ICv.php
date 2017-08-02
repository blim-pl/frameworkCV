<?php
namespace Modules\CvMaker\Model\Cv;

use Modules\CvMaker\Model\Person\IPerson;
use Modules\CvMaker\Model\Section\ISection;
use Modules\CvMaker\Model\Term\ITerm;

interface ICv
{
    public function addPerson(IPerson $person): ICv;

    public function getPerson(): IPerson;

    public function addSection(ISection $section): ICv;

    public function getSections(): array;

    public function addTerm(ITerm $term): ICv;

    public function getTerms(): array;

    public function toHtml();
}
