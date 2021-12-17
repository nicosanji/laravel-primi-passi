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
        <p>{{ $text }}</p>
        <a href="/">
            <h3>{{ $homeLink }}</h3>
        </a>
    </main>
</body>

</html>
