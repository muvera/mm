<?php namespace core\Billing;

interface BillingInterface {
	public function charge(array $data);
}