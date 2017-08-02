<?php
namespace Modules\CvMaker\Model\Section;

class SectionCollection implements ISectionCollection
{
    protected $sections = [];

    /**
     * Add new section
     *
     * @param \Modules\CvMaker\Model\Section\ISection $section
     * @return ISectionCollection
     */
    public function addSection(ISection $section): ISectionCollection
    {
        $currentData = $this->getSections();

        $currentData[] = $section;

        $this->sections = $this->sortSections($currentData);

        return $this;
    }

    /**
     * Make sort by position
     *
     * @param array $items
     *
     * @return array
     */
    protected function sortSections(array $items): array
    {
        uasort($items, function ($value1, $value2) {
            return $value1->getPosition() <=> $value2->getPosition();
        });

        return $items;
    }

    /**
     * Returns section instances array
     *
     * @return array
     */
    public function getSections(): array
    {
        return $this->sections;
    }

    /**
     * Render all sections to html
     *
     * @return array
     */
    public function toHtml()
    {
        $html = [];

        foreach ($this->getSections() as $section) {
            $html[$section->getType()] = $section->toHtml();
        }

        return $html;
    }
}
