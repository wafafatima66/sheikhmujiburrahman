<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use App\Article;
use App\Banner;
use App\FirstPage;
use App\GalleryAlbum;
use App\GalleryPhoto;
use App\History;
use App\KnowMore;
use App\Logo;
use App\Modules;
use App\MujibHistory;
use App\MujibLife;
use App\MujibPublication;
use App\MujibSpeech;
use App\Permission;
use App\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

use Authy\AuthyApi;

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
        /* $this->middleware('auth');
        // $this->middleware('factorchecker');
        $this->middleware('SiteRes');
        $this->middleware('SiteChecker'); */
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $articleCount = Article::all()->count();
        $userCount = User::all()->count();
        return view('home',compact('articleCount'),compact('userCount'));
    }


    function articleList()
    {
        $allArticle = Article::all();
        return view('dashboard.articleList', compact('allArticle'));
    }

    function addArticle()
    {
        return view('dashboard.addArticle');
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

    function mujibLifedashAdd()
    {
        return view('dashboard.mujibLifedashAdd');
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

    function mujibSpeechdashAdd()
    {
        return view('dashboard.mujibSpeechdashAdd');
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
        $allProducts = Article::findOrFail($id);
        return view('dashboard/editor/article', compact('allProducts'));
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
            $image_name = Article::findOrFail($request->id)->photo;
            $update_image = $request->id . '.' . $request->photo->getClientOriginalExtension();
            unlink(base_path("public/frontEnd/uploads/article/" . $image_name));
            Article::findOrFail($request->id)->update([
                'photo' => $update_image,
            ]);
            Image::make($request->photo)->resize(2092, 1113)->save(base_path("public/frontEnd/uploads/article/" . $update_image), 100);
        }

        return back()->with('greenStatus', 'Saved👍');
    }

    function edit_savemujib_Life($id)
    {
        $allProducts = MujibLife::findOrFail($id);
        return view('dashboard/editor/mujibLifedash', compact('allProducts'));
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
            $image_name = MujibLife::findOrFail($request->id)->photo;
            $update_image = $request->id . '.' . $request->photo->getClientOriginalExtension();
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
        $allProducts = MujibHistory::findOrFail($id);
        return view('dashboard/editor/mujibHistorydash', compact('allProducts'));
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
            $image_name = MujibHistory::findOrFail($request->id)->photo;
            $update_image = $request->id . '.' . $request->photo->getClientOriginalExtension();
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
        $allProducts = MujibSpeech::findOrFail($id);
        return view('dashboard/editor/mujibSpeechdash', compact('allProducts'));
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
            $image_name = MujibSpeech::findOrFail($request->id)->photo;
            $update_image = $request->id . '.' . $request->photo->getClientOriginalExtension();
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
        $allProducts = MujibPublication::findOrFail($id);
        return view('dashboard/editor/mujibPublicationdash', compact('allProducts'));
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
            $image_name = MujibPublication::findOrFail($request->id)->photo;
            $update_image = $request->id . '.' . $request->photo->getClientOriginalExtension();
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
        $allProducts = KnowMore::findOrFail($id);
        return view('dashboard/editor/KnowMoreDash', compact('allProducts'));
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
            $image_name = KnowMore::findOrFail($request->id)->photo;
            $update_image = $request->id . '.' . $request->photo->getClientOriginalExtension();
            unlink(base_path("public/frontEnd/uploads/knowMore/" . $image_name));
            KnowMore::findOrFail($request->id)->update([
                'photo' => $update_image,
            ]);
            Image::make($request->photo)->resize(945, 945)->save(base_path("public/frontEnd/uploads/knowMore/" . $update_image), 100);
        }

        return back()->with('greenStatus', 'Saved👍');
    }

    // Add users 

    function addUser()
    {
        return view('dashboard/addUser');
    }

    // function showvalue(){
        // $authy_api = new AuthyApi(getenv("AUTHY_SECRET"));
        // $authy_user = $authy_api->registerUser('wfatima203@gmail.com', '01789040491', '880');
        
        // echo $authy_user->id();

        // if($authy_user->ok()) {
        //     printf($authy_user->id());
        // } else {
        //     foreach($authy_user->errors() as $field => $message) {
        //         printf("$field = $message\n");
        //     }
        // }

    //     $authy = new \Authy\AuthyApi(getenv("AUTHY_SECRET"));
    //     $authyUser = $authy->registerUser(
    //         'wfatima203@gmail.com', '01789040491', '880',
    //         true
    //     );
    
    //     if ($authyUser->ok()) {
    //         $authy_id = $authyUser->id();
    //         echo $authy_id;
    //     } else {
    //         $errors = [];
    //         foreach ($authyUser->errors() as $field => $value) {
    //             array_push($errors, $field.": ". $value);
    //         }
            
    //     }
    // }

    function storeUser(Request $request)
    {
        $authy_api = new AuthyApi(getenv("AUTHY_SECRET"));
        $user = $authy_api->registerUser($request['email'], $request['phone'], $request['country_code']);
       

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed',
            'phone' => 'required',
            'photo' => 'required'
        ]);

        //  if($user->ok()) {
        //     printf($user->id());
        // } else {
        //     foreach($user->errors() as $field => $message) {
        //         printf("$field = $message\n");
        //     }
        // }

        $lastId = User::insertGetId([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone,
            'photo' => $request->photo,
            'authy_id' => $user->id()

        ]);

        if ($request->hasFile('photo')) {
            $photo = $request->photo;
            $photoName = $lastId . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->resize(2092, 1113)->save(base_path("public/assets/images/users/" . $photoName), 100);
            User::findOrFail($lastId)->update([
                'photo' => $photoName,
            ]);
        }


        return back()->with('greenStatus', 'Saved👍');
    }

    //Edit User 


    function editUser($id)
    {
        $user = User::findOrFail($id);
        return view('dashboard/editUser', compact('user'));
    }

    function updateUser(Request $request)
    {
        User::find($request->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone
        ]);

        if ($request->hasFile('photo')) {
            $image_name = User::find($request->id)->photo;
            $photo = $request->photo ; 
            $update_image = $request->id . '.' . $photo->getClientOriginalExtension();
            unlink(base_path("public/assets/images/users/" . $image_name));
          
            User::find($request->id)->update([
                'photo' => $update_image
            ]);
        
            Image::make($request->photo)->resize(945, 945)->save(base_path("public/assets/images/users/" . $update_image), 100);
        }

        return back()->with('greenStatus', 'Updated👍');
    }

    // USER ROLES 

    function userRole($id)
    {
        $user = User::findOrFail($id);
        $modules = Modules::all();
        return view('dashboard/editUserRole', compact('user'),compact('modules'));
        
        
    }

    function updateUserRole(Request $request)
    {
         $modules = $request->input('module') ; 
        
        foreach ($modules as $module){
         Permission::insertGetId([
            'user_id' => $request->user_id,
            'module_id' => $module
        ]);
         }
        return back()->with('greenStatus', 'Updated User Role 👍');
       
    }

    //PHOTO GALLERY 

    function addPhoto()
    {
        $albumList = GalleryAlbum::all();
        return view('dashboard/addPhoto',compact('albumList'));
    }

    function storePhoto(Request $request)
    {
        $request->validate([
            'photo_name' => 'required',
            'photo_link' => 'required',
            'album_id' => 'required'
        ]);

        $lastId = GalleryPhoto::insertGetId([
            'photo_name' => $request->photo_name,
            'photo_link' => $request->photo_link,
            'album_id' => $request->album_id
        ]);

        if ($request->hasFile('photo_link')) {
            $photo = $request->photo_link;
            $photoName = $lastId . '.' . $photo->getClientOriginalExtension();
            Image::make($photo)->resize(2092, 1113)->save(base_path("public/assets/images/photoGallery/" . $photoName), 100);
            // Image::make($photo)->resize(20, 20)->save(base_path("public/frontEnd/img/" . $photoName), 100);
            GalleryPhoto::findOrFail($lastId)->update([
                'photo_link' => $photoName,
            ]);
        }

        return back()->with('greenStatus', 'Saved👍');
    }

    function storeAlbum(Request $request)
    {
        $request->validate([
            'album_name' => 'required'
        ]);

        $lastId =  GalleryAlbum::insertGetId([
            'album_name' => $request->album_name
        ]);

        // if ($request->hasFile('photo_link')) {
        //     $photo = $request->photo_link;
        //     $photoName = $lastId . '.' . $photo->getClientOriginalExtension();
        //     Image::make($photo)->resize(2092, 1113)->save(base_path("public/assets/images/photoGallery/" . $photoName), 100);
        //     // Image::make($photo)->resize(20, 20)->save(base_path("public/frontEnd/img/" . $photoName), 100);
        //     GalleryAlbum::findOrFail($lastId)->update([
        //         'photo_link' => $photoName,
        //     ]);
        // }

        return back()->with('greenStatus', 'Saved👍');
    }
    // Class Ends Here
}
