@extends('layouts.app')

@section('content')
    <div class="container">

        <form action=" {{ route('admin.posts.store') }} " method="POST">
            @csrf
            <div class="form-group">
                <label for="title">titolo</label>
                <input type="text" class="form-control" id="title" placeholder="titolo" name="title">

                <label for="category">category</label>
                <select name="category_id" id="category">
                    <option value="">nessuna</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->label}}</option>
                    @endforeach
                </select>

                <label for="content">content</label>
                <textarea id="content" name="content" cols="30" rows="10"></textarea>

                <label for="title">image</label>
                <input type="url" class="form-control" id="image" placeholder="url" name="image">

                <button type="submit" class="btn btn-success">crea</button>
            </div>
        </form>
    </div>
@endsection
