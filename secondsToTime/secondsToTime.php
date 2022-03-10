<?php

function secondsToTime($inputSeconds, $dropSecondsPart=false, $dropMinutesPart=false, $dropHoursPart=false)
{
    if ($inputSeconds == 0) return "a moment";

    $secondsInAMinute = 60;
    $secondsInAnHour = 60 * $secondsInAMinute;
    $secondsInADay = 24 * $secondsInAnHour;

    // if any of the drop variables have been set to true and time remainders exist, calculate and subtract the remainder from input
    if ($dropSecondsPart and $inputSeconds > $secondsInAMinute) $inputSeconds -= $inputSeconds % $secondsInAMinute;
    if ($dropMinutesPart and $inputSeconds > $secondsInAnHour) $inputSeconds -= $inputSeconds % $secondsInAnHour;
    if ($dropHoursPart and $inputSeconds > $secondsInADay) $inputSeconds -= $inputSeconds % $secondsInADay;

    // Extract days
    $days = floor($inputSeconds / $secondsInADay);

    // Extract hours
    $hourSeconds = $inputSeconds % $secondsInADay;
    $hours = floor($hourSeconds / $secondsInAnHour);

    // Extract minutes
    $minuteSeconds = $hourSeconds % $secondsInAnHour;
    $minutes = floor($minuteSeconds / $secondsInAMinute);

    // Extract the remaining seconds
    $remainingSeconds = $minuteSeconds % $secondsInAMinute;
    $seconds = ceil($remainingSeconds);

    // Format and return
    $timeParts = [];
    $sections = [
        'day' => (int)$days,
        'hour' => (int)$hours,
        'minute' => (int)$minutes,
        'second' => (int)$seconds,
    ];

    foreach ($sections as $name => $value) {
        if ($value > 0) {
            $timeParts[] = $value . ' ' . $name . ($value == 1 ? '' : 's');
        }
    }
    return implode(', ', $timeParts);
}

 ?>
