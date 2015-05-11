<?php namespace Definitely246\Pharos\Resources;

use Definitely246\Pharos\Common\Validator;

class Validation extends Validator
{
	protected $messages = [
		'name.required' => 'Resource must have a name',
		'name.regex' => 'Resource name must be lowercase only with no spaces',
	];

	protected $createRules = [
		'name' => 'required|regex:/^[_a-z]*$/',
	];
}
