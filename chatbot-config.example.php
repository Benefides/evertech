<?php
// Block direct browser access — only when this file is the entry point, not when require'd
if (isset($_SERVER['HTTP_HOST']) && realpath($_SERVER['SCRIPT_FILENAME'] ?? '') === __FILE__) {
    http_response_code(403); exit;
}

// EverBot configuration template
// Get a key at https://aistudio.google.com/app/apikey
return [
    'gemini_api_key'    => '',   // Paste your API key here
    'gemini_model'      => 'gemini-2.5-flash',
    'max_per_hour'      => 20,
    'max_msg_length'    => 500,
    'lead_notify_email' => [
        'info@evertechme.com',
    ],
    'log_path'          => (getenv('LEADS_LOG_DIR') ?: __DIR__) . '/chatbot-leads.log',
];
