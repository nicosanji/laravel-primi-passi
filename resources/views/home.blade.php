<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{$title}}</title>

  <!-- Styles Css -->
  <style>
  ul {
    list-style: none;
    padding: 0 ;
  }
  li {
    display: inline-block;
    padding: 0 1rem;
    border: 1px solid black;
  }
  a {
    text-decoration: none;
  }
  </style>
</head>

<body>
  <header>
    <h1>{{$title}}</h1>
    <h2>{{$subtitle}}</h2>
    <h3>{{$text}}</h3>
  </header>
  <main>
    <ul>
      @foreach($navlinks as $link)
      <li>
        <a href="#">{{ $link }}</a>
      </li>
      @endforeach
    </ul>
  </main>

  <footer>
    <a href="about-us"><h3>{{$aboutUsLink}}<h3></a>
  </footer>

</body>

</html>
