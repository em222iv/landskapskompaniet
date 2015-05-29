<?php namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ImageHandlerServiceProvider extends ServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
    public function register() {
        $this->app->bind('ImageHandler', function(){
            return new App\Models\ImageHandler;
        });
    }

}
