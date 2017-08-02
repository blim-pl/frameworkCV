<?php
namespace Modules\Pdf;

interface IToPdf
{
    public function __construct($paperSize = 'A4', $orientation = 'horizontal');
    /**
     * Set document content
     *
     * @param string $content
     *
     * @return ToPdf
     */
    public function setContentString(string $content): IToPdf;

    /**
     * Render pdf document
     *
     * @param string $filename
     */
    public function render($filename = 'document.pdf');

}