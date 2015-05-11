<?php

class PharosFakeDataSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->addFakeResources();
		$this->addFakeResourceFields();
	}

	/**
	 * Fake data for pharos_resources
	 */
	protected function addFakeResources()
	{
		$this->insertRowsInto('pharos_resources',
		[
			[
				'id' => 1,
				'name' => 'posts',
				'use_soft_delete' => 0,
				'endpoint' => '/pharos/apit/posts',
			]
		]);
	}

	/**
	 * Fake data for pharos_resource_fields
	 */
	protected function addFakeResourceFields()
	{
		$this->insertRowsInto('pharos_resource_fields',
		[
			[
				'id' => 1,
				'resource_id' => 1,
				'type' => 'text',
				'name' => 'body',
				'length' => null,
				'rules' => '',
				'is_nullable' => 0,
				'default_value' => null,
			],
			[
				'id' => 2,
				'resource_id' => 1,
				'type' => 'string',
				'name' => 'mode',
				'length' => 255,
				'rules' => '',
				'is_nullable' => 0,
				'default_value' => null,
			],
		]);
	}

	/**
	 * Insert these rows into the table name
	 *
	 * @param  string $tableName
	 * @param  array  $rows
	 * @return void
	 */
	protected function insertRowsInto($tableName, $rows)
	{
		foreach ($rows as $index => $row)
		{
			DB::table($tableName)->where('id', $row['id'])->delete();
			$rows[$index]['created_at'] = isset($rows[$index]['created_at']) ? $rows[$index]['created_at'] : new DateTime;
			$rows[$index]['updated_at'] = isset($rows[$index]['updated_at']) ? $rows[$index]['updated_at'] : new DateTime;
		}

		DB::table($tableName)->insert($rows);
	}

}