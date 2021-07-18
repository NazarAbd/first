@extends('pages.header')
@section('title','details')

@section('content')
<div class="container text-center">
    <h3 class="mt-5 text-center"> Name  </h3>
    <div class="row p-4 justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">
                    <span class="float-left"> details</span>
                    <span class="float-right">status</span>
                </div>
                <div class="card-body text-left">
                    <span class="float-left" style="max-width: 70%;">  
                    
                    </span>
                    <span class="float-right badge mt-auto badge-warning">non-completed </span>
                </div>
            </div>
        </div>
    </div>
</div>      
@endsection
</body>
</html>