<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('position_id')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('email');
            $table->string('gender')->nullable();
            $table->string('video_link')->nullable();
            $table->string('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('school_attended')->nullable();
            $table->string('avatar')->nullable();
            $table->text('summary')->nullable();
            $table->float('avgRating')->nullable();
            $table->string('document_one')->nullable();
            $table->string('document_two')->nullable();
            $table->string('document_three')->nullable();
            $table->string('foot')->nullable();
            $table->string('guardian_name')->nullable();
            $table->string('guardian_phone')->nullable();
            $table->string('guardian_email')->nullable();
            $table->string('contract_copy')->nullable();
            $table->string('received_by_name')->nullable();
            $table->string('received_by_date')->nullable();
            $table->string('received_by_squad')->nullable();
            $table->string('received_by_id')->nullable();
            $table->string('received_by_register_number')->nullable();
            $table->string('received_by_remark')->nullable();
            $table->timestamps();

            $table->index('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('players');
    }
}
