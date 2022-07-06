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
        Schema::create('problems', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('owner_id');
            $table->date('deadline')->nullable();
            $table->unsignedBigInteger('board_id');
            $table->smallInteger('deadline_shift')->default(0);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('owner_id')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete();
            $table->foreign('board_id')
                ->references('id')
                ->on('boards')
                ->cascadeOnDelete();



            /*            $table->index('owner_id', 'problem_user_idx');
                        $table->foreign('owner_id', 'problem_user_fk')
                            ->on('users')
                            ->references('id');*/

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('problems');
    }
};
