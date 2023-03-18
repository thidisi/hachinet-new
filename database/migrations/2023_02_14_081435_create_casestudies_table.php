<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCasestudiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casestudies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->longText('description')->nullable();
            $table->longText('shortdescription')->nullable();
            $table->longText('slug')->nullable();
            $table->longText('location')->nullable();
            $table->date('completed')->nullable();
            $table->longText('budget')->nullable();
            $table->longText('client')->nullable();
            $table->string('url')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->enum('status', ['active', 'inactive'])->default(App\Models\Casestudy::STATUS['ACTIVE']);
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
        Schema::dropIfExists('casestudies');
    }
}
