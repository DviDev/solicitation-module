<?php

namespace Modules\Solicitation\Entities\SolicitationBrainstormModuleGroupPermissionUser;

enum SolicitationGroupUserPermissionEnum
{
    case all;
    case view;
    case insert;
    case update;
    case delete;
    case comment;
    case update_status;

    public static function toArray()
    {
        return collect(self::cases())->pluck('name')->toArray();
    }
}
