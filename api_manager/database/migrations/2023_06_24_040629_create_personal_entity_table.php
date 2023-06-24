<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalEntityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('personal_entity', function (Blueprint $table) {
            $table->string('entity_name', 100)->nullable(false);
            $table->unsignedBigInteger('security_type')->nullable(false);
            $table->unsignedBigInteger('entity_type')->nullable(false);
            $table->integer('entity_code')->nullable(false)->unique();
            $table->softDeletes();

            $table->foreign('security_type')->references('id')->on('security_type');
            $table->foreign('entity_type')->references('id')->on('entity_type');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_entity');
    }
}
