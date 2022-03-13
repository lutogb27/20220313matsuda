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
      <div class="todo">
        <form action="/todo/create" method="POST"class="white">
          @csrf
          <input type="text" class="form-add" value=" ">
          <input class="button-add" type="submit" value="追加">
        </form>
        <table>
          <tbody>
            <tr>
              <th>作成日</th>
              <th>タスク名</th>
              <th>更新</th>
              <th>削除</th>
            </tr>
            <form action="https://intense-reef-81125.herokuapp.com/todo/update?id=1494" method="post"></form>
            <td>
              <input type="text" class="input-update" value="aa" name="content">
            </td>
            <td>
              <form action="/todo/update" method="POST"class="white-up">
              <button class="button-update">更新</button>
              </form>
            </td>
            <td>
              <form action="/todo/delete" method="POST"class="white-de">
              <button class="button-delete">削除</button>
              </form>
            </td>
          </tbody> 
        </table>
      </div>
    </div>
  </div>
</body>
</html>