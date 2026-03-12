<?php
// api/get-events.php

// Include configuration
require_once __DIR__ . '/../_private/notion-config.php';

// Cache configuration
$cache_file = __DIR__ . '/../notion_cache.json';
$cache_time = 600; // 10 minutes (600 seconds)

// CORS headers (optional, adjust if needed)
header('Content-Type: application/json; charset=utf-8');

// Check cache
if (file_exists($cache_file) && (time() - filemtime($cache_file) < $cache_time)) {
    // Check if we should ignore cache (e.g. via query param ?refresh=1)
    if (!isset($_GET['refresh'])) {
        echo file_get_contents($cache_file);
        exit;
    }
}

// Notion API request
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.notion.com/v1/databases/" . NOTION_DATABASE_ID . "/query");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Authorization: Bearer ' . NOTION_TOKEN,
    'Notion-Version: 2022-06-28',
    'Content-Type: application/json'
]);

// You can add filters/sorts here if needed
$payload = json_encode([
    'filter' => [
        'property' => 'Show',
        'checkbox' => [
            'equals' => true
        ]
    ],
    'sorts' => [
        [
            'property' => 'Date',
            'direction' => 'ascending'
        ]
    ]
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

$response = curl_exec($ch);
$http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

if (curl_errno($ch)) {
    http_response_code(500);
    echo json_encode(['error' => 'Curl error: ' . curl_error($ch)]);
    exit;
}

curl_close($ch);

if ($http_code !== 200) {
    http_response_code($http_code);
    echo $response;
    exit;
}

$data = json_decode($response, true);
$events = [];

if (isset($data['results'])) {
    foreach ($data['results'] as $page) {
        $props = $page['properties'];
        
        $event = [
            'id' => $page['id'],
            'name' => parseNotionProperty($props, 'Name'),
            'show' => parseNotionProperty($props, 'Show'),
            'date' => parseNotionProperty($props, 'Date'),
            'place' => parseNotionProperty($props, 'Place'),
            'description' => parseNotionProperty($props, 'Description'),
            'button' => parseNotionProperty($props, 'Button'),
            'link' => parseNotionProperty($props, 'Link'),
            'image' => parseNotionProperty($props, 'Image'),
        ];
        
        $events[] = $event;
    }
}

$final_json = json_encode($events, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

// Save to cache
file_put_contents($cache_file, $final_json);

echo $final_json;

/**
 * Helper to parse Notion properties based on their type
 */
function parseNotionProperty($props, $key) {
    if (!isset($props[$key])) return null;
    $prop = $props[$key];
    $type = $prop['type'];
    
    switch ($type) {
        case 'title':
            return isset($prop['title'][0]['plain_text']) ? $prop['title'][0]['plain_text'] : '';
        case 'rich_text':
            $text = '';
            foreach ($prop['rich_text'] as $rt) {
                $text .= $rt['plain_text'];
            }
            return $text;
        case 'date':
            return isset($prop['date']['start']) ? $prop['date']['start'] : null;
        case 'checkbox':
            return $prop['checkbox'];
        case 'url':
            return $prop['url'];
        case 'files':
            if (isset($prop['files'][0])) {
                $file = $prop['files'][0];
                if ($file['type'] === 'external') return $file['external']['url'];
                if ($file['type'] === 'file') return $file['file']['url'];
            }
            return null;
        case 'select':
            return isset($prop['select']['name']) ? $prop['select']['name'] : null;
        case 'multi_select':
            return array_map(function($item) { return $item['name']; }, $prop['multi_select']);
        default:
            return null;
    }
}
?>
