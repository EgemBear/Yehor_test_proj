<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Prod extends Model
{
    protected $table = 'production';
    protected $fillable =['id','name','text','price'];

    public function allP()
    {

    }

    public function create(Request $request)
    {

    }

    public function searchByName($search)
    {

    }

}

