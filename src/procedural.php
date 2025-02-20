<?php

declare(strict_types=1);

function get_beer_by($type)
{
    switch ($type) {
        case 'ipa':
            $example = 'Ægir IPA';
            break;
        case 'stout':
            $example = 'Guinness Stout';
            break;
        default:
            $example = FALSE;
    }

    return $example;
}

$beer_example = get_beer_by('ipa');
$beer_example2 = get_beer_by('');
if ($beer_example === 'Unknown') {
    echo 'No beer found';
}
