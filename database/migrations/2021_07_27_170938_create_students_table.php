<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create( 'students', function ( Blueprint $table ) {
            $table->bigIncrements( 'id' );
            $table->integer( "user_id" );
            $table->string( "name" );
            $table->integer( "dept_id" );
            $table->integer( "session_id" );
            $table->integer( "hall_id" )->nullable();
            $table->integer( "rooom_no" )->nullable();
            $table->timestamps();
        } );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists( 'students' );
    }
}
