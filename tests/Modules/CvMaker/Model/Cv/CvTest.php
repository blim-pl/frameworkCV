<?php
namespace Test\Modules\CvMaker\Model\Cv;

use PHPUnit\Framework\TestCase;
use Test\Fixtures\Modules\Person as PersonFixture;
use Test\Fixtures\Modules\Section as SectionFixture;
use Test\Fixtures\Modules\Term as TermFixture;
use Test\Fixtures\BlimCms\Config as ConfigFixture;
use Modules\CvMaker\Model\{
    Person\Person,
    Cv\Cv,
    Section\Section,
    Term\Term
};

class CvTest extends TestCase
{
    public function testCreateCvInstanceWithCorrectData()
    {
        $config = ConfigFixture::getConfig('cvMaker');

        $cv = new Cv($config);

        $personData = PersonFixture::getPersonCorrectData();
        $person = new Person($personData);

        $sectionData = SectionFixture::getSectionsCollectionCorrectData();
        $section = new Section(['name' => $sectionData['name'], 'position' => $sectionData['position'], 'type' => $sectionData['type']], $config);

        $term1 = new Term(TermFixture::getTermCorrectData());
        $term2 = new Term(TermFixture::getTermCorrectData());

        foreach ($sectionData['sectionItems'] as $sectionItem) {
            $section->addItem($sectionItem);
        }

        $section->addItem(SectionFixture::getSectionsItemCorrectData());

        $cv->addPerson($person);
        $cv->addSection($section);
        $cv->addTerm($term1)->addTerm($term2);

        $this->assertNotEmpty($section->getItems()[2]->getName(),
            'Wrong Section Item property type "' . $section->getItems()[2]->getName() . '" - property type should be "edu"');
        $this->assertEquals($personData['name'], $cv->getPerson()->getName(), 'Wrong Person Model data - property name');
        $this->assertEquals(1, count($cv->getSections()), 'Wrong Section Collection data - should be 1');
        $this->assertEquals(3, count($section->getItems()), 'Wrong Section Items data - should be 3');
        $this->assertEquals(2, count($cv->getTerms()), 'Wrong Section Terms data - should be 2');

    }
}
