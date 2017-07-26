<?php

namespace App\Core\Providers;

use Doctrine\Common\EventManager;
use Doctrine\MongoDB\Connection;
use Doctrine\ODM\MongoDB\Configuration;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver;
use Illuminate\Support\ServiceProvider as ServiceProvider;

class DoctrineProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(EventManager::class, function () {
            return new EventManager();
        });


        $this->app->singleton(DocumentManager::class, function (\Illuminate\Foundation\Application $app) {
            return $this->make($app);
        });
    }

    public static function make(\Illuminate\Foundation\Application $app)
    {
        /** @var EventManager $evm */
        $evm = $app[EventManager::class];

        AnnotationDriver::registerAnnotationClasses();

        $connection = static::makeConnection();
        $config = static::makeConfig();

        return DocumentManager::create($connection, $config);
    }

    /**
     * @return Configuration
     */
    protected static function makeConfig()
    {
        $cachePath = config('database.doctrine.cache_dir');

        $config = new Configuration();
        $config->setProxyDir($cachePath.'/proxies');
        $config->setProxyNamespace('Proxies');
        $config->setHydratorDir($cachePath.'/hydrators');
        $config->setHydratorNamespace('Hydrators');
        $config->setMetadataDriverImpl(AnnotationDriver::create([base_path('app')]));
        $config->setPersistentCollectionDir($cachePath.'/collections');
        $config->setPersistentCollectionNamespace('Collections');
        $config->setDefaultDB(config('database.mongodb.database'));

        $predis = new \Predis\Client([
            'scheme' => 'tcp',
            'host'   => config('database.redis.default.host'),
            'port'   => config('database.redis.default.port'),
        ]);

        $config->setMetadataCacheImpl(new \Doctrine\Common\Cache\PredisCache($predis));

        return $config;
    }

    /**
     * @return Connection
     */
    protected static function makeConnection()
    {
        // mongodb://[username:password@]host1[:port1][,host2[:port2],...[,hostN[:portN]]][/[database][?options]]

        $auth = '';
        if (config('database.mongodb.username')) {
            $auth = config('database.mongodb.username').':'.config('database.mongodb.password').'@';
        }

        $server = 'mongodb://'.$auth.config('database.mongodb.host').':'.config('database.mongodb.port');

        return new Connection($server);
    }
}