<?php

use Illuminate\Database\Migrations\Migration;

class CreatePharosResourceFieldsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('pharos_resource_fields', function($table)
        {
			$table->increments('id');
            $table->unsignedInteger('resource_id');
            $table->string('type');
            $table->string('name');
            $table->integer('length')->nullable();
            $table->text('rules');
            $table->boolean('is_nullable');
            $table->string('default_value')->nullable();
			$table->timestamps();

            $table->unique(['resource_id', 'name']);
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pharos_resource_fields');
    }

}
