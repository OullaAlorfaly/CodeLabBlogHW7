@extends('layouts.master')
@section('blogs')
    active
@endsection
@section('title')
    Blogs
@endsection



@section('content')
    <div class="container">
        <div class="row" style="padding-top:60px;">
            <div class="col-md-8 col-md-offset-2">

                <table class="table">
                   <tr>
                       <th class="text-center">ID</th>
                       <th class="text-center">TITLE</th>
                       <th class="text-center">CONTENT</th>
                       <th class="text-center">USER ID</th>
                       <th class="text-center">Action</th>
                   </tr>

                    @foreach($blog as $blogs)
                    <tr>
                        <td class="text-center">{{$blogs->id}}</td>
                        <td class="text-center">{{$blogs->title}}</td>
                        <td class="text-center">{{$blogs->content}}</td>
                        <td class="text-center">{{$blogs->user_id}}</td>
                        <td class="text-center">
                            <a class="btn btn-default" href='get_blogs/{{ $blogs->id }}'>Delete</a>
                            <a class="btn btn-default" href='get_blogs/edit/{{ $blogs->id }}'>Edit</a>
                        </td>

                    @endforeach
                    </tr>
                </table>
                {{$blog->links()}}
            </div>
        </div>

    </div>


@endsection