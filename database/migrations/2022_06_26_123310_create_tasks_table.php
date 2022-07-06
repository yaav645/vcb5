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
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('responsible_id');
            $table->unsignedBigInteger('problem_id');
            $table->date('deadline');
            $table->unsignedBigInteger('board_id');
            $table->smallInteger('deadline_shift')->default(0);
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('responsible_id')
                ->references('id')
                ->on('users')
                ->cascadeOnDelete();
            $table->foreign('problem_id')
                ->references('id')
                ->on('problems')
                ->cascadeOnDelete();
            $table->foreign('board_id')
                ->references('id')
                ->on('boards')
                ->cascadeOnDelete();

            /*            $table->index('owner_id', 'task_user_idx');
                        $table->foreign('owner_id', 'task_user_fk')
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
        Schema::dropIfExists('tasks');
    }
};
