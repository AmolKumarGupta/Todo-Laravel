<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name='viewport' content='width=device-width initial-scale=1.0'>
  <meta name="description" content="todo app to remember things">
  <meta name="theme-color" content="#eee">

  <title>Todo App</title>
  <link rel="stylesheet" href="{{secure_asset('css/style.css')}}">
</head>
<body class="">
  <nav >
      <h1>ToDo</h1>
        <ul>
          <li><a href="{{ url('todo') }}" >Home</a></li>
          <li><a href="{{ url('todo/create') }}"><button class="edit btn-create">Create</button></a></li>
        </ul>
  </nav>
  @yield('main')
</body>
</html>
