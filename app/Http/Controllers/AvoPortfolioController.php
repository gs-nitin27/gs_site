<?php

namespace App\Http\Controllers;

use View;
use App\AvoPortfolio;
use Illuminate\Routing\Controller as BaseController;


class AvoPortfolioController extends BaseController {
    public function index()
    {
    	return echo "ram";

        $porto = AvoPortfolio::all();

        return view::make('pages.portfolio')->with(['porto' => $porto]);
    }//return View::make('home');

}
?>

