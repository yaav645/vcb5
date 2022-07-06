<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('board_users', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('board_id');
            $table->unsignedBigInteger('user_id');

            $table->timestamps();

            $table->index('board_id', 'board_user_board_idx');
            $table->index('user_id', 'board_user_user_idx');

            $table->foreign('board_id', 'board_user_board_fk')
                ->on('boards')
                ->references('id');
            $table->foreign('user_id', 'board_user_user_fk')
                ->on('users')
                ->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('board_users');
    }
};
