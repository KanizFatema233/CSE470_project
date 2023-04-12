<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\history;
use App\Models\lunch;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function attendance()
    {
        return view('attendance');
    }


    public function attendance_take(Request $request)
    {
        // print_r($request->name);
        $record = new history;
        $record->date = $request->date;
        $record->time = $request->time;
        $record->name = $request->name;
        $record->save();
        $user_name = $request->name.'';
        $data = DB::select('SELECT * FROM `create_attendance_table` WHERE `name` LIKE '.'"'.$user_name.'"');
        return view('attendance_view',['data'=>$data]);
    }


    public function inventory()
    {
        return view('inventory');
    }

    public function food_management()
    {
        return view('food_management');
    }

    public function food_list(Request $request)
    {
        // print_r($request->all());
        $record = new lunch;
        $record->name = $request->name;
        $record->employee_id = $request->employee_id;
        $record->menu = $request->menu;
        $record->save();
        $user_name = $request->name.'';
        $data = DB::select('SELECT * FROM `create_food_table` WHERE `name` LIKE '.'"'.$user_name.'"');
        return view('food_management_view',['data'=>$data]);
    }




}
