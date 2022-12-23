<?php

namespace Tychovbh\LaravelRevisions\Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Orchestra\Testbench\TestCase as Orchestra;
use Tychovbh\LaravelRevisions\LaravelRevisionsServiceProvider;

class TestCase extends Orchestra
{
    protected function setUp(): void
    {
        parent::setUp();

        Factory::guessFactoryNamesUsing(
            fn (string $modelName) => 'Tychovbh\\LaravelRevisions\\TestsApp\\Database\\Factories\\'.class_basename($modelName).'Factory'
        );
        $this->loadMigrationsFrom(__DIR__.'/../tests-app/database/migrations');
    }

    protected function getPackageProviders($app)
    {
        return [
            LaravelRevisionsServiceProvider::class,
        ];
    }

    public function getEnvironmentSetUp($app)
    {
        config()->set('database.default', 'testing');
    }
}
