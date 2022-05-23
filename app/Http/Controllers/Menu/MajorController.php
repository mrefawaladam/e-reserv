<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use App\Models\Major;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  
use  App\Http\Requests\StoreMajorRequest;
use  App\Http\Requests\UpdateMajorRequest;

class MajorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:major.index')->only('index');
        $this->middleware('permission:major.create')->only('create', 'store');
        $this->middleware('permission:major.edit')->only('edit', 'update');
        $this->middleware('permission:major.destroy')->only('destroy');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $majors = Major::paginate(10);
        return view('pages.major.index',compact('majors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.major.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMajorRequest $request)
    {
        Major::create($request->validated());
        return redirect(route('major.index'))->with('success', 'Data Berhasil Ditambahkan');
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function edit(Major $major)
    {
        return view('pages.major.edit', compact('major'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMajorRequest $request, Major $major)
    {
        $validate = $request->validated();

        $major->update($validate);
        return redirect(route('major.index'))->with('success', 'Data Berhasil Ubah');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Major  $major
     * @return \Illuminate\Http\Response
     */
    public function destroy(Major $major)
    {
        $major->delete();
        return redirect()->route('major.index')->with('success', 'Major Deleted Successfully');

    }
}
