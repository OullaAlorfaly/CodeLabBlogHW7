<!doctype html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <meta name="viewport">
    <title>Code Lab @yield('title')</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script
            src="http://code.jquery.com/jquery-3.2.1.min.js"
            integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand"><img src="http://codelab.camp/logo.jpg" class="img-responsive" style="width:40px; margin-top:-10px;" ></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="@yield('home')"><a href="/">Home<span class="sr-only">(current)</span></a></li>
                <li class="@yield('about')"><a href="/about">About</a></li>
                <li class="@yield('videos')"><a href="/videos">Videos</a></li>
                <li class="@yield('contact')"><a href="/contact">Contacts Us</a></li>
                <li class="@yield('sponsors')"><a href="/sponsors">Sponsors</a></li>
                <li class="@yield('blogs')"><a href="/get_blogs">Blogs</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="@yield('signin')"><a href="/signin">Sign In</a></li>
                        <li class="@yield('signout')"><a href="/signout">Sign Out</a></li>

                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<br/><br/>

@yield('content')

<div class="row" style="margin:0px; padding-top:60px; padding-bottom:60px; background-image:url('http://codelab.camp/ninja.png'); background-repeat:no-repeat; background-position:95% 0%; background-size:contain; background-color:#e1696a; color:#FFF;">
    <div class="col-md-8 col-md-offset-1 col-sm-8">
        <h1>Be Ninja, Start With Us</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc ac pharetra lectus. Donec ac sem facilisis, pharetra tortor at, cursus libero. Nullam in nibh feugiat, sodales elit eget, feugiat enim. Nulla facilisi. Nulla facilisi. Curabitur eget interdum mi. Morbi ornare tellus vitae elit vehicula,</p>
        <button class="btn btn-default" style="background-color:#fff; color:#000;">Watch Now! </button>
    </div>
</div>


</body>
