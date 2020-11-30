<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Vision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class VisionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vision = DB::table('visions')->get();
        return view('admin.vision.index',compact('vision'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.vision.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $vision = new Vision();
        $vision->heading = request('heading');
        $vision->description = request('description');    
        if ($request->hasFile('image')) {
            $image = $request->image;
            $fileName = rand() . "." . $image->getClientOriginalExtension();
            $destination_path = public_path("visionImage/");
            $image->move($destination_path, $fileName);
            $vision->image = 'visionImage/' . $fileName;
        }          
        $vision->save();
        $visionSave = $vision->save();
        if($visionSave) {
            return redirect('adminVision')->with("status", "The record has been stored");
        } else {
            return redirect('adminVision')->with("error", "There is an error");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function show(Vision $vision)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vision = Vision::find($id);
        return view('admin.vision.edit', compact('vision'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $vision= Vision::find($id);
        $vision->heading = request('heading');
        $vision->description = request('description');    
        if ($request->hasFile("image")) {
            if ($vision->image) {
                File::delete(public_path($vision->image));
            }
            $image = $request->image;
            $fileName = time() . "." . $image->getClientOriginalExtension();
            $destination_path = public_path("visionImage/");
            $image->move($destination_path, $fileName);

            $vision->image = 'visionImage/' . $fileName;
        }         
        $vision->save();
        $visionSave = $vision->save();
        if($visionSave) {
            return redirect('adminVision')->with("status", "The record has been updated");
        } else {
            return redirect('adminVision')->with("error", "There is an error");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vision  $vision
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $vision = Vision::find($id)->delete();
        return redirect('adminVision')->with('status','Deleted Successfully');
    }
}
