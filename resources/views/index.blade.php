<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
</head>
<body>
  <div class="container">
    <div class="card">
      <p class="title">Todo List</p>
      <div class="spape">
        <form action="/todo/create"method="POST"class="white">
          @csrf
          <input type="text" class="form-add" value=" " name="todo">
          <input class="button-add" type="submit" value="追加">
        </form>
        <table>
            <tr>
              <th>作成日</th>
              <th>タスク名</th>
              <th>更新</th>
              <th>削除</th>
            </tr>
            @foreach($todos as $todo)
          <tbody>  
            <td>
              <p class="test">{{$todo->created_at}}</p>
              <form action="/todo/update/{{$todo->id}}" method="POST">
              @csrf
            </td>
            <td>
              <input type="text" class="input-update" value="{{$todo->todo}}" name="todo">
            </td>
            <td>
              <button class="button-update">更新</button>
              </form>
            </td>
            <td>
              <form action="/todo/delete/{{$todo->id}}"  method="POST"class="white-de" name="todo">
              @csrf
              <button class="button-delete">削除</button>
              </form>
            </td>
          </tbody>
            @endforeach
        </table>
      </div>
    </div>
  </div>
</body>
</html>