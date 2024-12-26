<?php
$counterFile = 'counter.txt';

// Check if the counter file exists, and create it if not
if (!file_exists($counterFile)) {
    file_put_contents($counterFile, 0);
}

// Read the current count
$visitorCount = (int) file_get_contents($counterFile);

// Increment the count
$visitorCount++;

// Save the updated count back to the file
file_put_contents($counterFile, $visitorCount);
?>
