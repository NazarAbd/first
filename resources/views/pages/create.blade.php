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
                  
                    <form action="/create" method="POST">
                        @csrf
                        <div class="form-group">
                            @error('title')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                            @enderror
                            <input type="text" class="form-control" placeholder="Enter Todo Name" 
                            name="title" value="{{old('title')}}">
                        </div>
                        <div class="form-group">
                            @error('desc')
                            <div class="alert alert-danger">
                                {{$message}}
                            </div>
                        @enderror
                        <textarea value="{{old('desc')}}" class="form-control" rows="3" aria-placeholder="Enter Todo Description" name="desc">

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
