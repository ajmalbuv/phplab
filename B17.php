<?php
date_default_timezone_set('Asia/Kolkata');

echo "<p>Current date and time (ATOM): " . date(DATE_ATOM) . "</p>";
echo "<p>Current date and time (RFC2822): " . date(DATE_RFC2822) . "</p>";
echo "<p>Current Unix Timestamp: " . time() . "</p>";
echo "<p>Custom formatted date and time: " . date('Y-m-d H:i:s') . "</p>";
echo "<p>Just the date: " . date('Y-m-d') . "</p>";
echo "<p>Just the time: " . date('H:i:s') . "</p>";

// Custom date and time formatting 
// Create a date from string 
$dateFromString = strtotime("next Thursday");
echo "<p>Date from string 'next Thursday': " . date('Y-m-d', $dateFromString) . "</p>";

// Modify and format date 
$modifiedDate = strtotime("+1 week");
echo "<p>Date one week from now: " . date('Y-m-d', $modifiedDate) . "</p>";

// Difference between two dates 
$originalDate = "2024-01-01";
$targetDate = "2024-12-31";
$diffInSeconds = strtotime($targetDate) - strtotime($originalDate);
$diffInDays = $diffInSeconds / (60 * 60 * 24);
echo "<p>Difference between $originalDate and $targetDate is $diffInDays days.</p>";

// Check if date is valid 
if (checkdate(2, 29, 2021)) {
    echo "<p>February 29, 2021 is a valid date.</p>";
} else {
    echo "<p>February 29, 2021 is not a valid date.</p>";
}

// DateTime object usage 
$dateTime = new DateTime();
echo "<p>DateTime object formatted date: " . $dateTime->format('Y-m-d H:i:s') . "</p>";

// Add interval to DateTime 
$dateTime->add(new DateInterval('P10D')); // Adding 10 days 
echo "<p>DateTime object after adding 10 days: " . $dateTime->format('Y-m-d H:i:s') . "</p>";

// Subtract interval from DateTime 
$dateTime->sub(new DateInterval('P10D')); // Subtracting 10 days 
echo "<p>DateTime object after subtracting 10 days: " . $dateTime->format('Y-m-d H:i:s') . "</p>";
?>