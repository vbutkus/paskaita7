<?php
/**
 * Created by PhpStorm.
 * User: user15
 * Date: 2018-03-07
 * Time: 10:46
 */

function trikampis($virsune) {
    for ($eilute = 1; $eilute <= $virsune; $eilute++) {
        for ($simbolis = 1; $simbolis <= $eilute; $simbolis++) {
            echo '*';
        }
        echo "<br>";
    }
    for ($eilute = $virsune; $eilute >= 1; $eilute--) {
        for ($simbolis = 1; $simbolis <= $eilute; $simbolis++) {
            echo '*';
        }
        echo "<br>";
    }
}


function rombas($virsune) {
    $tarpas = $virsune;
    for ($eilute = 1; $eilute <= $virsune; $eilute++) {
        $tarpas--;
        echo str_repeat("&nbsp;&nbsp;", $tarpas);
        for ($simbolis = 1; $simbolis <= $eilute; $simbolis++) {
            echo '&nbsp;*&nbsp;';
        }
        echo "<br>";
    }
    $tarpas = 0;
    for ($eilute = $virsune-1; $eilute >= 1; $eilute--) {
        $tarpas++;
        echo str_repeat("&nbsp;&nbsp;", $tarpas);
        for ($simbolis = 1; $simbolis <= $eilute; $simbolis++) {
            echo '&nbsp;*&nbsp;';
        }
        echo "<br>";

    }
}


function rombas_mokytojo ($number) {
    for ($break = 1; $break <= $number; $break++) {
        for ($dot = $break; $dot <= $number; $dot++)
            echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        for ($dot = 2 * $break - 1; $dot > 0; $dot--)
            echo ("&nbsp;*&nbsp;");
        echo "<br>";
    }

    for ($break = $number-1; $break >= 0; $break--) {
        for ($dot = $number - $break; $dot >= 0; $dot--)
            echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        for ($dot = 2 * $break - 1; $dot > 0; $dot--)
            echo ("&nbsp;*&nbsp;");
        echo "<br>";
    }
}