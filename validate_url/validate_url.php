<?php

// returns true if the provided $url is a valid URL, false otherwise.
//Based on joni jerr's answer on https://stackoverflow.com/questions/13927099/validate-url-with-or-without-protocol
function validate_url($url) {
    return preg_match('/(?:https?:\/\/)?(?:[a-zA-Z0-9.-]+?\.(?:[a-zA-Z])|\d+\.\d+\.\d+\.\d+)/', $url);
}

 ?>
