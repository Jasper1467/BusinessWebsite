<?php

include 'captcha.php';

if ($builder->testPhrase($userInput)) {
    // instructions if user phrase is good
} else {
    // user phrase is wrong
}
