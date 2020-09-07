<!DOCTYPE html>
<html>
    <head>
        <title>@yield("title")</title>
    </head>
    <body>
        @include("partials/nav")
        @yield("content")
    </body>
</html>
