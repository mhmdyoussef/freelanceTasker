<?php

namespace App\Service;

enum PlatformType: string
{
    case None = 'none';
    case Upwork = 'upwork';
    case Mostaql = 'mostaql';
}
