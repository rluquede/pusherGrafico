<?php
// First, run 'composer require pusher/pusher-php-server'
require __DIR__ . '/vendor/autoload.php';

$pusher = new Pusher\Pusher(
    "APP_KEY", // Replace with 'key' from dashboard
    "APP_SECRET", // Replace with 'secret' from dashboard
    "APP_ID", // Replace with 'app_id' from dashboard
    array(
        'cluster' => 'APP_CLUSTER' // Replace with 'cluster' from dashboard
    )
);
// Trigger a new random event every second. In your application,
// you should trigger the event based on real-world changes!
while (true) {
    $pusher->trigger('price-btcusd', 'new-price', array(
        'value' => rand(0, 5000)
    ));
    sleep(1);
}