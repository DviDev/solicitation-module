<?php

namespace Modules\Solicitation\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factory;
use Modules\Solicitation\Http\Livewire\BrainstormModuleRequestCommentReactionsTable;
use Modules\Solicitation\Http\Livewire\BrainstormModuleRequestFilesTable;
use Modules\Solicitation\Http\Livewire\BrainstormModuleRequestTable;
use Modules\Solicitation\Http\Livewire\BrainstormModuleRequestTasksTable;
use Modules\Solicitation\Http\Livewire\BrainstormModuleUserPermissionTable;
use Modules\Solicitation\Http\Livewire\BrainstormRequestCommentTable;
use Modules\Solicitation\Http\Livewire\SolicitationBrainstormModuleGroupPermissionUserTable;
use Modules\Solicitation\Http\Livewire\SolicitationBrainstormModuleGroupTable;
use Modules\Solicitation\Http\Livewire\SolicitationBrainstormModuleRequestTable;
use Modules\Solicitation\Http\Livewire\SolicitationBrainstormTable;
use Modules\Solicitation\Http\Livewire\SolicitationCommentTable;
use Modules\Solicitation\Http\Livewire\SolicitationCommentVoteTable;
use Modules\Solicitation\Http\Livewire\SolicitationFileTable;
use Modules\Solicitation\Http\Livewire\SolicitationGroupPermissionTable;
use Modules\Solicitation\Http\Livewire\SolicitationModuleTable;
use Modules\Solicitation\Http\Livewire\SolicitationTaskTable;

class SolicitationServiceProvider extends ServiceProvider
{
    /**
     * @var string $moduleName
     */
    protected $moduleName = 'Solicitation';

    /**
     * @var string $moduleNameLower
     */
    protected $moduleNameLower = 'solicitation';

    /**
     * Boot the application events.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerTranslations();
        $this->registerConfig();
        $this->registerViews();
        $this->loadMigrationsFrom(module_path($this->moduleName, 'Database/Migrations'));
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        \Livewire::component('brainstorm::module-request-comment-reactions-table', BrainstormModuleRequestCommentReactionsTable::class);
        \Livewire::component('brainstorm::module-request-files-table', BrainstormModuleRequestFilesTable::class);
        \Livewire::component('brainstorm::module-request-table', BrainstormModuleRequestTable::class);
        \Livewire::component('brainstorm::module-request-tasks-table', BrainstormModuleRequestTasksTable::class);
        \Livewire::component('brainstorm::module-user-permission-table', BrainstormModuleUserPermissionTable::class);
        \Livewire::component('brainstorm::request-comment-table', BrainstormRequestCommentTable::class);
        \Livewire::component('brainstorm::module-group-permission-user-table', SolicitationBrainstormModuleGroupPermissionUserTable::class);
        \Livewire::component('brainstorm::module-group-table', SolicitationBrainstormModuleGroupTable::class);
        \Livewire::component('brainstorm::table', SolicitationBrainstormTable::class);
        \Livewire::component('brainstorm::comment-table', SolicitationCommentTable::class);
        \Livewire::component('brainstorm::comment-vote-table', SolicitationCommentVoteTable::class);
        \Livewire::component('brainstorm::file-table', SolicitationFileTable::class);
        \Livewire::component('brainstorm::group-permission-table', SolicitationGroupPermissionTable::class);
        \Livewire::component('brainstorm::module-table', SolicitationModuleTable::class);
        \Livewire::component('brainstorm::module-request-table', SolicitationBrainstormModuleRequestTable::class);
        \Livewire::component('brainstorm::task-table', SolicitationTaskTable::class);

        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register config.
     *
     * @return void
     */
    protected function registerConfig()
    {
        $this->publishes([
            module_path($this->moduleName, 'Config/config.php') => config_path($this->moduleNameLower . '.php'),
        ], 'config');
        $this->mergeConfigFrom(
            module_path($this->moduleName, 'Config/config.php'), $this->moduleNameLower
        );
    }

    /**
     * Register views.
     *
     * @return void
     */
    public function registerViews()
    {
        $viewPath = resource_path('views/modules/' . $this->moduleNameLower);

        $sourcePath = module_path($this->moduleName, 'Resources/views');

        $this->publishes([
            $sourcePath => $viewPath
        ], ['views', $this->moduleNameLower . '-module-views']);

        $this->loadViewsFrom(array_merge($this->getPublishableViewPaths(), [$sourcePath]), $this->moduleNameLower);
    }

    /**
     * Register translations.
     *
     * @return void
     */
    public function registerTranslations()
    {
        $langPath = resource_path('lang/modules/' . $this->moduleNameLower);

        if (is_dir($langPath)) {
            $this->loadTranslationsFrom($langPath, $this->moduleNameLower);
        } else {
            $this->loadTranslationsFrom(module_path($this->moduleName, 'Resources/lang'), $this->moduleNameLower);
        }
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [];
    }

    private function getPublishableViewPaths(): array
    {
        $paths = [];
        foreach (\Config::get('view.paths') as $path) {
            if (is_dir($path . '/modules/' . $this->moduleNameLower)) {
                $paths[] = $path . '/modules/' . $this->moduleNameLower;
            }
        }
        return $paths;
    }
}
