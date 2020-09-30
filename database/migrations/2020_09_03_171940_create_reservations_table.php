<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->integer('renter_id')->unsigned()->index();
            $table->integer('room_id')->unsigned()->index();
            $table->string('confirmed');
            $table->string('name');
            $table->string('lastname');
            $table->string('purposeOfRenting');
            $table->string('typeOfProject');
            $table->string('role');
            $table->string('numberOfPeople');
            $table->date('start_date');
            $table->date('valid_until');
            $table->integer('number_of_days');
            $table->double('total_price');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('renter_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->foreign('room_id')
                ->references('id')
                ->on('rooms')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
