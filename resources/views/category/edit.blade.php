<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title> Show the form for editing the specified category.</title>
  </head>
  <body>
    <div class="container">
        
        <div class="row">

            <div class="col-6 offset-3 pt-5">
                <div class="text-center">
                    <a href="{{ URL::to('/category') }}" class="btn btn-success">Display all category</a>
                </div>
                <h1 class="d-flex justify-content-center">Category Edit Form</h1>
                @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <!-- {{$category}}
                {{gettype($category)}} -->
                <form action="{{ route('category.update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{$category->id}}" />    
                    <div class="mb-3">
                        <label for="cat_name" class="form-label">Category Name</label>
                        <input autofocus type="text" name="cat_name" value="{{$category->category_name}}" class="form-control" id="cat_name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="cat_desc" class="form-label">Category Description</label>
                        <textarea rows="10" id="cat_desc" name="cat_desc" class="form-control">{{$category->category_desc}}</textarea>
                    </div>                    
                    <button type="submit" class="btn btn-success">Update Category</button>
                </form>
            </div>
        </div>
        
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
    <script>
            CKEDITOR.replace( 'cat_desc' );
    </script>
</body>
</html>