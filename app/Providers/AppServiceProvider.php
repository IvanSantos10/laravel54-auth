<?php

namespace App\Providers;

use Code\Validator\Cnpj;
use Code\Validator\Cpf;
use Faker\Factory;
use Faker\Generator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Validator::extend('documento', function ($attribute, $value, $parameters, $validator) {
            if($parameters[0] == 'cpf'){
                $documentValidator = new Cpf();
            }else{
                $documentValidator = new Cnpj();
            }
            return $documentValidator->isValid($value);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment('local')) { // consider turning this into a method like isDevEnvironment() if you need more logic
            array_map([$this->app, 'register'], config('app.devProviders'));

            $this->app->singleton(Generator::class, function () {
                return Factory::create(env('FAKER_LANGUAGE'));
            });
        }
    }
}
