<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <div class="text-center">
            <a href="{{ URL::to('/category/create') }}" class="btn btn-success">Create new category</a>
        </div>
        
        <h1 class="text-center">Display the specified category.</h1>
        
        
        <!-- {{$category}}
        {{gettype($category)}} -->

        <div class="card">
            <h5 class="card-header">Featured</h5>
            <div class="card-body">
                <h6 class="card-title">{{$category->id}}</h6>
                <h5 class="card-title">{{$category->category_name}}</h5>
                <p class="card-text">{{$category->category_desc}}</p>
            </div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>