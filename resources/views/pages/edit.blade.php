@extends('pages.header')
@section('title','Edit Todo')
@section('content')
<div class="container ">
    <div class="row p-4 justify-content-center">
        <div class="col-md-7">
            <div class="card mt-5">
                <div class="card-header">
                <h3 class="text-center"> Edit Todo  </h3>
                </div>
                <div class="card-body">
                    <form action="#" method="POST">
                        @csrf
                        Name :
                        <div class="form-group">
                             @error('title')
                                <div class="alert alert-danger">
                                    {{$message}}
                                </div>
                            @enderror
                            <input type="text" class="form-control" placeholder="Enter Todo Name" value="{{$todo -> name}}" name="title">
                        </div>
                        Descrption:
                        <div class="form-group">
                        <textarea class="form-control" rows="3" name="desc">
                           {{$todo -> desc}}
                        </textarea>
                        </div>
                        <div class="form-froup text-center">
                            <button  type="submit" class="btn btn-success" style="width:40%;">
                                Update
                            </button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
