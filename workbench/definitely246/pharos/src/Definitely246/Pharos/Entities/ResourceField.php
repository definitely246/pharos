<?php namespace Definitely246\Pharos\Entities;

class ResourceField extends Entity
{
	protected $table = 'pharos_resource_fields';

	public function resource()
	{
		return $this->belongsTo('Definitely246\Pharos\Entities\Resource');
	}
}