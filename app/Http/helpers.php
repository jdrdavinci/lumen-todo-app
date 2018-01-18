<?php

function html_class(array $array) {
    $classes = [];

    foreach ($array as $key => $value) {
        if (is_int($key) and $value) {
            $classes[] = $value;
        }
        else if ($value) {
            $classes[] = $key;
        }
    }
    if ($classes) {
        return 'class="'.implode(' ', $classes).'"';
    }
}