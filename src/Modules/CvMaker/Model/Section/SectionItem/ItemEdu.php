<?php
namespace Modules\CvMaker\Model\Section\SectionItem;

use BlimCms\Configs\Config;

/**
 * Model of education item
 *
 * Class ItemEdu
 *
 * @package Modules\CvMaker\Model\Section\SectionItem
 */
class ItemEdu extends Item
{
    /**
     * Get degree value
     *
     * @return string
     */
    public function getDegree()
    {
        return $this->getData()['degree'] ?? '';
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
        include Config::get('view.dir') . Config::get('cvMaker.templateItemBody.edu');
        $html = ob_get_clean();

        return $html;
    }
}
