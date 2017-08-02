<?php
$html = '<div class="list-item list-item-type-' . $this->getType() . '">';

$html .= $this->getItemHtmlBody();

$html .= '</div>';

echo $html;
