<?php
namespace Test\Modules\CvMaker\Model\Term;

use PHPUnit\Framework\TestCase;

use Modules\CvMaker\Model\Term\Term;
use Test\Fixtures\Modules\Term as TermFixture;

class TermTest extends TestCase
{
    public function testCreateCorrectTermInstance()
    {
        $data = TermFixture::getTermCorrectData();

        $term = new Term($data);

        $this->assertEquals($data, $term->getTerm(), 'Term value is not correct');
        $this->assertEquals($data, $term, 'Term value is not correct');
    }
}
