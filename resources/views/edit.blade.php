<!doctype html>
<html lang="en">
  <head>
    <title>
    </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-3 py-5 "style="font-family:'Times New Roman', Times, serif;"">
    <h1 class="h3 mb-2 text-center">Create To Do List </h1>
    <div class="card mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Create ToDo list
            <a  class =" btn btn-primary ml-5" href="{{ route('todos.index') }}">List </a>
            </h6>
        </div>
        <div class="card-body">
            <form action="" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label> User Name</label>
                    <input type="text" name="username" placeholder="Enter User Name" class="form-control" value="{{old('username',$todos->username)}}">
                  @include('includes.form_error_msg',['field'=>'username'])
                </div>
                <div class="form-group">
                    <label> Title</label>
                    <input type="text" name="title"  class="form-control" placeholder="Enter Title" value="{{old('title',$todos->title)}}">
                    @include('includes.form_error_msg',['field'=>'title'])
                </div>

                <div class="form-group">
                    <label>Description</label>
                   <textarea name="description" id="" cols="5" rows="5" placeholder="Enter Description" class="form-control">value="{{old('title',$todos->description)}}</textarea>
                    @include('includes.form_error_msg',['field'=>'description'])
                </div>


                <div class="form-group">
                  <input type="submit" value="Craete" class="btn btn-success">
                  <a href="{{ route('todos.index') }}" class="btn btn-danger">Cancel</a>
                </div>
            </form>
            </div>
        </div>

    </div>

</body>
</html>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
