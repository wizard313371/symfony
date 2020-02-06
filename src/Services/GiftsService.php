<?php

namespace App\Services;

use Psr\Log\LoggerInterface;

class GiftsService
{
    public $gifts = ['money', 'flowers', 'pizduli'];

    public function __construct(LoggerInterface $logger)
    {
        $logger->info('Gifts were randomize!');
        shuffle($this->gifts);
    }
}
