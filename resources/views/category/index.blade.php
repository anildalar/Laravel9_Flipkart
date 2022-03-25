@extends('layouts.master')

@section('content')
    <div class="text-center">
        <a href="{{ URL::to('/category/create') }}" class="btn btn-success">Create new category</a>
    </div>
    
    <h1 class="text-center">Display a listing of the category.</h1>
    

    {{$message}}
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Category Name</th>
                <th scope="col">Category Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach($dt as $d)
                
                <tr>
                    <td scope="row">{{$d->id}} </td>
                    <td>{{$d->category_name}}</td>
                    <td>{{$d->category_desc}}</td>
                    <td>
                        <a href="{{ URL::to('/category/show/'.$d->id) }}" class="btn btn-success btn-sm">View</a>
                        <a href="{{ URL::to('/category/edit/'.$d->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="{{ URL::to('/category/destroy/'.$d->id) }}" class="btn btn-danger a_delete btn-sm">Delete</a>
                    </td>
                </tr>    
            @endforeach
        </tbody>
    </table>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>

        let btn = document.querySelectorAll('a.a_delete');

        function display(e) {
            var d = confirm('Are you sure you want to delete this record?');

            console.log(d);
            if(d === true){
                return true;
            }else{
                e.preventDefault();
                return false;    
            }
        }
        btn.forEach(function(currentValue, index, arr){
            console.log(currentValue);
            currentValue.addEventListener('click',display);
        })
        //btn.addEventListener('click',display);

    </script>
@endsection