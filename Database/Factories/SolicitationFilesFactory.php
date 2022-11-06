<?php
namespace Modules\Solicitation\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\Solicitation\Models\SolicitationFilesModel;
use Modules\Solicitation\Entities\SolicitationFiles\SolicitationFilesEntityModel;

/**
 * @method SolicitationFilesModel create(array $attributes = [])
 * @method SolicitationFilesModel make(array $attributes = [])
 */
class SolicitationFilesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SolicitationFilesModel::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $p = SolicitationFilesEntityModel::props(null, true);
        return [

        ];
    }
}
