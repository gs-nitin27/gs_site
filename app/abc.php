<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class abc extends Model
{
       public function test_1()
    {

// if(DB::connection()->getDatabaseName())
//    {
//      echo "conncted sucessfully to database ".DB::connection()->getDatabaseName();
//    }

echo "de";
$data=DB::select("select name from user ;");


///$results = DB::select('select *from gs_city ', array(1));

print_r($data);

        //$array = ['abc','def','hij'];

      //  return $results;


    }
}
