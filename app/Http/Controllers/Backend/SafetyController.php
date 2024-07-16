<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Safety;

class SafetyController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $safety = Safety::first();
        return view('backend.pages.safety.index', compact('safety'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        $safety = new Safety();

        $safety->youtube_url          = $request->youtube_url;

        $safety->save();

        $notification = array(
            'message'    => "Safety section content uploaded successfully.",
            'alert-type' => "success"
        );

        return redirect()->back()->with($notification);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $safety = Safety::find($id);

        $safety->youtube_url          = $request->youtube_url;

        $safety->save();

        $notification = array(
            'message'    => "Safety section content Updated successfully.",
            'alert-type' => "success"
        );

        return redirect()->back()->with($notification);
    }
}
