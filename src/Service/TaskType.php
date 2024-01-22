<?php

namespace App\Service;

enum TaskType: string
{
    case NewFeature = 'new_feature';
    case Issue = 'issue';
    case Bug = 'bug';
}
