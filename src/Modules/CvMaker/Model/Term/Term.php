<?php

namespace Modules\CvMaker\Model\Term;

class Term implements ITerm
{
    protected $term;

    /**
     * Term constructor.
     * @param string $term
     */
    public function __construct(string $term)
    {
        $this->checkData($term);

        $this->term = $term;
    }

    public function __toString()
    {
        return $this->getTerm();
    }

    /**
     * Use validator to check data
     * @return bool
     */
    protected function checkData(string $term)
    {
        return true;
    }

    public function getTerm(): string
    {
        return $this->term;
    }
}
