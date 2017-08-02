<?php

namespace BlimCms\Helpers;


class ContentFixer
{
    protected $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function __toString()
    {
        return $this->text;
    }

    /**
     * Add hard space
     *
     * @return ContentFixer
     */
    public function conjunctionBrakes(): ContentFixer
    {
        $this->text = preg_replace('/ ([i|w|z|o|a]) /i', ' $1&nbsp;', $this->text);

        return $this;
    }
}