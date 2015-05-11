<?php namespace Definitely246\Pharos\Controllers;

use App, View;

class Controller extends \Controller
{
	protected $layout = 'pharos::layouts.admin';

	protected $javascriptData = [];

	public function index()
	{
		return $this->Redirect->route('pharos.resources.index');
	}

	protected function setupLayout()
	{
		$this->View = App::make('View')->getFacadeRoot();
		$this->Redirect = App::make('Redirect')->getFacadeRoot();
		$this->Input = App::make('Input')->getFacadeRoot();
		$this->Response = App::make('Response');

		$this->layout = View::make($this->layout, ['javascriptData' => '{}']);
	}

	protected function injectIntoJavascript($name, $data)
	{
		$javascriptData[$name] = $data;
		$this->layout->with('javascriptData', json_encode($javascriptData));
	}
}