<?php
namespace Modules\CvMaker\Model\Section\SectionItem;

use BlimCms\Configs\Config;

/**
 * Render degree chart
 *
 * Class RateChart
 *
 * @package Modules\CvMaker\Model\Section\SectionItem
 */
class RateChart
{
    protected static $MIN_TO_DRAW = 0;

    /**
     * Render only if grater than minimum
     *
     * @param int $value current value

     * @return bool
     */
    protected function canDraw(int $value)
    {
        return $value > self::$MIN_TO_DRAW;
    }

    /**
     * Render view
     *
     * TODO: use viewService
     *
     * @param int $active current degree
     * @param int $max    max degree
     *
     * @return string
     */
    public function toHtml(int $active, int $max): string
    {
        $canDraw = $this->canDraw($active);

        ob_start();
        include Config::get('view.dir') . Config::get('cvMaker.templaterateChart');
        $html = ob_get_clean();

        return $html;
    }
}
