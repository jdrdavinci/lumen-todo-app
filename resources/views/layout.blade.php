<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('_css')

    <title>{{env('APP_TITLE')}} - @yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
        <a class="navbar-brand" href="/">{{env('APP_TITLE')}}</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="/">Dashboard</a>
            </div>
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="/task">Tasks</a>
            </div>
        </div>
    </nav>

    <main role="main" class="container">
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            <span class="text-muted">{{$app->version()}}</span>
        </div>
    </footer>

    @includeIf('_js')
</body>
</html>