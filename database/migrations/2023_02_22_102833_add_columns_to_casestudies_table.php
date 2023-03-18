<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToCasestudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('casestudies', function (Blueprint $table) {
            $table->string('size')->nullable();
            $table->string('contract_type')->nullable();
            $table->string('skill')->nullable();
            $table->string('feature')->nullable();
            $table->string('responsibilities')->nullable();
            $table->dropColumn('budget');
            $table->dropColumn('shortdescription');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('casestudies', function (Blueprint $table) {
            //
        });
    }
}
