<?php

namespace Modules\Solicitation\Entities\Solicitation;

enum SolicitationPriorityEnum
{
    case urgent;
    case high;
    case normal;
    case low;

    public static function toArray(): array
    {
        return collect(self::cases())->pluck('name')->toArray();
    }
}
