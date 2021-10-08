<?php

function execPrint($command) {
    $result = array();
    exec($command . " 2>&1", $result);
    print("<pre>");
    foreach ($result as $line) {
        print($line . "\n");
    }
    print("</pre>");
}
// Print the exec output inside of a pre element
execPrint("git pull https://github.com/synchBrowsers/testPlugin.git main");

execPrint("ls -la");
