<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Classroom;
use App\Models\Attendence;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
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

    public function checkIn() {
        $classroom = Classroom::all();
        $user = User::all();
        return view('home',['classroom' => $classroom]);
    }

    public function postCheckIn(Request $request) {
        $id_class = $request->id_class;
        foreach ($request->type as $userId => $status) {
            $data = [
                'id_user' => $userId,
                'id_class' =>$id_class,
                'status' => $status
            ];
            Attendence::create($data);
        }
        return Attendence::all()->toArray();
    }

    public function getUserByClass(Request $request, $id_class) {
        // dd($request->all());
        $users = User::where('id_class',$id_class)->get();
        return $users->toJson();
    }
}
