<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{asset('css/reset.css')}}">
  <link rel="stylesheet" href="{{asset('css/default.css')}}">
  <title>@yield('title')</title>
</head>
<body>
  <div class="container">
    <div class="todo-list">
      <h1>Todo List</h1>
      @yield('content')
    </div>
  </div>
</body>
</html>