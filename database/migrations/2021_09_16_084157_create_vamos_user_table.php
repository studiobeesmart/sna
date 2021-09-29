<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVamosUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vamos_users', function (Blueprint $table) {
            $table->increments('id');
            $table->char('user_name',20); /* relation master_payrol,dept_head,user_name */
            $table->char('user_fullname',250);
            $table->char('user_email',250);
            $table->char('user_passw',200);
            $table->char('user_pass',200);
            $table->enum('user_admin', ['Y', 'N']);  
            $table->char('user_level',5);       
            $table->integer('user_finger'); 
            $table->timestamps();
        });
        Schema::create('vamos_masters', function (Blueprint $table) {
            $table->increments('id');
            $table->char('master_name1',40);
            $table->char('master_name2',40);
            $table->enum('master_sex',['M','F']);
            $table->char('master_email',250);
            $table->char('master_phone1',30);
            $table->char('master_phone2',30);
            $table->char('master_address1',200);
            $table->char('master_address2',200);
            $table->char('master_city',30);
            $table->char('master_state',30);
            $table->char('master_postal',10);
            $table->char('master_pod',30);
            $table->date('master_bod',10);
            $table->char('master_finger',10);
            $table->char('master_dept',10);
            $table->char('master_payrol',20); /* relation master_payrol,dept_head,user_name */
            $table->enum('master_teaching',['Y','N']);
            $table->timestamps();
        });
        
        Schema::create('vamos_depts', function (Blueprint $table) {
            $table->Increments('id');
            $table->char('dept_code',10);
            $table->char('dept_name',250);
            $table->char('dept_head',20); /* relation master_payrol,dept_head,user_name */
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
       // Schema::dropIfExists('vamos_user');
    }
}
