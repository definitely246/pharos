<?php namespace Definitely246\Pharos\Resources;

use Definitely246\Pharos\Entities\Resource;

class SchemaManager
{
	protected $Resource, $Validation;

	/**
	 * Construct a new Manager for resources
	 */
	public function __construct(Resource $Resource, Validation $Validation)
	{
		$this->Resource = $Resource;
		$this->Validation = $Validation;
	}

	/**
	 * Updates the schema for this resource
	 *
	 * @param  integer $resourceId
	 * @param  array   $input
	 * @return Resource
	 */
	public function updateSchema($resourceId, $input)
	{
		// TODO probably need to validate the input with validator here

		$resource = $this->Resource->with('fields')->findOrFail($resourceId);

		$resource = $this->syncFields($resource, $input);

		return $resource;
	}

	protected function syncFields($resource, $fields)
	{
		// if you have fields (type/name) in $resource->fields and $fields
		// then we skip doing any sort of schema changes

		// if type/name is in resource->fields but not $fields
		// then we remove it from $resource->fields (also call Schema::table())

		// if type/name is in $fields but not $resource->fields
		// then we add it to $resource->fields (also call Schema::table())

		// call generator that looks at all resources/fields and
		// creates a directory were models/ and migrations/ are stored
		// this is used as a way to generate database and models
		// might be cool to add seeders here so we can always get our
		// $resource data somewhere else too...

		return $resource;
	}
}