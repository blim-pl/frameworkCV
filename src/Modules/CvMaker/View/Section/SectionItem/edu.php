<?php
if (strlen($dateRange->getTo())) {
    $html = '<div class="date-range">od ' . $dateRange->getFrom() . ' do ' . $dateRange->getTo() . ' <span class="fa">&#xf073;</span></div>';
} else {
    $html = '<div class="date-range">od ' . $dateRange->getFrom() . ' <span class="fa">&#xf073;</span></div>';
}

$html .= '<div class="name">' . $this->getName() . '</div>';
$html .= '<div class="degree">' . $this->getDegree() . '</div>';
$html .= '<div class="description">' . $this->getDescription() . '</div>';

echo $html;
