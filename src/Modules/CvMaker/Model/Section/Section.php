<?php
namespace Modules\CvMaker\Model\Section;

use Modules\CvMaker\Model\Section\ISection;
use Modules\CvMaker\Factory\SectionItemsFactory;
use BlimCms\Configs\Config;

/**
 * Document section, contains section items
 *
 * Class Section
 *
 * @package Modules\CvMaker\Model\Section
 */
class Section implements ISection
{
    protected $name;
    protected $position;
    protected $type;

    private $config;
    private $sectionsItemsFactory;
    private $items = [];

    /**
     * Person constructor.
     * @param array $data
     *
     * eq.
     *  $data = [
     *      'name'      => 'Correct',
     *      'position'   => 1,
     *      'type'          => 'EDU'
     * ];
     */
    public function __construct(array $data, array $config)
    {
        $this->config = $config;

        $this->checkData($data);

        $this->name = $data['name'];
        $this->position = intval($data['position']);
        $this->type = $data['type'];

        $this->sectionsItemsFactory = new SectionItemsFactory();
    }

    /**
     * Use validator to check data
     *
     * TODO: create validator
     *
     * @param array $data
     *
     * @return bool
     */
    protected function checkData(array $data): bool
    {
        return true;
    }

    /**
     * Get name value
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Get type value
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Get position value
     *
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * Create and add new instance of section item
     *
     * @param array $data section item data
     *
     * @return \Modules\CvMaker\Model\Section\ISection
     */
    public function addItem(array $data): ISection
    {
        $itemInstance = $this->sectionsItemsFactory->create($this->getType());

        $itemInstance->setData($data);

        $this->items[] = $itemInstance;

        return $this;
    }

    /**
     * Returns all seorted sections
     *
     * @return array
     */
    public function getItems(): array
    {
        return $this->items;
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
        include Config::get('view.dir') . $this->config['templateSections'];
        $html = ob_get_clean();

        return $html;
    }
}
