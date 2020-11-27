<?php

$file = fopen('./results.csv', 'r');

$match = 0;
$nomatch = 0;
$time = time();

// 1906-10-07,Czechoslovakia,Hungary,4,4,Friendly,Prague,Bohemia,FALSE
// '/^2018\-01\-(\d\d),.*$/',

while (!feof($file)) {
    $line = fgets($file);
    if (preg_match(
            '/^(\d{4,4}\-\d{2,2}-\d{2,2}),(\w+),(\w+),(\d+),(\d+),.*$/i',
            $line,
            $m
        )
    ) {
        if ($m[4] == $m[5]) {
            echo "empate: ";
        } else if ($m[4] > $m[5]) {
            echo "local:    ";
        } else {
            echo "visitante: ";
        }
        printf("\t%s, %s [%d-%d]\n", $m[2], $m[3], $m[4], $m[5]);
        $match++;
    } else {
        $nomatch++;
    }
}

fclose($file);

printf("\n\n match %d\nno match %d\n", $match, $nomatch);
printf("tiempo: %d\n", time() - $time);
