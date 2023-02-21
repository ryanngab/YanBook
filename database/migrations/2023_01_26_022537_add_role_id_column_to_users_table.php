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
        Schema::table('users', function (Blueprint $table) {
            //
            // $table->unsignedBiginteger('role_id')->nullable();
            // $table->foreign('role_id')->references('id')->on('roles');
            $table->boolean('role_id')->default(false);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            // Schema::disableForeignKeyConstraints();
            // $table->dropForeign('users_role_id_foreign');
            // $table->dropColumn('role_id');
        });
    }
};
