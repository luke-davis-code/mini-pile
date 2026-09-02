<?php

namespace App\Enums;

enum PaintingListType: string
{
    case PAINTING = 'painting';
    case OWNED = 'owned';
    case FINISHED = 'finished';
    case DROPPED = 'dropped';
}
