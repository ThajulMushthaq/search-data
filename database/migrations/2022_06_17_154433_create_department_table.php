<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('');
            $table->timestamps();
        });

        
        DB::table('department')->insert([
            ['name' => 'Sales', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Marketing', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Accounts', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Service', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Store', 'created_at' => date('Y-m-d H:i:s')],
            ['name' => 'Customer', 'created_at' => date('Y-m-d H:i:s')],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('department');
    }
}
