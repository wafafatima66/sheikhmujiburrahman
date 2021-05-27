{{-- @extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
</div>
@endif

You are logged in!
<textarea name="" id="" cols="30" rows="10"></textarea>
</div>
</div>
</div>
</div>
</div>
@endsection --}}


<style>
    .report-col {
        background-color: #fff;
        border-radius: 10px;
        padding: 32px;
        height: 100%;
        margin: 10px;
    }

    .report-col i {
        color: #536DFE;
        font-size: 45px;
    }

    .report-col .counter {
        font-size: 45px;
    }

</style>

@extends('layouts.dashboard.frontEndApp')






@section('pageHeading')
DashBoard
@endsection

@section('content')



<div class="container" style="width: 100%">



    <div class="row">
        <div class="col-lg-4 report-col">
            <a href="{{route('articleList')}}">
                <div class="row">

                    <div class="col-lg text-center mt-4 ">
                        <i class="fas fa-newspaper fa-4x "></i>
                    </div>


                    <div class="col-lg ml-0 pl-0">
                        <h6 class=" text-muted mb-3">Total Article</h6>
                        <h2 class="counter mb-0" data-target="">{{ $articleCount }}</h2>
                    </div>

                </div>
            </a>
        </div>

        <div class="col-lg-4 report-col">
            <a href="{{route('allusers')}}">
                <div class="row">

                    <div class="col-lg text-center mt-4 ">
                        <i class="fas fa-users fa-4xx "></i>
                    </div>


                    <div class="col-lg ml-0 pl-0">
                        <h6 class=" text-muted mb-3">Total User</h6>
                        <h2 class="counter mb-0" data-target="">{{ $userCount }}</h2>
                    </div>

                </div>

            </a>
        </div>


    </div>
</div>






@endsection
