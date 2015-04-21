<?php namespace App\Providers;

use App\Service;
use Illuminate\Support\ServiceProvider;
use Request;

class AppServiceProvider extends ServiceProvider {

	/**
	 * the boot function must be emptied when trying to rollback or refresh database
	 *
	 * @return void
	 */
	public function boot()
	{
        $services = Service::all();
        view()->share('services',$services);
	}

	/**
	 * Register any application services.
	 *
	 * This service provider is a great spot to register your various container
	 * bindings with the application. As you can see, we are registering our
	 * "Registrar" implementation here. You can add your own bindings too!
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind(
			'Illuminate\Contracts\Auth\Registrar',
			'App\Services\Registrar'
		);
	}

}
