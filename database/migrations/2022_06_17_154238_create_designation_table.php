<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateDesignationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designation', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('');
            $table->timestamps();
        });


        DB::table('designation')->insert([
            ['name' => 'Sales Executive', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Sales Manager', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Marketing Executive', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Marketing Manager', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Accountant', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Account Manager', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Cashier', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Service Manager', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Technician', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Store Manager', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Store Keeper', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'CRM', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Customer care executive', 'created_at' => date('Y-m-d H:i:s')],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('designation');
    }
}
