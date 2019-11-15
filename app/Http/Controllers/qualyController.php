<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Qualification;
use Illuminate\Support\Facades\Auth;

class qualyController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.qually');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {


        $this->validate($request,[
                
                'qualificatin' => 'required',
                'experience' => 'required',
                'monthlyIncome' => 'required',
                'IncomeSource' => 'required',
                'major' => 'required',
                
 
       ]


        );

       $qualy = new Qualification;
       $qualy->user_id=Auth::id();
         $qualy->qualificatin = $request->input('qualificatin');

        $qualy->experience = json_encode(request('experience'),JSON_UNESCAPED_UNICODE);
        $qualy->monthlyIncome = json_encode(request('monthlyIncome'),JSON_UNESCAPED_UNICODE);
        $qualy->major = $request->input('major');
        $qualy->IncomeSource = json_encode(request('IncomeSource'),JSON_UNESCAPED_UNICODE);
        $qualy->save();
        //return redirect('/qualy');
         return redirect('/project/create')->with('success','تمت عملية الاضافة بنجاح قم باضافة بيانات المشروع');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
