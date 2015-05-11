<?php namespace Definitely246\Pharos\Controllers;

use Definitely246\Pharos\Resources\SchemaManager;

class Schemas extends Controller
{
	public function __construct(SchemaManager $SchemaManager)
	{
		$this->SchemaManager = $SchemaManager;
	}

	public function patch($resourceId)
	{
		$resource = $this->SchemaManager->updateSchema($resourceId, $this->Input->all());

		return $this->Response->json($resource);
	}
}