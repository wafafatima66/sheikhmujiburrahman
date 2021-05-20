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


@extends('layouts.dashboard.frontEndApp')



<style>
.report-col{
    box-shadow: 0 1px 1px rgba(0,0,0,0.11), 
          0 2px 2px rgba(0,0,0,0.11), 
          0 4px 4px rgba(0,0,0,0.11), 
          0 6px 6px rgba(0,0,0,0.11);
    margin: 20px;
    background-color: #fff;
    border-radius: 10px;
}
.report-col i {
    color: lightskyblue;
    margin-bottom: 5px;
}
.report-col  .counter {
	font-size: 45px;
	margin: 10px 0;
}

</style>

@section('pageHeading')
DashBoard
@endsection

@section('content')

<div class="container" style="width: 60%">

    <div class="row">
        <div class="col-lg-4 report-col">

                    <div class="text-center">
                        <i class="fas fa-newspaper fa-4x mt-3"></i>
                        <div class="counter" data-target="{{ $articleCount }}">0</div>
                        <h3 class="mb-3">Total Article</h3>
                    </div>
                
        </div>

         <div class="col-lg-4 report-col">
            <div class="text-center">
                <i class="fas fa-users fa-4x mt-3"></i>
                <div class="counter" data-target="{{ $userCount }}">0</div>
                <h3 class="mb-3">Total User</h3>
            </div>
        </div>
    </div>
</div>



<script>
 const counters = document.querySelectorAll('.counter');
const speed = 5; // The lower the slower

counters.forEach(counter => {
	const updateCount = () => {
		const target = +counter.getAttribute('data-target');
		const count = +counter.innerText;

		// Lower inc to slow and higher to slow
		const inc = target / speed;

		// console.log(inc);
		// console.log(count);

		// Check if target is reached
		if (count < target) {
			// Add inc to count and output in counter
			counter.innerText = count + inc;
			// Call function every ms
			setTimeout(updateCount, 1);
		} else {
			counter.innerText = target;
		}
	};

	updateCount();
});
</script>
@endsection
