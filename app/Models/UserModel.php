<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Exception;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'user';

    public function get_data()
    {
        try {
            $query = DB::table($this->table,'a')
                ->select('a.id', 'a.name', 'a.phone','dp.name as department','dg.name as designation')
                ->leftJoin('department as dp','a.department','dp.id')
                ->leftJoin('designation as dg','a.designation','dg.id')
                ->get();
            return $query;
        } catch (Exception $e) {
            dd($e);
        }
    }
}
