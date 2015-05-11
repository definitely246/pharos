<?php namespace Definitely246\Pharos;

use Redirect;
use Definitely246\Pharos\Common\ValidationException;
use Illuminate\Support\ServiceProvider;

class PharosServiceProvider extends ServiceProvider
{
	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		include_once __DIR__ . '/macros.php';
		include_once __DIR__ . '/routes.php';

		$this->registerValidationException();
		$this->package('definitely246/pharos');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

	/**
	 * Registered this validation exception handler in laravel
	 * so we know how to handle this by default. generally we
	 * just redirect back to the page with error messages/input
	 *
	 * @return void
	 */
	protected function registerValidationException()
	{
		$this->app->error(function(ValidationException $e)
		{
			$sessionMessage = $e->getSessionMessage();
			$redirectUrl = $e->getRedirectUrl();
			$errors = $e->getValidator();

			if ($sessionMessage)
			{
				Session::flash('error', $sessionMessage);
			}

			return $redirectUrl 
				? Redirect::to($redirectUrl)->withInput()->withErrors($errors)
				: Redirect::back()->withInput()->withErrors($errors);
		});

	}
}
