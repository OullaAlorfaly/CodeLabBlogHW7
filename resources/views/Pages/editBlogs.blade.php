@extends('layouts.master')
@section('blogs')
    active
@endsection
@section('title')
    Edit Blogs
@endsection

@section('content')
    <div class="container">
        <div class="row" style="padding:60px; margin-top: 30px;">
            <div class="col-md-8 col-md-offset-2">
                @foreach($blog as $blogs)
                <form class="form-horizontal" method="post" action="/get_blogs/edit/{{$blogs->id}}" >
                    {{csrf_field()}}
                    <div class="form-group">
                        <label class="col-sm-2 control-label" style="text-align: left">Title</label>
                        <div class="col-sm-10">
                            <input type="text" name="title" class="form-control" value="{{$blogs->title}}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-2 control-label" style="text-align: left">Content</label>
                        <div class="col-sm-10">
                            <input type="text" name="blogContent" class="form-control"  value="{{$blogs->content}}">
                        </div>
                    </div>

                    @endforeach

                    <div class="form-group">
                        <label class="col-sm-2 control-label" style="text-align: left">User ID</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="user">
                                @foreach($user as $users)
                                    @if($blogs->user_id == $users->id)
                                        <option value="{{ $users->id }}" selected > {{ $users->name }}</option>
                                    @else
                                        <option value="{{ $users->id }}" > {{ $users->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Save</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection