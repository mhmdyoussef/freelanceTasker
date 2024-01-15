<?php

namespace App\Service;

enum Status: string
{
    case Open = 'open';
    case Progress = 'progress';
    case Completed = 'completed';
    case Accepted = 'accepted';
    case CustomerReview = 'review';
    case Rejected = 'rejected';
    case Hold = 'hold';
    case Closed = 'closed';
}
