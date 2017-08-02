<?php
namespace Modules\Pdf;

use Dompdf\Dompdf;

/**
 * Class MpdfHtmlToPdf
 *
 * @package Modules\Pdf
 *
 * Uses mPDF to convert html content to PDF
 */
class MpdfHtmlToPdf extends ToPdf
{
    public function __construct($paperSize = 'A4', $orientation = 'horizontal')
    {
        $this->pdf = new Dompdf();
        $this->pdf->setPaper($paperSize, $orientation);
    }
}