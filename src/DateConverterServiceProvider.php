<?php

namespace Krishnahimself\DateConverter;

use Illuminate\Support\ServiceProvider;
use Krishnahimself\DateConverter\Commands\DateConverterCommand;

class DateConverterServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/laravel-ad-to-bs-converter.php' => config_path('laravel-ad-to-bs-converter.php'),
            ], 'config');

            $this->publishes([
                __DIR__ . '/../resources/views' => base_path('resources/views/vendor/laravel-ad-to-bs-converter'),
            ], 'views');

            $migrationFileName = 'create_laravel_ad_to_bs_converter_table.php';
            if (! $this->migrationFileExists($migrationFileName)) {
                $this->publishes([
                    __DIR__ . "/../database/migrations/{$migrationFileName}.stub" => database_path('migrations/' . date('Y_m_d_His', time()) . '_' . $migrationFileName),
                ], 'migrations');
            }

            $this->commands([
                DateConverterCommand::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'laravel-ad-to-bs-converter');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/laravel-ad-to-bs-converter.php', 'laravel-ad-to-bs-converter');
    }

    public static function migrationFileExists(string $migrationFileName): bool
    {
        $len = strlen($migrationFileName);
        foreach (glob(database_path("migrations/*.php")) as $filename) {
            if ((substr($filename, -$len) === $migrationFileName)) {
                return true;
            }
        }

        return false;
    }
}
