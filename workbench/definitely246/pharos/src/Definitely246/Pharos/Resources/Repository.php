<?php namespace Definitely246\Pharos\Resources;

use Definitely246\Pharos\Entities\Resource;

class Repository
{
	public function __construct(Resource $Resource)
	{
		$this->Resource = $Resource;
	}

	public function search($input)
	{
		return $this->Resource->paginate();
	}

	public function findResourceById($id)
	{
		return $this->Resource->with('fields')->findOrFail($id);
	}
}