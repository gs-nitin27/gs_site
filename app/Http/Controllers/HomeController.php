<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\DataModel; 


class HomeController extends Controller
{
    public function index()
	{   
       return View('home');
	}

    public function getArticles()
    {
    $res = new DataModel;
    $res = $res->view_articles();
    $data = array('data'=>$res,'status'=>'1');
    echo json_encode($data);
    }

    public function getEvent_Tour()
    {
    $res1 = new DataModel;
    $res = $res1->view_event_tour();
    $data = array('data'=>$res,'status'=>'1');
    echo json_encode($data);
    }

    public function getJob()
    {
    $res = new DataModel;
    $res = $res->view_job();
    $data = array('data'=>$res,'status'=>'1');
    echo json_encode($data);
    }


}
