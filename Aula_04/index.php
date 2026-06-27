<?php

require_once "Log.php";

$log = new Log("info.log");

$log->writeLine("ERROR: Test");
$log->writeLine("SUCCESS: OK");
$log->writeLine("WARNING: ?");
