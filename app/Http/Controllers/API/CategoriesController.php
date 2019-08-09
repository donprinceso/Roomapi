<?php

namespace App\Http\Controllers\API;

use App\Model\Categories;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\API\CategoriesRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Resources\API\Category\CategoriesResource;

class CategoriesController extends Controller
{
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
        return new CategoriesResource(Categories::paginate(10));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoriesRequest $request)
    {
        $category= new Categories();
        $category->name=$request->name;
        $category->save();
        return response([
            "data"=> new CategoriesResource($category)
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
        return new CategoriesResource(Categories::find($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoriesRequest $request,Categories $category)
    {
        $category->update($request->all());
        return response([
            'data'=> new CategoriesResource($category)
        ],Response::HTTP_CREATED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $category)
    {
        $category->delete();
        return response(null,Response::HTTP_NO_CONTENT);
    }
}
