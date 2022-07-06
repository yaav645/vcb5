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
        Schema::create('company_users', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('user_id');

            $table->timestamps();

            $table->index('company_id', 'company_user_company_idx');
            $table->index('user_id', 'company_user_user_idx');

            $table->foreign('company_id', 'company_user_company_fk')
                ->on('companies')
                ->references('id');
            $table->foreign('user_id', 'company_user_user_fk')
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
        Schema::dropIfExists('company_users');
    }
};
