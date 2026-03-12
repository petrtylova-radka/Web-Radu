<?php
$csvFile = __DIR__ . '/Prilohy/Akce 305268d8d47480bdb676ec9bbbb97f52_all.csv';
$cacheFile = __DIR__ . '/notion_cache.json';

if (!file_exists($csvFile)) {
    die("CSV file not found at $csvFile\n");
}

$file = fopen($csvFile, 'r');
$headers = fgetcsv($file); // Name,Button,Date,Description,Image,Link,Place,Show

$events = [];

while (($row = fgetcsv($file)) !== false) {
    $data = array_combine($headers, $row);
    
    // Skip if Show is not "Yes"
    if (strtolower($data['Show']) !== 'yes' && $data['Show'] !== '1' && $data['Show'] !== 'true') {
        continue;
    }
    
    // Parse date from "February 26, 2026" to "2026-02-26"
    $dateStr = $data['Date'];
    $timestamp = strtotime($dateStr);
    $formattedDate = $timestamp ? date('Y-m-d', $timestamp) : null;
    
    // Handle image path (if it's just a filename, we might need a prefix, but for test purposes we'll keep it as is or check if it starts with http)
    $image = $data['Image'];
    // In the real app, we might need to prefix local images with 'Prilohy/' if they are there, 
    // but usually Notion returns full URLs. For this test, we'll assume they are placeholder-like or external.

    $events[] = [
        'id' => md5($data['Name'] . $data['Date']),
        'name' => $data['Name'],
        'show' => true,
        'date' => $formattedDate,
        'place' => $data['Place'],
        'description' => $data['Description'],
        'button' => $data['Button'],
        'link' => $data['Link'],
        'image' => $image
    ];
}

fclose($file);

$json = json_encode($events, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
file_put_contents($cacheFile, $json);

echo "Successfully converted CSV to notion_cache.json with " . count($events) . " events.\n";
?>
