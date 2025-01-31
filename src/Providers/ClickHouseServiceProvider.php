<?php

declare(strict_types=1);

namespace Genfay\LaravelClickHouse\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\DatabaseManager;
use Tinderbox\ClickhouseBuilder\Integrations\Laravel\Connection;
use Genfay\LaravelClickHouse\Database\Eloquent\Model;

class ClickHouseServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        /** @var DatabaseManager $db */
        $db = $this->app->get('db');
        Model::setConnectionResolver($db);
    }
}
