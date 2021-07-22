        @extends('pages.header')
        @section('titel','Todo')
        @section('content')
        
        <div class="container text-center">
            <div class="row p-1 justify-content-center">
                <div class="col-md-7">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        <h3> My Todos List </h3>
                    </div>
                    <div class="card-body">

                      @if(session()->has('success'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session()->get('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                       
                      </div>

                      @endif


                      @if (session()->has('update'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session()->get('update')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                       
                      </div>
                      @endif
                        <div class="table-responsive-md table-sm table-hover">
                           <table class="table">
                           
                            <tbody>
                                @forelse($todos as $todo)

                              <tr class="">
                                <td class="pl-2" style="width:80%;"> {{ $todo -> name}}</td>
                                <td><a href="details/{{$todo -> id }}"><i class="fa fa-eye"></i></a></td>
                                <td><a href="edit/{{$todo -> id}}"><i class="fa fa-edit"></i></a></td>
                                <td><a href="destroy/{{$todo -> id }}"><i class="fa fa-trash"></i></a></td>
                              </tr>
                              @empty
                              
                                <p> No todos.</p>
                            
                              @endforelse

                            </tbody>
                          </table>
                          <div>
                            <a href="/create" title="Create Todo" class="float-right text-center rounded-circle mr-4" 
                            ><i  class="fa fa-plus"></i></a>
                          </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        @endsection
</html>
