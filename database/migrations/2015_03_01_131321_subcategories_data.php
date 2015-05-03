<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SubcategoriesData extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('subcategories_data', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('subcategory_data');
                        $table->integer('subcategory_id');
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
		Schema::drop('subcategories_data');
	}

}
