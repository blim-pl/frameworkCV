<?php
$html = '<div class="person">';
$html .= '<div class="name"><span class="value">' . $this->getName() . ' ' . $this->getSurname() . '</span></div>';
$html .= '<div class="abstract"><span class="label"><span class="fa">&#xf129;</span> ' . $this->getAbstract() . '</span></div>';
$html .= '<div class="birth"><span class="label">Rok urodzenia</span><span class="value">' . $this->getBirthYear() . ' r.</span></div>';
$html .= '<div class="livingCity"><span class="label">Miejsce zamieszkania</span><span class="value">' . $this->getLivingCity() . '</span></div>';
$html .= '<div class="email"><span class="label">E-mail</span><span class="value">' . $this->getEmail() . '</span></div>';
$html .= '<div class="mobile"><span class="label">Numer telefonu</span><span class="value">' . $this->getMobile() . '</span></div>';
$html .= '</div>';

echo $html;
