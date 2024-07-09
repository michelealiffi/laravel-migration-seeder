<?php

namespace App\Http\Controllers\Guest;

use Illuminate\Http\Request;
use App\Models\Train;
use Carbon\Carbon;
use App\Http\Controllers\Controller;

class TrainController extends Controller
{
    public function index()
    {
        $oggi = Carbon::today();
        $treni = Train::whereDate('orario_di_partenza', '>=', $oggi)->get();
        return view('index', compact('treni'));
    }
}
