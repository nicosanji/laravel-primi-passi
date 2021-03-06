<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <!-- Styles Css -->
    @include("style")
</head>

<body>
    <header>
        <h1>{{ $title }}</h1>
        <h2>{{ $subtitle }}</h2>
    </header>

    <main>

        <ul>
            @foreach ($linkList as $link)
                <li>
                    <a href="{{ route($link) }}">{{ $link }}</a>
                </li>
            @endforeach
        </ul>
        <img src="https://s29.postimg.cc/xqf5iv9kn/laravel_logo_white.png" alt="laravel-logo">
    </main>

</body>

</html>
