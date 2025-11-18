<?php
// /components/card-template.php

function tiatft_plan_featured_badge(string $text = 'Popular'): void
{
    echo '<div class="pricing-badge">' . htmlspecialchars($text, ENT_QUOTES, 'UTF-8') . '</div>';
}
