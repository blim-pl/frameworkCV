<?php
namespace Modules\CvMaker\Controller;

use Modules\CvMaker\Model\Section\SectionItem\Item\ItemInterface;
use Modules\CvMaker\Exception\SectionItemException;

class SectionItemsFactoryController
{
    protected $typesMap = [
        'Work' => 1,
        'Edu' => 2,
        'Language' => 3,
        'Skill' => 4
    ];

    public function __construct(int $type)
    {
        $this->getItemInstance($type);
    }

    /**
     * Find section element type
     *
     * @param int $type
     * @return mixed|null
     */
    protected function findItemType(int $type)
    {
        return array_search($type, $this->typesMap) ?? null;
    }

    protected function getItemInstance($type) : ItemInterface
    {
        $sectionItemType = $this->findItemType($type);

        if (!$sectionItemType) {
            throw new SectionItemException('Section type: ' . $sectionItemType . ' not exists');
        }
    }
}