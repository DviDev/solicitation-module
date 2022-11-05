<?php

namespace Modules\Solicitation\Entities;

use Modules\Base\Entities\BaseEntityModel;
use Modules\Solicitation\Repositories\SolicitationFilesRepository;

/**
 * @author Davi Menezes (davimenezes.dev@gmail.com)
 * @link https://github.com/DaviMenezes
 * @property $id
 * @property $solicitation_id
 * @property $file_path
 * @property $created_at
 * @method static self props($alias = null, $force = null)
 * @method SolicitationFilesRepository repository()
 */
class SolicitationFilesEntityModel extends BaseEntityModel
{
    protected function repositoryClass(): string
    {
        return SolicitationFilesRepository::class;
    }

    /**
     * @inheritDoc
     */
    public static function dbTable($alias = null)
    {
        return self::setTable('solicitation_files', $alias);
    }
}

