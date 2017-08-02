<?php
if (strlen($dateRange->getTo())) {
    $html = '<div class="date-range">od ' . $dateRange->getFrom() . ' do ' . $dateRange->getTo() . '<img src="./assets/cv/icons/calendar.jpg" alt="" /> <span class="fa">&#xf073;</span></div>';
} else {
    $html = '<div class="date-range">od ' . $dateRange->getFrom() . '<img src="./assets/cv/icons/calendar.jpg" alt="" /> <span class="fa">&#xf073;</span></div>';
}

$html .= '<div class="name">' . $this->getName() . '</div>';
$html .= '<div class="occupation">' . $this->getOccupation() . '</div>';
$html .= '<div class="description">' . $this->getDescription() . '</div>';

echo $html;
