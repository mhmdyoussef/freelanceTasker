<?php

namespace App\Service;

enum PriorityType: string
{
    case Low = 'low';
    case Normal = 'normal';
    case High = 'high';
}
