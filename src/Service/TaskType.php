<?php

namespace App\Service;

enum TaskType: string
{
    case NewFeature = 'new_feature';
    case Bug = 'bug';
}
