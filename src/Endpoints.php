<?php

namespace phpbergen\Phpstan;

final readonly class Endpoints {

    public function getData(): array
    {
        return [
          '99 bottles of beer',
          '98 bottles of beer',
          '97 bottles of beer',
          '96 bottles of beer',
          '95 bottles of beer',
        ];
    }

    public function fetchData(): array
    {
        sleep(5);
        return [
          '99 bottles of beer',
          '98 bottles of beer',
          '97 bottles of beer',
          '96 bottles of beer',
          '95 bottles of beer',
        ];

    }

}

$endpoint = new Endpoints();
print_r($endpoint->getData());
print_r($endpoint->fetchData());
