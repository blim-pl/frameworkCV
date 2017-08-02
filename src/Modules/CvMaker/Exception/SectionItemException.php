<?php
namespace Modules\CvMaker\Exception;

use Throwable;

class SectionItemException extends \Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}