<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  @include('layouts._header')

  @yield('content')

  @include('layouts._footer')
</body>

</html>