@extends('pages.header')
@section('title','Create Todo')
@section('content')
<div class="container text-center">
    <div class="row p-4 justify-content-center">
        <div class="col-md-7">
            <div class="card mt-5">
                <div class="card-header">
                <h3 class="text-center"> New Todo  </h3>
                </div>
                <div class="card-body">
                    <form action="#" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter Todo Name" name="title">
                        </div>
                        <div class="form-group">
                        <textarea class="form-control" rows="3" aria-placeholder="Ent" name="desc">

                        </textarea>
                        </div>
                        <div class="form-froup">
                            <button type="submit" class="btn btn-success" style="width:40%;">
                                Create
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
