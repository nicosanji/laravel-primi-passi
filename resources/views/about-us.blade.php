<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ $title }}</title>

    <!-- Styles Css -->
    <style>
        body {
            text-align: center;
        }

        a {
            text-decoration: none;
            color: crimson;
        }
        img {
          max-width: 50vh;
        }

    </style>
</head>

<body>
    <header>
        <h1>{{ $title }}</h1>
        <h2>{{ $subtitle }}</h2>
    </header>

    <main>
        <img src="https://coursereport-s3-production.global.ssl.fastly.net/uploads/school/logo/681/original/Pittogramma-RGB-1080-BLUE-circle.png"
            alt="boolean">
        <a href="/">
            <h3>{{ $homeLink }}</h3>
        </a>
    </main>
</body>

</html>
