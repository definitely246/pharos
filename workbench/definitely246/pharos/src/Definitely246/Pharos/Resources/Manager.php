<?php namespace Definitely246\Pharos\Resources;

use Definitely246\Pharos\Entities\Resource;

class Manager
{
	protected $Resource;

	/**
	 * Construct a new Manager for resources
	 */
	public function __construct(Resource $Resource, Validation $Validation)
	{
		$this->Resource = $Resource;
		$this->Validation = $Validation;
	}

	/**
	 * Retrieves a new instance of Resource
	 * for us to work with
	 */
	public function newInstance()
	{
		return $this->Resource->newInstance();
	}

	/**
	 * Stores this resource name in the database
	 *
	 */
	public function storeResource($name)
	{
		$this->Validation->valid(['name' => $name]);

		$resource = $this->newInstance();
		$resource->name = $name;
		$resource->endpoint = '/pharos/api/' . $name;
		$resource->use_soft_delete = false;
		$resource->save();

		return $resource;
	}

	/**
	 * Removes this resource from the database
	 *
	 */
	public function destroyResource($id)
	{
		$resource = $this->Resource->findOrFail($id);
		$resource->delete();
	}
}