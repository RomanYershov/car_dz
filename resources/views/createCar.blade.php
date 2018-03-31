@extends("layouts.app")
@section("content")
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Car
                </div>

                <div class="panel-body">

                    <form action="/cars" method="POST" class="form-horizontal" enctype="multipart/form-data">
                        {{ csrf_field() }}


                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Model</label>
                            <div class="col-sm-6">
                                <input type="text" name="model" id="task-name" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Color</label>
                            <div class="col-sm-6">
                                <input type="text" name="color" id="task-name" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Issue Date</label>
                            <div class="col-sm-6">
                                <input type="text" name="issueDate" id="task-name" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="task-name" class="col-sm-3 control-label">Image</label>
                            <div class="col-sm-6">
                                <input type="file" name="image" id="task-name" class="form-control" >
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add Car
                                </button>
                            </div>
                        </div>
                        @if($errors->any())
                        <div class="alert alert-danger">
                        <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                        </ul>
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>



@endsection