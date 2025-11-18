<?php
// /components/button.php

function tiatft_primary_button(string $href, string $label, string $extraClass = ''): void
{
    $cls = trim('cta-primary ' . $extraClass);
    echo '<a href="' . htmlspecialchars($href, ENT_QUOTES, 'UTF-8') . '" class="' . $cls . '">'
        . htmlspecialchars($label, ENT_QUOTES, 'UTF-8') .
        '</a>';
}
