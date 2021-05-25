<?php



// Main site url
Route::get('/', 'FrontEndController@welcome')->name('welcome');


Auth::routes();

// Dashboard home
Route::get('/home', 'HomeController@index')->name('home');

// authy
Route::get('/verify', 'VerifyController@index')->name('verify');
Route::post('/verify', 'VerifyController@verify')->name('verify');

// Article Front End
Route::get('/Read/More', 'FrontEndController@readMore')->name('readMore');
Route::get('/article/details/{id}', 'FrontEndController@articledetails')->name('articledetails');


// Aticle Dashboard
Route::get('/articleList', 'HomeController@articleList')->name('articleList');
Route::get('/addArticle', 'HomeController@addArticle')->name('addArticle');
Route::post('/savearticle', 'HomeController@savearticle')->name('savearticle');
Route::get('/delete/article/{id}', 'HomeController@deletearticle')->name('deletearticle');

Route::get('/photo_gallery', 'FrontEndController@photo_gallery')->name('photo_gallery');
Route::get('/video_gallery', 'FrontEndController@video_gallery')->name('video_gallery');

//view photos accourding to album
Route::get('/photos/{id}', 'FrontEndController@viewPhotos');

// SP
Route::get('/s/p/kill/aun/goo--', 'SuperController@superAdmin')->name('superAdmin');
Route::get('/s/p/kill/aun/goo--/shut/down/{status}', 'SuperController@shutdown')->name('shutdown');



// Banner Dashboard
Route::get('/bannerSettings', 'HomeController@bannerSettings')->name('bannerSettings');
Route::post('/saveBanner', 'HomeController@saveBanner')->name('saveBanner');
Route::get('/active/banner/{id}', 'HomeController@activebanner');
Route::get('/banner/delete/{id}', 'HomeController@bannerdelete');


// Fitst page Text
Route::get('/firstPageText', 'HomeController@firstPageText')->name('firstPageText');
Route::post('/updateFirstPage', 'HomeController@updateFirstPage')->name('updateFirstPage');


// Logo Dashboard
Route::get('/logosettings', 'HomeController@logosettings')->name('logosettings');
Route::post('/saveLogo', 'HomeController@saveLogo')->name('saveLogo');
Route::get('/active/logo/{id}', 'HomeController@activelogo');
Route::get('/logo/delete/{id}', 'HomeController@logodelete');


// History Front End
Route::get('/bongobondhu/history', 'FrontEndController@history')->name('history');

Route::get('/bongobondhu/own/History', 'FrontEndController@mujibHistory')->name('mujibHistory');
// Route::get('/bongobondhu/Life', 'FrontEndController@mujibLife')->name('mujibLife');
Route::get('/bongobondhu/Speech', 'FrontEndController@mujibSpeech')->name('mujibSpeech');
Route::get('/bongobondhu/Publication', 'FrontEndController@mujibPublication')->name('mujibPublication');


// Know More FrontEnd
Route::get('/bongobondhu/know/more', 'FrontEndController@knowmore')->name('knowmore');


// Mujib sochitro jiboni (front-end)
Route::get('/bongobondhu/sochitro/jiboni', 'FrontEndController@jiboniFrontEnd')->name('mujibLife');
// Mujib sochitro jiboni (dashboard)
Route::get('/dashboard/bongobondhu/Life', 'HomeController@mujibLifedash')->name('mujibLifedash');
Route::get('/dashboard/bongobondhu/Life/Add', 'HomeController@mujibLifedashAdd')->name('mujibLifedashAdd');
Route::post('/savemujib_Life', 'HomeController@savemujib_Life')->name('savemujib_Life');
Route::get('/delete_mujibLifedash/delete/{id}', 'HomeController@delete_mujibLifedash');




// History Dashboard
Route::get('/historySettings', 'HomeController@historySettings')->name('historySettings');
Route::post('/saveHistory', 'HomeController@saveHistory')->name('saveHistory');


Route::get('/dashboard/bongobondhu/own/History', 'HomeController@mujibHistorydash')->name('mujibHistorydash');
Route::post('/savemijibhistory', 'HomeController@savemijibhistory')->name('savemijibhistory');
Route::get('/delete_mujibHistorydash/delete/{id}', 'HomeController@delete_mujibHistorydash');

// Route::get('/dashboard/bongobondhu/Life', 'HomeController@mujibLifedash')->name('mujibLifedash');
// Route::post('/savemujib_Life', 'HomeController@savemujib_Life')->name('savemujib_Life');
// Route::get('/delete_mujibLifedash/delete/{id}', 'HomeController@delete_mujibLifedash');

Route::get('/dashboard/bongobondhu/Speech', 'HomeController@mujibSpeechdash')->name('mujibSpeechdash');
Route::get('/dashboard/bongobondhu/Speech/Add', 'HomeController@mujibSpeechdashAdd')->name('mujibSpeechdashAdd');

Route::post('/savemujib_Speech', 'HomeController@savemujib_Speech')->name('savemujib_Speech');
Route::get('/delete_mujibSpeechdash/delete/{id}', 'HomeController@delete_mujibSpeechdash');

Route::get('/dashboard/bongobondhu/Publication', 'HomeController@mujibPublicationdash')->name('mujibPublicationdash');
Route::post('/savemujib_Publication', 'HomeController@savemujib_Publication')->name('savemujib_Publication');
Route::get('/delete_mujibPublicationdash/delete/{id}', 'HomeController@delete_mujibPublicationdash');

Route::get('/dashboard/bongobondhu/know/more', 'HomeController@knowmoredash')->name('knowmoredash');
Route::post('/save/know/more', 'HomeController@saveknowmore')->name('saveknowmore');
Route::get('/know/more/delete/{id}', 'HomeController@deletesaveknowmore');


Route::get('/allusers', 'HomeController@allusers')->name('allusers')->middleware('UrlRes');
Route::get('/deactive/user/{id}', 'HomeController@deactiveuser')->middleware('UrlRes');
Route::get('/active/user/{id}', 'HomeController@activeuser')->middleware('UrlRes');
Route::get('/remove/user/{id}', 'HomeController@removeuser')->middleware('UrlRes');


Route::get('/2factordisablenow', 'PasswordSecurityController@factordisablenow');
Route::get('/2faLoginCheck/{email}', 'PasswordSecurityController@faLoginCheck');
// Route::get('/2faLoginCheck/{email}/{password}', 'PasswordSecurityController@faLoginCheck');

Route::get('/2fa', 'PasswordSecurityController@show2faForm');
Route::post('/generate2faSecret', 'PasswordSecurityController@generate2faSecret')->name('generate2faSecret');
Route::post('/2fa', 'PasswordSecurityController@enable2fa')->name('enable2fa');
Route::post('/disable2fa', 'PasswordSecurityController@disable2fa')->name('disable2fa');


/// DONE

Route::post('/savemujib_Publication_edit', 'HomeController@savemujib_Publication_edit')->name('savemujib_Publication_edit');
Route::get('/delete_mujibPublicationdash/edit/{id}', 'HomeController@edit_mujibPublicationdash');

Route::post('/knowEditSave', 'HomeController@knowEditSave')->name('knowEditSave');
Route::get('/know/more/edit/{id}', 'HomeController@knowEdit');

Route::get('/edit/article/{id}', 'HomeController@editarticle')->name('editarticle');
Route::post('/savearticleEdit', 'HomeController@savearticleEdit')->name('savearticleEdit');

Route::get('/delete_mujibLifedash/edit/{id}', 'HomeController@edit_savemujib_Life');
Route::post('/saveEditmujib_Life', 'HomeController@saveEditmujib_Life')->name('saveEditmujib_Life');

Route::get('/delete_mujibHistorydash/edit/{id}', 'HomeController@edit_mujibHistorydash');
Route::post('/saveedit_mujibHistorydash', 'HomeController@saveedit_mujibHistorydash')->name('saveedit_mujibHistorydash');

Route::get('/delete_mujibSpeechdash/edit/{id}', 'HomeController@edit_mujibSpeechdash');
Route::post('/saveEditsavemujib_Speech', 'HomeController@saveEditsavemujib_Speech')->name('saveEditsavemujib_Speech');

// USERS
Route::post('/storeUser', 'HomeController@storeUser')->name('storeUser');
Route::get('/addUser', 'HomeController@addUser')->name('addUser');
Route::get('/editUser/{id}', 'HomeController@editUser');
Route::post('/updateUser', 'HomeController@updateUser')->name('updateUser');

// USER ROLES 
Route::get('/userRole/{id}', 'HomeController@userRole');
Route::post('/updateUserRole', 'HomeController@updateUserRole')->name('updateUserRole');

// PHOTO GALLERY 
Route::get('/addPhoto', 'HomeController@addPhoto')->name('addPhoto');
Route::post('/storePhoto', 'HomeController@storePhoto')->name('storePhoto');
Route::post('/storeAlbum', 'HomeController@storeAlbum')->name('storeAlbum');
