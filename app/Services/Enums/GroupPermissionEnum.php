<?php

declare(strict_types=1);

namespace Modules\Solicitation\Services\Enums;

enum GroupPermissionEnum: int
{
    case READ = 1;
    case WRITE = 2;
    case UPDATE = 3;
    case DELETE = 4;
    case COMMENT = 5;
}
