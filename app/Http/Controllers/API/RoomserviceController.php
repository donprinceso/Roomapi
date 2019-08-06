<?php

namespace App\Http\Controllers\API;

use App\Model\Roomservice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\API\RoomserviceRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\API\Rooms\RoomserviceResource;
use App\Http\Resources\API\Rooms\RoomserviceCollection;

class RoomserviceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return RoomserviceCollection::collection(Roomservice::paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoomserviceRequest $request)
    {
        $room = new Roomservice;
        $room->room_no=$request->room_no;
        $room->size=$request->size;
        $room->price=$request->price;
        $room->save();
        return response([
            'data' => new RoomserviceResource($room)
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
        return new RoomserviceResource(Roomservice::find($id)); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Roomservice $room)
    {
        $room->update($request->all());
        return response([
            'data'=> new RoomserviceResource($room)
        ],Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Roomservice $room)
    {
        $room->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
