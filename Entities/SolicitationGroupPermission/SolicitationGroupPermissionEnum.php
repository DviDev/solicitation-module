<?php

namespace Modules\Solicitation\Entities\SolicitationGroupPermission;

enum SolicitationGroupPermissionEnum
{
    case all;
    case view;
    case insert;
    case update;
    case delete;
    case comment;
    case update_status;

    public static function toArray(): array
    {
        return collect(self::cases())->pluck('name')->toArray();
    }
}
