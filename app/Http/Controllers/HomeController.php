<?php

namespace App\Http\Controllers;

use App\Article;
use App\Banner;
use App\FirstPage;
use App\History;
use App\KnowMore;
use App\Logo;
use App\MujibHistory;
use App\MujibLife;
use App\MujibPublication;
use App\MujibSpeech;
use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('factorchecker');
        $this->middleware('SiteRes');
        $this->middleware('SiteChecker');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    function articleSettings()
    {
        $allArticle = Article::all();
        return view('dashboard.articleSettings',compact('allArticle'));
    }
    function savearticle(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'photo' => 'required',
            'article' => 'required',
            'writer' => 'required'
        ]);

        $lastId = Article::insertGetId([
            'title' => $request->title,
            'photo' => $request->photo,
            'articleHint' => $request->articleHint,
            'article' => $request->article,
            'writer' => $request->writer
        ]);
        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = $lastId . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->resize(2092, 1113)->save(base_path("public/frontEnd/uploads/article/" . $photoName), 100);
            // Image::make($photo)->resize(20, 20)->save(base_path("public/frontEnd/img/" . $photoName), 100);
            Article::findOrFail($lastId)->update([
                'photo' => $photoName,
            ]);
            // echo $photoName;
        }

        return back()->with('greenStatus', 'Saved👍');
    }
    function deletearticle($id)
    {
        Article::findOrFail($id)->delete();
        return back()->with('greenStatus', 'Deleted 👍');
    }


    // logo change
    function logosettings()
    {
        $allLogo = Logo::all();
        return view('dashboard.logosettings', compact('allLogo'));
    }
    function saveLogo(Request $request)
    {
        $request->validate([
            'logo' => 'required'
        ]);

        $allLogo = Logo::all();
        foreach ($allLogo as $value) {
            $value->activation = 0;
            $value->save();
        }

        $lastId = Logo::insertGetId([
            'activation' => 1
        ]);

        if ($request->hasFile('logo')) {
            $photo = $request->logo;
            $photoName = $lastId . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->resize(120, 120)->save(base_path("public/frontEnd/uploads/logo/" . $photoName), 100);
            // Image::make($photo)->resize(20, 20)->save(base_path("public/frontEnd/img/" . $photoName), 100);
            Logo::findOrFail($lastId)->update([
                'logo' => $photoName,
            ]);
            return back()->with('greenStatus', 'Added 👍');
        }
    }

    function activelogo($id)
    {
        $allLogo = Logo::all();
        foreach ($allLogo as $value) {
            $value->activation = 0;
            $value->save();
        }
        Logo::findOrFail($id)->update([
            'activation' => 1,
        ]);

        return back()->with('greenStatus', 'Logo activated 👍');
    }
    function logodelete($id)
    {
        $photoName = Logo::findOrFail($id)->logo;
        unlink(base_path("public/frontEnd/uploads/logo/" . $photoName));
        Logo::findOrFail($id)->delete();

        return back()->with('greenStatus', 'Deleted 👍');
    }


    function firstPageText()
    {
        $firstPage = FirstPage::all();
        return view('dashboard.firstPageText', compact('firstPage'));
    }
    function updateFirstPage(Request $request)
    {
        $request->validate([
            'title',
            'dis',
        ]);

        $allLogo = FirstPage::all();
        foreach ($allLogo as $value) {
            $value->delete();
        }

        FirstPage::insert([
            'title' => $request->title,
            'dis' => $request->dis,
        ]);

        return back()->with('greenStatus', 'Updated 👍');
    }

    function bannerSettings()
    {
        $allbanners = Banner::all();
        return view('dashboard.bannerSettings', compact('allbanners'));
    }

    function saveBanner(Request $request)
    {
        $request->validate([
            'photo' => 'required'
        ]);

        // $allLogo = Banner::all();
        // foreach ($allLogo as $value) {
        //     $value->activation = 0;
        //     $value->save();
        // }

        $lastId = Banner::insertGetId([
            'activation' => 1
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = $lastId . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->resize(550, 550)->save(base_path("public/frontEnd/uploads/banner/" . $photoName), 100);
            // Image::make($photo)->resize(20, 20)->save(base_path("public/frontEnd/img/" . $photoName), 100);
            Banner::findOrFail($lastId)->update([
                'photo' => $photoName,
            ]);
            return back()->with('greenStatus', 'Added 👍');
        }
    }

    function activebanner($id)
    {
        // $allLogo = Banner::all();
        // foreach ($allLogo as $value) {
        //     $value->activation = 0;
        //     $value->save();
        // }
        Banner::findOrFail($id)->update([
            'activation' => 1,
        ]);

        return back()->with('greenStatus', 'Logo activated 👍');
    }
    function bannerdelete($id)
    {
        $photoName = Banner::findOrFail($id)->photo;
        unlink(base_path("public/frontEnd/uploads/banner/" . $photoName));
        Banner::findOrFail($id)->delete();

        return back()->with('greenStatus', 'Deleted 👍');
    }

    function historySettings()
    {
        $allhistory = History::all();
        return view('dashboard.historySettings', compact('allhistory'));
    }
    function saveHistory(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'dis' => 'required',
            'photo' => 'required'
        ]);
        $allLogo = History::all();
        foreach ($allLogo as $value) {
            $value->delete();
        }

        $lastId = History::insertGetId([
            'title' => $request->title,
            'dis' => $request->dis
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = $lastId . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->resize(945, 945)->save(base_path("public/frontEnd/uploads/history/" . $photoName), 100);
            // Image::make($photo)->resize(20, 20)->save(base_path("public/frontEnd/img/" . $photoName), 100);
            History::findOrFail($lastId)->update([
                'photo' => $photoName,
            ]);
            return back()->with('greenStatus', 'Saved 👍');
        }
    }


    function mujibHistorydash()
    {
        $mujibHistorydash = MujibHistory::all();
        return view('dashboard.mujibHistorydash', compact('mujibHistorydash'));
    }
    function savemijibhistory(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'dis' => 'required',
            'photo' => 'required'
        ]);


        $lastId = MujibHistory::insertGetId([
            'title' => $request->title,
            'dis' => $request->dis
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = $lastId . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->resize(945, 945)->save(base_path("public/frontEnd/uploads/mijib_history/" . $photoName), 100);
            // Image::make($photo)->resize(20, 20)->save(base_path("public/frontEnd/img/" . $photoName), 100);
            MujibHistory::findOrFail($lastId)->update([
                'photo' => $photoName,
            ]);
            return back()->with('greenStatus', 'Saved 👍');
        }
    }

    function mujibLifedash()
    {
        $mujibLifedash = MujibLife::all();
        return view('dashboard.mujibLifedash', compact('mujibLifedash'));
    }
    function savemujib_Life(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'dis' => 'required',
            'photo' => 'required'
        ]);


        $lastId = MujibLife::insertGetId([
            'title' => $request->title,
            'dis' => $request->dis
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = $lastId . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->save(base_path("public/frontEnd/uploads/mujib_Life/" . $photoName), 100);
            // Image::make($photo)->resize(20, 20)->save(base_path("public/frontEnd/img/" . $photoName), 100);
            MujibLife::findOrFail($lastId)->update([
                'photo' => $photoName,
            ]);
            return back()->with('greenStatus', 'Saved 👍');
        }
    }

    function mujibSpeechdash()
    {
        $mujibSpeechdash = MujibSpeech::all();
        return view('dashboard.mujibSpeechdash', compact('mujibSpeechdash'));
    }
    function savemujib_Speech(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'dis' => 'required',
            'photo' => 'required'
        ]);


        $lastId = MujibSpeech::insertGetId([
            'title' => $request->title,
            'dis' => $request->dis
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = $lastId . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->resize(945, 945)->save(base_path("public/frontEnd/uploads/mujib_Speech/" . $photoName), 100);
            // Image::make($photo)->resize(20, 20)->save(base_path("public/frontEnd/img/" . $photoName), 100);
            MujibSpeech::findOrFail($lastId)->update([
                'photo' => $photoName,
            ]);
            return back()->with('greenStatus', 'Saved 👍');
        }
    }

    function mujibPublicationdash()
    {
        $mujibPublicationdash = MujibPublication::all();
        return view('dashboard.mujibPublicationdash', compact('mujibPublicationdash'));
    }
    function savemujib_Publication(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'dis' => 'required',
            'photo' => 'required'
        ]);


        $lastId = MujibPublication::insertGetId([
            'title' => $request->title,
            'dis' => $request->dis
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = $lastId . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->resize(945, 945)->save(base_path("public/frontEnd/uploads/mujib_Publication/" . $photoName), 100);
            // Image::make($photo)->resize(20, 20)->save(base_path("public/frontEnd/img/" . $photoName), 100);
            MujibPublication::findOrFail($lastId)->update([
                'photo' => $photoName,
            ]);
            return back()->with('greenStatus', 'Saved 👍');
        }
    }


    function delete_mujibHistorydash($id)
    {
        $photoName = MujibHistory::findOrFail($id)->photo;
        unlink(base_path("public/frontEnd/uploads/mijib_history/" . $photoName));
        MujibHistory::findOrFail($id)->delete();
        return back()->with('greenStatus', 'Deleted 👍');
    }
    function delete_mujibLifedash($id)
    {
        $photoName = MujibLife::findOrFail($id)->photo;
        unlink(base_path("public/frontEnd/uploads/mujib_Life/" . $photoName));
        MujibLife::findOrFail($id)->delete();
        return back()->with('greenStatus', 'Deleted 👍');
    }
    function delete_mujibSpeechdash($id)
    {
        $photoName = MujibSpeech::findOrFail($id)->photo;
        unlink(base_path("public/frontEnd/uploads/mujib_Speech/" . $photoName));
        MujibSpeech::findOrFail($id)->delete();
        return back()->with('greenStatus', 'Deleted 👍');
    }
    function delete_mujibPublicationdash($id)
    {
        $photoName = MujibPublication::findOrFail($id)->photo;
        unlink(base_path("public/frontEnd/uploads/mujib_Publication/" . $photoName));
        MujibPublication::findOrFail($id)->delete();
        return back()->with('greenStatus', 'Deleted 👍');
    }

    function knowmoredash()
    {
        $knowMoreDash = KnowMore::all();
        return view('dashboard.knowMoreDash', compact('knowMoreDash'));
    }
    function saveknowmore(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'dis' => 'required',
            'photo' => 'required'
        ]);


        $lastId = KnowMore::insertGetId([
            'title' => $request->title,
            'dis' => $request->dis
        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = $lastId . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->resize(945, 945)->save(base_path("public/frontEnd/uploads/knowMore/" . $photoName), 100);
            // Image::make($photo)->resize(20, 20)->save(base_path("public/frontEnd/img/" . $photoName), 100);
            KnowMore::findOrFail($lastId)->update([
                'photo' => $photoName,
            ]);
            return back()->with('greenStatus', 'Saved 👍');
        }
    }
    function deletesaveknowmore($id)
    {
        $photoName = KnowMore::findOrFail($id)->photo;
        unlink(base_path("public/frontEnd/uploads/knowMore/" . $photoName));
        KnowMore::findOrFail($id)->delete();
        return back()->with('greenStatus', 'Deleted 👍');
    }
    function allusers()
    {
        $allusers = User::all();
        return view('dashboard.allusers', compact('allusers'));
    }
    function deactiveuser($id)
    {
        User::findOrFail($id)->update([
            'userActivation' => 0,
        ]);
        return back()->with('greenStatus', 'Done 👍');
    }
    function activeuser($id)
    {
        User::findOrFail($id)->update([
            'userActivation' => 1,
        ]);
        return back()->with('greenStatus', 'Done 👍');
    }
    function removeuser($id)
    {
        User::findOrFail($id)->delete();
        return back()->with('greenStatus', 'Done 👍');
    }









    function editarticle($id)
    {
        $allProducts=Article::findOrFail($id);
        return view('dashboard/editor/article',compact('allProducts'));
    }
    function savearticleEdit(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'articleHint' => 'required',
            'article' => 'required',
            'writer' => 'required'
        ]);

        $lastId = Article::find($request->id)->update([
            'title' => $request->title,
            'articleHint' => $request->articleHint,
            'article' => $request->article,
            'writer' => $request->writer
        ]);
        if ($request->hasFile('photo')) {
            $image_name = Article::findOrFail( $request->id)->photo;
            $update_image=$request->id.'.'.$request->photo->getClientOriginalExtension();
            unlink(base_path("public/frontEnd/uploads/article/".$image_name));
            Article::findOrFail($request->id)->update([
                'photo' => $update_image,
            ]);
            Image::make($request->photo)->resize(2092, 1113)->save(base_path("public/frontEnd/uploads/article/" . $update_image), 100);
        }

        return back()->with('greenStatus', 'Saved👍');
    }
    
    function edit_savemujib_Life($id)
    {
        $allProducts=MujibLife::findOrFail($id);
        return view('dashboard/editor/mujibLifedash',compact('allProducts'));
    }
    function saveEditmujib_Life(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'dis' => 'required',
        ]);

        $lastId = MujibLife::find($request->id)->update([
            'title' => $request->title,
            'dis' => $request->dis,
        ]);
        if ($request->hasFile('photo')) {
            $image_name = MujibLife::findOrFail( $request->id)->photo;
            $update_image=$request->id.'.'.$request->photo->getClientOriginalExtension();
            unlink(base_path("public/frontEnd/uploads/mujib_Life/" . $image_name));
            MujibLife::findOrFail($request->id)->update([
                'photo' => $update_image,
            ]);
            Image::make($request->photo)->save(base_path("public/frontEnd/uploads/mujib_Life/" . $update_image), 100);
        }

        return back()->with('greenStatus', 'Saved👍');
    }


    function edit_mujibHistorydash($id)
    {
        $allProducts=MujibHistory::findOrFail($id);
        return view('dashboard/editor/mujibHistorydash',compact('allProducts'));
    }
    function saveedit_mujibHistorydash(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'dis' => 'required',
        ]);

        $lastId = MujibHistory::find($request->id)->update([
            'title' => $request->title,
            'dis' => $request->dis,
        ]);
        if ($request->hasFile('photo')) {
            $image_name = MujibHistory::findOrFail( $request->id)->photo;
            $update_image=$request->id.'.'.$request->photo->getClientOriginalExtension();
            unlink(base_path("public/frontEnd/uploads/mijib_history/" . $image_name));
            MujibHistory::findOrFail($request->id)->update([
                'photo' => $update_image,
            ]);
            Image::make($request->photo)->resize(945, 945)->save(base_path("public/frontEnd/uploads/mijib_history/" . $update_image), 100);
        }

        return back()->with('greenStatus', 'Saved👍');
    }


    function edit_mujibSpeechdash($id)
    {
        $allProducts=MujibSpeech::findOrFail($id);
        return view('dashboard/editor/mujibSpeechdash',compact('allProducts'));
    }
    function saveEditsavemujib_Speech(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'dis' => 'required',
        ]);

        $lastId = MujibSpeech::find($request->id)->update([
            'title' => $request->title,
            'dis' => $request->dis,
        ]);
        if ($request->hasFile('photo')) {
            $image_name = MujibSpeech::findOrFail( $request->id)->photo;
            $update_image=$request->id.'.'.$request->photo->getClientOriginalExtension();
            unlink(base_path("public/frontEnd/uploads/mujib_Speech/" . $image_name));
            MujibSpeech::findOrFail($request->id)->update([
                'photo' => $update_image,
            ]);
            Image::make($request->photo)->resize(945, 945)->save(base_path("public/frontEnd/uploads/mujib_Speech/" . $update_image), 100);
        }

        return back()->with('greenStatus', 'Saved👍');
    }


    function edit_mujibPublicationdash($id)
    {
        $allProducts=MujibPublication::findOrFail($id);
        return view('dashboard/editor/mujibPublicationdash',compact('allProducts'));
    }
    function savemujib_Publication_edit(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'dis' => 'required',
        ]);

        $lastId = MujibPublication::find($request->id)->update([
            'title' => $request->title,
            'dis' => $request->dis,
        ]);
        if ($request->hasFile('photo')) {
            $image_name = MujibPublication::findOrFail( $request->id)->photo;
            $update_image=$request->id.'.'.$request->photo->getClientOriginalExtension();
            unlink(base_path("public/frontEnd/uploads/mujib_Publication/" . $image_name));
            MujibPublication::findOrFail($request->id)->update([
                'photo' => $update_image,
            ]);
            Image::make($request->photo)->resize(945, 945)->save(base_path("public/frontEnd/uploads/mujib_Publication/" . $update_image), 100);
        }

        return back()->with('greenStatus', 'Saved👍');
    }


    function knowEdit($id)
    {
        $allProducts=KnowMore::findOrFail($id);
        return view('dashboard/editor/KnowMoreDash',compact('allProducts'));
    }
    function knowEditSave(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'dis' => 'required',
        ]);

        $lastId = KnowMore::find($request->id)->update([
            'title' => $request->title,
            'dis' => $request->dis,
        ]);
        if ($request->hasFile('photo')) {
            $image_name = KnowMore::findOrFail( $request->id)->photo;
            $update_image=$request->id.'.'.$request->photo->getClientOriginalExtension();
            unlink(base_path("public/frontEnd/uploads/knowMore/" . $image_name));
            KnowMore::findOrFail($request->id)->update([
                'photo' => $update_image,
            ]);
            Image::make($request->photo)->resize(945, 945)->save(base_path("public/frontEnd/uploads/knowMore/" . $update_image), 100);
            
        }

        return back()->with('greenStatus', 'Saved👍');
    }








    // Class Ends Here
}
