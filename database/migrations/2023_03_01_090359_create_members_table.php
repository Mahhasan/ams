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
        Schema::create('members', function (Blueprint $table) { 
            $table->id();
            $table->integer('user_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('number');
            $table->string('status');
            $table->string('date');
            $table->string('designation');
            $table->string('department');
            $table->string('organization_name');
            $table->string('business_type');
            $table->string('registration_number');
            $table->string('org_email');
            $table->string('org_address');
            $table->string('affiliation');
            $table->string('country');
            $table->string('categroy_name');
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
        Schema::dropIfExists('members');
    }
};
