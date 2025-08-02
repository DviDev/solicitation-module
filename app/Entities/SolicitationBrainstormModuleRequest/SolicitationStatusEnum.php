<?php

namespace Modules\Solicitation\Entities\SolicitationBrainstormModuleRequest;

enum SolicitationStatusEnum
{
    case closed;
    case open;
    case finalized;
    case abandoned;

    public static function toArray(): array
    {
        return collect(self::cases())->pluck('name')->toArray();
    }
}
