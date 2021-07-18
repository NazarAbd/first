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
                        <div class="table-responsive-md table-sm table-hover">
                           <table class="table">
                            <thead>
                              <tr>
                                <th scope="col" style="width:80%;">Name</th>
                                <th colspan="3"> Operations </th>
                            </thead>
                            <tbody>
                                @for ($i = 0; $i < 10; $i++)
                                    
                              <tr class="changes">
                                <td style="width:80%;"> sbdkasdkjaskjasdbadjkabsdkjb</td>
                                <td><a href="#"><i class="fa fa-eye"></i></a></td>
                                <td><a href="#"><i class="fa fa-edit"></i></a></td>
                                <td><a href="#"><i class="fa fa-trash"></i></a></td>
                              </tr>
                              @endfor

                            </tbody>
                          </table>
                          <div>

                          <a href="/create" class="float-right text-center rounded-circle mr-4">
                               <i class="fa fa-plus"></i>
                          </a>
                          </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
        @endsection
    </body>
</html>
