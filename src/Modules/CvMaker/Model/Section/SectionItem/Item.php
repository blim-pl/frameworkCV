<?php
namespace Modules\CvMaker\Model\Section\SectionItem;

use Modules\CvMaker\ValueObject\DateRange;
use BlimCms\Configs\Config;

abstract class Item implements IItem
{
    protected $data;

    /**
     * Set object data
     *
     * @param array $data data to set
     *
     * @return IItem
     */
    public function setData(array $data): IItem
    {
        $this->data = $data;
        return $this;
    }

    /**
     * Get data property
     *
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * Get type value
     *
     * @return mixed
     */
    public function getType()
    {
        return $this->getData()['type'];
    }

    /**
     * Get name value
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->getData()['name'];
    }

    /**
     * Get description value
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->getData()['description'];
    }

    /**
     * Creates VO with date range
     *
     * @return DateRange
     */
    public function getDateRange(): DateRange
    {
        return new DateRange($this->getData()['date_from'], $this->getData()['date_to']);
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
        ob_start();
        include Config::get('view.dir') . Config::get('cvMaker.templateItemBody.defaultBody');
        $html = ob_get_clean();

        return $html;
    }

    /**
     * Render item view
     *
     * TODO: viewProvider
     *
     * @return string
     */
    public function toHtml()
    {
        ob_start();
        include Config::get('view.dir') . Config::get('cvMaker.templateItemBody.defaultItem');
        $html = ob_get_clean();

        return $html;
    }
}
