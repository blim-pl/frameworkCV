<?php
namespace Modules\CvMaker\Model\Cv;

use BlimCms\Configs\Config;
use Modules\CvMaker\Model\Person\IPerson;
use Modules\CvMaker\Model\Term\ITerm;
use Modules\CvMaker\Model\Section\SectionCollection;
use Modules\CvMaker\Model\Section\ISection;

/**
 * Class Cv
 *
 * @package Modules\CvMaker\Model\Cv
 */
class Cv implements ICv
{
    protected $person;
    protected $sectionsCollection;
    protected $terms;
    protected $photo;

    private $config;

    public function __construct(array $config)
    {
        $this->config = $config;
        $this->sectionsCollection = new SectionCollection();
    }

    /**
     * Returns sections collection - collect single sections objects
     *
     * @return SectionCollection
     */
    protected function getSectionsCollection()
    {
        return $this->sectionsCollection;
    }

    /**
     * Set person object
     *
     * @param IPerson $person
     *
     * @return ICv
     */
    public function addPerson(IPerson $person): ICv
    {
        $this->person = $person;

        return $this;
    }

    /**
     * Returns current person object
     *
     * @return IPerson
     */
    public function getPerson(): IPerson
    {
        return $this->person;
    }

    /**
     * Add new section. Sections are sorted after add
     *
     * @param ISection $section new section to add
     *
     * @return ICv
     */
    public function addSection(ISection $section): ICv
    {
        $this->getSectionsCollection()->addSection($section);

        return $this;
    }

    /**
     * Get current sections sorted list
     *
     * @return array
     */
    public function getSections(): array
    {
        return $this->getSectionsCollection()->getSections();
    }

    /**
     * Add term content
     *
     * @param ITerm $term new object to add
     *
     * @return ICv
     */
    public function addTerm(ITerm $term): ICv
    {
        $this->terms[] = $term;

        return $this;
    }

    /**
     * Get terms list
     *
     * @return array
     */
    public function getTerms(): array
    {
        return $this->terms;
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
        $terms = '<div class="terms">';

        foreach ($this->getTerms() as $term) {
            $terms .= '<div class="item">' . $term . '</div>';
        }

        $terms .= '</div>';

        $htmlParts = [
            'person' => $this->person->toHtml(),
            'sections' => $this->sectionsCollection->toHtml(),
            'terms' => $terms
        ];

        ob_start();

        include Config::get('view.dir') . $this->config['templateCv'];

        $html = ob_get_clean();

        return $html;
    }
}
