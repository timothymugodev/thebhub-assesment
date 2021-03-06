<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use DateTime;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::all();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validArticleData = $request->validate([
            'title' => 'required|min:3',
            'summary' => 'required',
            'content' => 'required',
            'author_id' => 'required',
        ]);

        $articleData = [
            ...$validArticleData,
            'article_id' => self::generateArticleId(),
        ];
        
        if($request->ajax){
            $article = Article::create($articleData);
            return response()->json($article);
        }else {
            Article::create($articleData);
            return redirect()->route('articles.create')->with('success', 'Article created successfully');
        }
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('articles.show', ['article' => Article::findOrFail($id)]);
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

    private static function generateArticleId(): string
    {
        $date = new DateTime();
        $str = random_bytes(10) . $date->getTimestamp();
        $str  = sha1($str);
        return $str;
    }
}
