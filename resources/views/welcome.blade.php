<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book List</title>
    @vite('resources/css/app.css') </head>
<body>
    @include('partials.header') <div class="container mx-auto py-4">
        <h1>Books</h1>
        @include('partials.booklist', ['books' => $books]) </div>

    @include('partials.footer') </body>
</html>