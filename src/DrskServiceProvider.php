<?php
namespace Mawdoo3\Drsk;

use Illuminate\Support\ServiceProvider;
use Mawdoo3\Drsk\TaskInstall;

class DrskServiceProvider extends ServiceProvider
{

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/Routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/Views', 'task');
        $this->loadMigrationsFrom(__DIR__ . '/Migration');
        $this->publishes([
            __DIR__ . '/Config/customSearch.php' => config_path('customSearch.php'),
            __DIR__ . '/Migration/2018_11_16_222007_saved_results_migration.php' => database_path('migrations/TaskInstall/2018_11_16_222007_saved_results_migration.php'),
        ]);
        if ($this->app->runningInConsole()) {
            $this->commands([TaskInstall::class]);
        }

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

    }
}
