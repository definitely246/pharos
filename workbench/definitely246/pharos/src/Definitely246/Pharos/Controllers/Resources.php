<?php namespace Definitely246\Pharos\Controllers;

use Definitely246\Pharos\Resources\Repository;
use Definitely246\Pharos\Resources\Manager;

class Resources extends Controller
{
	protected $Repository, $Manager;

	public function __construct(Repository $Repository, Manager $Manager)
	{
		$this->Repository = $Repository;
		$this->Manager = $Manager;
	}

	public function index()
	{
		$resources = $this->Repository->search($this->Input->all());

		return $this->layout->nest('content', 'pharos::resources.index', compact('resources'));
	}

	public function create()
	{
		$resource = $this->Manager->newInstance();

		return $this->layout->nest('content', 'pharos::resources.create', compact('resource'));
	}

	public function store()
	{
		$resource = $this->Manager->storeResource($this->Input->get('name'));

		return $this->Redirect->route('pharos.resources.edit', $resource->id);
	}

	public function edit($id)
	{
		$resource = $this->Repository->findResourceById($id);

		$this->injectIntoJavascript('resource', $resource);

		return $this->layout->nest('content', 'pharos::resources.edit', compact('resource'));
	}

	public function update($id)
	{
		$resource = $this->Manager->patchResource($id, $this->Input->all());

		return $this->Redirect->route('pharos.resources.index');
	}

	public function destroy($id)
	{
		$resource = $this->Manager->destroyResource($id);

		return $this->Redirect->route('pharos.resources.index');
	}
}