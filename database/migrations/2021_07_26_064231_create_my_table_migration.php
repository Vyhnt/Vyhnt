<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMyTableMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('my_table', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
        ini_set('memory_limit', '-1');
        \DB::unprepared( file_get_contents( "link/to/dump.sql" ) );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('my_table');
    }
}
