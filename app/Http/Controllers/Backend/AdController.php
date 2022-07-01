<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ad;
use Illuminate\Support\Str;



class AdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ads = Ad::all();
        return view("backend.ads.index",compact("ads"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.ads.create");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ad = new Ad();
        $ad->company_name = $request->company_name;
        $ad->ad_type = $request->ad_type;
        $ad->slug = Str::slug($request->ad_type);
        $ad->link = $request->link;
        $ad->contact = $request->contact;
        $ad->detail = $request->detail;
        if ($request -> file('ad_image')) {
            $file = $request->file('ad_image');
            $newName = time() . $file->getClientOriginalName();
            $file -> move("images",$newName);
            $ad->ad_image ="images/$newName";
            # code...
        }
        $ad->save();
        return redirect("/ads");

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
        $ad = Ad::find($id);
        return view("backend.ads.edit",compact("ad"));
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
        $ad = Ad::find($id);
        $ad->company_name = $request->company_name;
        $ad->ad_type = $request->ad_type;
        $ad->slug = Str::slug($request->ad_type);
        $ad->link = $request->link;
        $ad->contact = $request->contact;
        $ad->detail = $request->detail;
        if ($request -> file('ad_image')) {
            $file = $request->file('ad_image');
            $newName = time() . $file->getClientOriginalName();
            $file -> move("images",$newName);
            $ad->ad_image ="images/$newName";
            # code...
        }
        $ad->update();
        return redirect("/ads");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ad = Ad::find($id);
        $ad->delete();
        return redirect("/ads");
    }
}
