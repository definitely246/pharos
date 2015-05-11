<?php

use Illuminate\Database\Migrations\Migration;

class CreatePharosResourcesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
    public function up()
    {
        Schema::create('pharos_resources', function($table)
        {
			$table->increments('id');
			$table->string('name');
            $table->boolean('use_soft_delete');
			$table->string('endpoint');
			$table->timestamps();
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('pharos_resources');
    }

}
