<?php
// Function to fetch data from API
function getApiData($endpoint)
{
    $apiUrl = 'http://localhost:8000/api/' . $endpoint;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_TIMEOUT, 5);
    $output = curl_exec($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    // curl_close($ch); // Deprecated in PHP 8.5 automatically closed

    if ($httpCode === 200) {
        $response = json_decode($output, true);
        if (isset($response['success']) && $response['success']) {
            return $response['data'];
        }
    }
    return [];
}

// Fetch carousel items
$carouselItems = getApiData('landing/carousel');
// If empty, provide defaults or handle in UI
if (empty($carouselItems)) {
    $carouselItems = [
        [
            'title' => 'For Your Dream Project',
            'subtitle' => 'We Are Professional',
            'image_path' => 'https://placehold.co/1366x600' // Placeholder/default
        ]
    ];
}

// Fetch services
$services = getApiData('landing/services');
// If empty, provide defaults
if (empty($services)) {
    $services = [
        [
            'title' => 'Building Construction',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'image_path' => 'https://placehold.co/400'
        ],
        // ... more defaults could be added
    ];
}

// Helper for image URLs
// If image path doesn't start with http, prepend API URL
function getImageUrl($path)
{
    if (strpos($path, 'http') === 0) {
        return $path;
    }
    return 'http://localhost:8000/' . $path;
}
?>