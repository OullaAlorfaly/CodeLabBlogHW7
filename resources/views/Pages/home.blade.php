@extends('layouts.master')
@section('home')
    active
@endsection
@section('title')
   Home
@endsection


@section('content')
<div class="container">
    <div class="row" style="padding-top:60px;">
        <div class="col-lg-8 col-md-offset-2">
            <h1 class="text-capitalize text-center">code the right way</h1>
            <h5 class="lead text-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ac pharetra lectus. Donec ac sem facilisis, pharetra tortor at, cursus libero. Nullam in nibh feugiat, sodales elit eget, feugiat enim. Nulla facilisi. Nulla facilisi. Curabitur eget interdum mi. Morbi ornare tellus vitae elit vehicula,</h5>
        </div>
    </div>
    <div class="row" style="padding-top:60px; padding-bottom:60px;">
         <div class="col-lg-offset-3">
                @each('pages.cards', [
                ["title"=>"Android","decp"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ac pharetra lectus.","img"=>"http://codelab.camp/android.png"],
                ["title"=>"IOS","decp"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ac pharetra lectus.","img"=>"http://codelab.camp/swift.png"],
                ["title"=>"Web","decp"=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ac pharetra lectus.","img"=>"http://codelab.camp/laravel.png"],
            ],'key' )
        </div>
    </div>
</div>

@endsection