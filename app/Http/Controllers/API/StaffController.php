<?php

namespace App\Http\Controllers\API;

use App\Model\Staff;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\API\StaffRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\API\Staff\StaffResource;
use App\Http\Resources\API\Staff\StaffCollection;

class StaffController extends Controller
{
    /**
     * authrise the user
     */
    public function __construct() {
        $this->middleware('auth:api')->except('index','show');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return StaffCollection::Collection(Staff::paginate(5));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StaffRequest $request)
    {
        $staff= new Staff();
        $staff->name=$request->name;
        $staff->password=Hash::make($request->password);
        $staff->save();
        return response([
            'data'=> new StaffResource($staff)
        ],Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new staffResource(Staff::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Staff $staff)
    {
        $staff->update($request->all());
        return response([
            'data'=> new StaffResource($staff)
        ],Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        $staff->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
    
}
