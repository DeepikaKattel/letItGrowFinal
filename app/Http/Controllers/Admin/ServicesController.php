<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = DB::table('services')->get();
        return view('admin.services.index',compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $services = new Services();
        $services->heading = request('heading');
        $services->description = request('description');
        if ($request->hasFile('image')) {
            $image = $request->image;
            $fileName = rand() . "." . $image->getClientOriginalExtension();
            $destination_path = public_path("servicesImage/");
            $image->move($destination_path, $fileName);
            $services->image = 'servicesImage/' . $fileName;
        }         
        $services->save();
        $servicesSave = $services->save();
        if($servicesSave) {
            return redirect('adminServices')->with("status", "The record has been stored");
        } else {
            return redirect('adminServices')->with("error", "There is an error");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Servicess  $services
     * @return \Illuminate\Http\Response
     */
    public function show(Servicess $services)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Servicess  $services
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $services = Services::find($id);
        return view('admin.services.edit', compact('services'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Servicess  $services
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $services= Services::find($id);
        $services->heading = request('heading');
        $services->description = request('description');    
        if ($request->hasFile("image")) {
            if ($services->image) {
                File::delete(public_path($services->image));
            }
            $image = $request->image;
            $fileName = time() . "." . $image->getClientOriginalExtension();
            $destination_path = public_path("servicesImage/");
            $image->move($destination_path, $fileName);

            $services->image = 'servicesImage/' . $fileName;
        }     
        $services->save();
        $servicesSave = $services->save();
        if($servicesSave) {
            return redirect('adminServices')->with("status", "The record has been updated");
        } else {
            return redirect('adminServices')->with("error", "There is an error");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Services  $services
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $services = Services::find($id)->delete();
        return redirect('adminServices')->with('status','Deleted Successfully');
    }
}
