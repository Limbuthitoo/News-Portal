<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Nepalnews;
use Illuminate\Http\Request;

class NepalnewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $company = Nepalnews::first();
        return view ('backend.nepalnews.index',compact('company'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('backend.nepalnews.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nepalnews = new Nepalnews();
        $nepalnews->name = $request->name;
        $nepalnews->address = $request->address;
        $nepalnews->email = $request->email;
        $nepalnews->contact = $request->contact;
        $nepalnews->registration = $request->registration;
        $nepalnews->pan = $request->pan;
        $nepalnews->doib = $request->doib;
        $nepalnews->facebook = $request->facebook;
        $nepalnews->instagram = $request->instagram;
        $nepalnews->tiktok = $request->tiktok;
        $nepalnews->सम्पादक = $request->सम्पादक;
        $nepalnews->निर्देशक = $request->निर्देशक;
        $nepalnews->संवाददाता = $request->संवाददाता;

        if ($request->hasFile('logo')) {
            $file = $request->file('logo');
            $newName = time() . $file -> getClientOriginalName();
            $file -> move("images", $newName);
            $nepalnews -> logo = "images/$newName";
        }
        $nepalnews -> save();
        return redirect("/nepalnews");

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
        $company = Nepalnews::find($id);
        return view ('backend.nepalnews.edit',compact('company'));
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
