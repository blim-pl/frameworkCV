<?php
namespace Modules\CvMaker\ValueObject;

/**
 * Class DateRange
 *
 * @package Modules\CvMaker\ValueObject
 */
final class DateRange
{
    private $from;
    private $to;

    /***
     * DateRange constructor.
     *
     * @param string $from start date
     * @param string $to   end date
     */
    public function __construct(string $from, string $to)
    {
        $this->checkData($from, $to);

        $this->from = $from;
        $this->to = $to;
    }

    /**
     * TODO: add validator
     *
     * @param string $from*
     * @param string $to
     */
    private function checkData(string $from, string $to)
    {

    }

    /**
     * Returns start date value
     *
     * @return string
     */
    public function getFrom(): string
    {
        return $this->from;
    }

    /**
     * Returns end date value
     *
     * @return string
     */
    public function getTo(): string
    {
        return $this->to;
    }

    /**
     * Returns range array [to => '', from => '']
     *
     * @return array
     */
    public function getRange(): array
    {
        return [
            'from' => $this->getFrom(),
            'to' => $this->getTo()
        ];
    }
}
