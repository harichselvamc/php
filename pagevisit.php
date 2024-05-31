<?php
// Start the session
session_start();

// Check if the session counter is set
if (isset($_SESSION['counter'])) {
    // If set, increment the counter value by 1
    $_SESSION['counter']++;
} else {
    // If not set, initialize the counter value to 1
    $_SESSION['counter'] = 1;
}

// Print the number of times the page was visited
echo "Number of times the page was visited: " . $_SESSION['counter'];

// Stop
?>
