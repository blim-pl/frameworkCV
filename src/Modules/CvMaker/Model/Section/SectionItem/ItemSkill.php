<?php
namespace Modules\CvMaker\Model\Section\SectionItem;

use Modules\CvMaker\Model\Section\SectionItem\RateChart;
use BlimCms\Configs\Config;

/**
 * Model of skill item
 *
 * Class ItemSkill
 *
 * @package Modules\CvMaker\Model\Section\SectionItem
 */
class ItemSkill extends Item
{
    const MAX_RATE = 5;

    /**
     * Get rate value
     *
     * @return int
     */
    public function getRate(): int
    {
        return $this->getData()['rate'] ?? 0;
    }

    /**
     * Render rate chart part
     *
     * @param int $value
     *
     * @return string
     */
    protected function rateToHtml(int $value)
    {
        $rateChart = new RateChart();

        $html = $rateChart->toHtml($value, self::MAX_RATE);

        unset($rateChart);

        return $html;
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
        $rate = $this->rateToHtml($this->getRate());

        ob_start();
        include Config::get('view.dir') . Config::get('cvMaker.templateItemBody.skill');
        $html = ob_get_clean();

        return $html;
    }
}
