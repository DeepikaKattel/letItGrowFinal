<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AdminCareer;
use Illuminate\Support\Facades\DB;

class CareerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $career = DB::table('admin_careers')->get();
        return view('admin.career.index',compact('career'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.career.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $career = new AdminCareer();
        $career->department = request('department');
        $career->designation = request('designation'); 
        $career->job_description = request('job_description'); 
        $career->vacancyNumber = request('vacancyNumber');      
        $career->save();
        $careerSave = $career->save();
        if($careerSave) {
            return redirect('adminCareer')->with("status", "The record has been stored");
        } else {
            return redirect('adminCareer')->with("error", "There is an error");
        }
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
        $career = AdminCareer::find($id);
        return view('admin.career.edit', compact('career'));
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
        $career = AdminCareer::find($id);
        $career->department = request('department');
        $career->designation = request('designation'); 
        $career->job_description = request('job_description'); 
        $career->vacancyNumber = request('vacancyNumber');      
        $career->save();
        $careerSave = $career->save();
        if ($careerSave) {
            return redirect('adminCareer')->with("status", "The record has been updated");
        } else {
            return redirect('adminCareer')->with("error", "There is an error");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $career = AdminCareer::find($id)->delete();
        return redirect('adminCareer')->with('status','Deleted Successfully');
    }

    public function candidates(){
        $candidates = DB::table('careers')->get();
        return view('admin.candidates',compact('candidates'));
    }
}
