<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('');
            $table->index('department');
            $table->integer('department')->unsigned()->default(0);
            $table->foreign('department')->references('id')
                ->on('department')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->index('designation');
            $table->integer('designation')->unsigned()->default(0);
            $table->foreign('designation')->references('id')
                ->on('designation')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('phone')->default('');
            $table->timestamps();
        });


        DB::table('user')->insert([
            [
                'name' => 'John Doe',
                'department' => 1,
                'designation' => 1,
                'phone' => '9090909090',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Arjun',
                'department' => 1,
                'designation' => 2,
                'phone' => '8080808080',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Sam Alex',
                'department' => 2,
                'designation' => 3,
                'phone' => '7070707070',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Zain',
                'department' => 2,
                'designation' => 4,
                'phone' => '9898989898',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jane Doe',
                'department' => 3,
                'designation' => 5,
                'phone' => '9797979797',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Arya',
                'department' => 3,
                'designation' => 6,
                'phone' => '9999999999',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Jebin',
                'department' => 3,
                'designation' => 7,
                'phone' => '8989898989',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'John D Thomas',
                'department' => 4,
                'designation' => 8,
                'phone' => '9393939393',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ashiq',
                'department' => 4,
                'designation' => 9,
                'phone' => '887788778877',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Gopika',
                'department' => 5,
                'designation' => 10,
                'phone' => '8798797879',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Amal',
                'department' => 5,
                'designation' => 11,
                'phone' => '919191919191',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Saleem',
                'department' => 6,
                'designation' => 12,
                'phone' => '919191919190',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Django',
                'department' => 6,
                'designation' => 13,
                'phone' => '919191919194',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Ameer',
                'department' => 1,
                'designation' => 1,
                'phone' => '919191919196',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'name' => 'Thomas',
                'department' => 3,
                'designation' => 5,
                'phone' => '919191919198',
                'created_at' => date('Y-m-d H:i:s')
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
