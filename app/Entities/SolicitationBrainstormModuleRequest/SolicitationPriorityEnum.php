<?php

declare(strict_types=1);

namespace Modules\Solicitation\Entities\SolicitationBrainstormModuleRequest;

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
