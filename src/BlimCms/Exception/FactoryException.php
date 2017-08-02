<?php
namespace BlimCms\Exception;

use Throwable;

/**
 * Exception used when item type is not implemented
 *
 * Class FactoryException
 *
 * @package BlimCms\Exception
 */
class FactoryException extends \Exception
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
