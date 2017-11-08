<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\abc; 


class PhotoController extends Controller
{
    public function index()
	{   
		echo "ram";
		//return View('home');

	}

  public function test()
   {

    $res = new abc;
    $res = $res->test_1();

    print_r($res);


   }


}
