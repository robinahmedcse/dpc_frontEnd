<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblSuperAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_super_admin', function (Blueprint $table) {
            $table->increments('super_admin_id');
            $table->string('super_admin_f_name');
            $table->string('super_admin_l_name');
            $table->string('super_admin_username');
            $table->string('super_admin_email',70)->unique();
            $table->string('super_admin_password');
            $table->string('super_admin_phone');
            $table->string('super_admin_photo');
            $table->integer('super_admin_role_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_super_admin');
    }
}
