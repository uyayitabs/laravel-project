<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToInvoicePdfTemplatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('pdf_templates', function(Blueprint $table)
		{
			$table->foreign('tenant_id')->references('id')->on('tenants')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('pdf_templates', function(Blueprint $table)
		{
			$table->dropForeign('pdf_templates_tenant_id_foreign');
		});
	}

}
