<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuditCriteriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('audit_criteria', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('audit_id');
            $table->unsignedInteger('criteria_id');
            $table->unsignedInteger('finding_id');
            $table->timestamps();

            // Foreign keys
            $table->foreign('audit_id')->references('id')->on('audits');
            $table->foreign('criteria_id')->references('id')->on('criterias');
            $table->foreign('finding_id')->references('id')->on('findings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('audit_criteria');
    }
}
