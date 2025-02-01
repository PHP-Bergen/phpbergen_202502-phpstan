<?php

declare(strict_types=1);

function get_beer_by(string $type): string
{
    switch ($type) {
        case 'ipa':
            $example = 'Ægir IPA';
            break;
        case 'stout':
            $example = 'Guinness Stout';
            break;
        default:
            $example = 'Unknown';
    }

    return $example;
}

$beer_example = get_beer_by('ipa');
$beer_example2 = get_beer_by('');
if ($beer_example === 'Unknown') {
    echo 'No beer found';
}
