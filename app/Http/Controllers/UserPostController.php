<?php

namespace App\Http\Controllers;

use App\Models\UserPost;
use Illuminate\Http\Request;
use App\Http\Resources\UserPostResource;
use App\Http\Requests\UserPostRequest;

class UserPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UserPostResource::collection(UserPost::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserPostRequest $request)
    {
        $userPost = UserPost::create($request->all());
        return new UserPostResource($userPost);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Author $UserPost
     * @return \Illuminate\Http\Response
     */
    public function show(UserPost $userPost)
    {
        return new UserPostResource($userPost);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserPost $userPost
     * @return \Illuminate\Http\Response
     */
    public function update(UserPostRequest $request, UserPost $userPost)
    {
        $userPost->update($request->all());
        return new UserPostResource($userPost);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  App\Models\UserPost $userPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserPost $userPost)
    {
        $userPost->delete();
        return response(null, 204);
    }
}
