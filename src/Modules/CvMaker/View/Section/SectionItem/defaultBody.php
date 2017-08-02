<?php
$html = '<div class="name">' . $this->getName() . '</div>';

$description = $this->getDescription();

if ($description) {
    $html .= '<div class="description">' . $this->getDescription() . '</div>';
}

echo $html;
