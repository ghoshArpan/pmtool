<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_projects', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('project_name',255)->nullable(false);
            $table->integer('language_id')->unsigned();
            $table->string('project_description',455)->nullable(false);
            $table->integer('user_id')->unsigned();
            $table->integer('team_id')->unsigned();
            $table->string('project_percentage',30)->nullable();
            $table->enum('project_status', ['0', '1','2'])->comment('0=>ongoing,1=>completed,2=>upcoming');;
            $table->integer('client_id')->unsigned();
            $table->string('milestone',255)->nullable();
            $table->string('duration',60)->nullable();
            $table->string('priority',20)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_projects');
    }
}
