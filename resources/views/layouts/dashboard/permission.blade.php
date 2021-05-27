@extends('layouts.dashboard.frontEndApp')

@section('permission')
    

    @php
     $permissions = App\Permission::where('user_id', Auth::user()->id)->get();

$modules = [];

foreach($permissions as $permission){
    
    $modules[] = $permission->module_id;
}

$modules = array_unique($modules);

$admin = 2 ;  //admin here is user-id number 2 
$dashboardLink = 1 ; $articleLink = 2 ; $themeLink = 3 ; //mentioning menu ids statically , but refer to the database for the id ,    
    @endphp
@endsection



