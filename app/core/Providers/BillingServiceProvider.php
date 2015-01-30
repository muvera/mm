<?php namespace cakehollywood\Providers;

use Illuminate\Support\ServiceProvider;

class BillingServiceProvider extends ServiceProvider {

	public function register()
	{
		$this->app->bind('cakehollywood\Billing\BillingInterface', 'cakehollywood\Billing\StripeBilling');
	}

}

