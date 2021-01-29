<?php

/*
 * Telegram Config Info
 * */

return [
    'api_url'   =>  env('TELEGRAM_API_URL', 'https://api.telegram.org'),
    'api_id'    =>  env('TELEGRAM_API_ID', null),
    'api_key'   =>  env('TELEGRAM_API_KEY', null),
];
