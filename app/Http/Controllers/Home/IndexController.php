<?php

namespace App\Http\Controllers\Home;

use App\model\Article;
use App\model\TodayWord;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Symfony\Component\Debug\Exception\FlattenException;

class IndexController extends Controller
{
    private $articleModel;
    private $todayWordModel;
    public function __construct()
    {
        $this->articleModel = new Article();
        $this->todayWordModel = new TodayWord();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->articleModel->getArticleList();
        $todayWord = $this->todayWordModel->getTodayWord();
        $recommendList = $this->articleModel->getRecommendList();
        $photos = $this->articleModel->getPhotos();
        $assign = [
            'list' => $data,
            'active' =>'active',
            'todayWord' => $todayWord,
            'recommendList' => $recommendList,
            'photos' => $photos
        ];
        return view('home.index.index', $assign);
    }


    public function contact(){
        return view('home.index.contact');
    }

    public function review(){
        return view('home.index.review');
    }
    public function email(){
        $title = '从前慢';
        $author = '冰心';
        return view('home.index.mail',
            ['title'=>$title,'author'=>$author]);
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
    public function store(Request $request)
    {
        //
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
}
