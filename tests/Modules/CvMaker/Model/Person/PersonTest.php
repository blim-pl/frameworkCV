<?php
namespace Test\Modules\CvMaker\Model\Person;

use PHPUnit\Framework\TestCase;

use Modules\CvMaker\Model\Person\Person;
use Test\Fixtures\Modules\Person as PersonFixture;

class PersonTest extends TestCase
{
    public function testCreateCorrectPersonInstance()
    {
        $data = PersonFixture::getPersonCorrectData();

        $person = new Person($data);

        $this->assertEquals($data['email'], $person->getEmail());
    }

    public function testCreateIncorrectPersonWithoutEmailInstance()
    {
        $data = PersonFixture::getPersonDataWithoutEmail();

        $this->expectException('InvalidArgumentException');

        $person = new Person($data);

        $this->assertEmpty($person->getEmail());
    }
}
