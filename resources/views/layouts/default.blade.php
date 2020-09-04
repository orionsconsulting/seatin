<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header class="row">
        @include('includes.header')
    </header>

    <div id="main" class="row">
        <!-- sidebar content -->
        <div id="sidebar" class="col-md-4">
            @include('includes.navigation')
        </div>

        <!-- main content -->
        <div id="content" class="col-md-4">
            @yield('content')
        </div>

        <!-- social content -->
        <div id="content" class="col-md-4">
            @include('includes.social')
        </div>
    </div>
    <footer class="row">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
