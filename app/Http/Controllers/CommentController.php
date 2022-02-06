<?php

namespace App\Http\Controllers;

use App\Events\CreateCommentEvent;
use App\Models\Comment;
use DateTime;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createComment(Request $request)
    {
        // $validObjectTypes = ["comment", "media", "profile"];
        $validCommentData = $request->validate([
            'object_id' => ['string', 'required'],
            'object_type' => ['string', 'required'],
            'content' => ['required'],
            'author_id' => ['required']
            
        ]);

        $extraCommentData = [
            'comment_id' => self::generateCommentId(),
            
        ];
        $commentDataToStore = array_merge( $extraCommentData, $validCommentData);

        $comment = Comment::create($commentDataToStore);
        if($comment){
            event(new CreateCommentEvent($comment));
            return response()->json(["msg" => "Comment created"], 201);
        }

        return response()->json(["msg" => "An error aoccured"], 400);
 
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
        //
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

    private static function generateCommentId(): string
    {
        $date = new DateTime();
        $str = random_bytes(10) . $date->getTimestamp();
        $str  = md5($str);
        return $str;
    }
}
