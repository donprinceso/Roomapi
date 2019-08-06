<?php

namespace App\Http\Controllers\API;

use App\Model\Eventcentan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\API\EventcentanRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\API\Events\EventcentanResource;
use App\Http\Resources\API\Events\EventcentanCollection;

class EventcentanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return  EventcentanCollection::collection(Eventcentan::paginate(5));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventcentanRequest $request)
    {
        $event = new Eventcentan;
        $event->hall_no=$request->room_no;
        $event->size=$request->size;
        $event->capacity=$request->capacity;
        $event->price=$request->price;
        $event->save();
        return response([
            'data' => new EventcentanResource($event)
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
        return new EventcentanResource(Eventcentan::find($id));
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
        Eventcentan::update($request->find($id));
        return response([
            'data'=> new EventcentanResource(Eventcentan::find($id))
        ],Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Eventcentan::destroy($id);
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
