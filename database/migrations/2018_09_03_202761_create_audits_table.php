<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audits', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('auditor_id');
            $table->unsignedInteger('enterprise_id');
            $table->unsignedInteger('criteria_id');
            $table->timestamps();

            // Foreign keys
            $table->foreign('auditor_id')->references('id')->on('auditors');
            $table->foreign('enterprise_id')->references('id')->on('enterprises');
            $table->foreign('criteria_id')->references('id')->on('criterias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audits');
    }
}
