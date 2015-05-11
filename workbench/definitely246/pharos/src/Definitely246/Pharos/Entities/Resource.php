<?php namespace Definitely246\Pharos\Entities;

class Resource extends Entity
{
	protected $table = 'pharos_resources';

	public function fields()
	{
		return $this->hasMany('Definitely246\Pharos\Entities\ResourceField');
	}
}