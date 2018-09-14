<?php

include 'vendor/autoload.php';

use juniorb2ss\LinioChallenge\Program;

// initialize
$program = new Program;

// print
echo $program->response()->toString();