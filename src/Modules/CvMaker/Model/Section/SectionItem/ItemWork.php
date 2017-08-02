<?php
namespace Modules\CvMaker\Model\Section\SectionItem;

use BlimCms\Configs\Config;

/**
 * Model of work place item
 *
 * Class ItemWork
 *
 * @package Modules\CvMaker\Model\Section\SectionItem
 */
class ItemWork extends Item
{
    /**
     * Get city value
     *
     * @return string
     */
    public function getCity(): string
    {
        return $this->getData()['city'] ?? '';
    }

    /**
     * Get occupation value
     *
     * @return string
     */
    public function getOccupation(): string
    {
        return $this->getData()['occupation'] ?? '';
    }

    /**
     * Render item body view
     *
     * TODO: viewProvider
     *
     * @return string
     */
    protected function getItemHtmlBody()
    {
        $dateRange = $this->getDateRange();

        ob_start();
        include Config::get('view.dir') . Config::get('cvMaker.templateItemBody.work');
        $html = ob_get_clean();

        return $html;
    }
}
