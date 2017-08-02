<?php

namespace Modules\CvMaker\Model\Term;

interface ITerm
{
    public function getTerm(): string;

    public function __toString();
}
