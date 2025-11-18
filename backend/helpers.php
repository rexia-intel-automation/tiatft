<?php
// /backend/helpers.php

function tiatft_send_waitlist_application(array $postData): bool
{
    $settings = require __DIR__ . '/../config/settings.php';

    $fullName      = $postData['full_name']      ?? '';
    $email         = $postData['email']          ?? '';
    $mainPlatform  = $postData['main_platform']  ?? '';
    $templateFocus = $postData['template_focus'] ?? '';
    $notes         = $postData['notes']          ?? '';
    $reservePro    = isset($postData['reserve_pro']) && $postData['reserve_pro'] === 'yes' ? 'yes' : 'no';

    $payload = [
        'full_name'      => $fullName,
        'email'          => $email,
        'main_platform'  => $mainPlatform,
        'template_focus' => $templateFocus,
        'notes'          => $notes,
        'reserve_pro'    => $reservePro,
        'source'         => $settings['webhook_source'],
        'timestamp'      => date('c'),
        'remote_ip'      => $_SERVER['REMOTE_ADDR']      ?? null,
        'user_agent'     => $_SERVER['HTTP_USER_AGENT']  ?? null,
    ];

    $ch = curl_init($settings['webhook_url']);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: application/json']);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($payload));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);

    $responseBody = curl_exec($ch);
    $curlError    = curl_error($ch);
    $httpCode     = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($curlError || $httpCode < 200 || $httpCode >= 300) {
        // Opcional: logar erro em /logs/errors.log
        return false;
    }

    return true;
}
