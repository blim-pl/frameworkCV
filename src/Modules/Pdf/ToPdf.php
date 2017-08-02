<?php
namespace Modules\Pdf;

abstract class ToPdf implements IToPdf
{
    protected $pdf;

    /**
     * Set document content
     *
     * @param $content
     *
     * @return ToPdf
     */
    public function setContentString(string $content): IToPdf
    {
        $this->pdf->loadHtml($content);
        return $this;
    }

    /**
     * Render pdf document
     *
     * @param string $filename
     */
    public function render($filename = 'document.pdf')
    {
        $this->pdf->render();
        $this->pdf->stream($filename);
    }

}