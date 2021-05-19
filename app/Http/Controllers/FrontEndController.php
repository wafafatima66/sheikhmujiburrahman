<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Banner;
use App\FirstPage;
use App\GalleryAlbum;
use App\GalleryPhoto;
use App\History;
use App\KnowMore;
use App\Logo;
use App\MujibHistory;
use App\MujibLife;
use App\MujibPublication;
use App\MujibSpeech;
use Intervention\Image\Facades\Image;

class FrontEndController extends Controller
{
    public function __construct()
    {
        $this->middleware('SiteChecker');
        // $this->middleware('auth');
        // $this->middleware('factorchecker');
    }
    function welcome()
    {
        $logo = Logo::where('activation',1)->first('logo');
        $firstPageText = FirstPage::first();
        $allbanners = Banner::all();
        return view('welcome',compact('logo', 'firstPageText', 'allbanners'));
    }
    function readMore()
    {
        $allArticle = Article::all();
        $logo = Logo::where('activation', 1)->first('logo');
        return view('readMore', compact('allArticle', 'logo'));
    }
    function articledetails($id)
    {
        $randomId = $id;
        $randomIdChecker = rand($id, Article::all()->count());
        if (Article::where('id',$randomIdChecker)->exists()) {
            $randomId = $randomIdChecker;
        }
        // echo $randomId;
        $article = Article::findOrFail($id);
        $suggestion = Article::findOrFail($randomId);
        $logo = Logo::where('activation', 1)->first('logo');
        return view('articleDetails', compact('article', 'suggestion', 'logo'));
    }

    function history()
    {
        $logo = Logo::where('activation', 1)->first('logo');
        $history = History::first();
        return view('history', compact('logo', 'history'));
    }


    function mujibHistory()
    {
        $logo = Logo::where('activation', 1)->first('logo');
        $alldata = MujibHistory::all();
        return view('MujibHistory', compact('logo', 'alldata'));
    }
    function mujibLife()
    {
        $logo = Logo::where('activation', 1)->first('logo');
        $alldata = MujibLife::all();
        return view('MujibLife', compact('logo', 'alldata'));
    }
    function mujibSpeech()
    {
        $logo = Logo::where('activation', 1)->first('logo');
        $alldata = MujibSpeech::all();
        return view('MujibSpeech', compact('logo', 'alldata'));
    }
    function mujibPublication()
    {
        $logo = Logo::where('activation', 1)->first('logo');
        $alldata = MujibPublication::all();
        return view('MujibPublication', compact('logo', 'alldata'));
    }
    function knowmore()
    {
        $logo = Logo::where('activation', 1)->first('logo');
        $alldata = KnowMore::all();
        return view('knowMore', compact('logo', 'alldata'));
    }

    function jiboniFrontEnd(){
        $alldata = MujibLife::all();
        return view('jiboni',compact('alldata'));
    }


    public function photo_gallery(){
        //$allArticle = Article::all();
        $logo = Logo::where('activation', 1)->first('logo');
        $allPhotos = GalleryPhoto::all();
        $allAlbums = GalleryAlbum::all();
        $data = array(
            'allPhotos' => $allPhotos,
            'logo'=> $logo,
            'allAlbums'=> $allAlbums
        );
        return view('photo_gallery')->with($data);

    }

     
    // Class Ends Here
}
