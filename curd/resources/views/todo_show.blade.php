<!DOCTYPE html>
<html>
<head>
<style>
table {
  border-collapse: collapse;
  width: 50%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h2>Laravel CURD</h2>
<a href="todo_create">Add Record</a><br><br>
{{session('msg')}}
{{session('del')}}
<br>
<table>
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Creation</th>
    <th>Action</th>
</tr>
  @foreach ($todoArr as $todo)
  <tr>
    <td>{{ $todo->id}}</td>
    <td>{{ $todo->name}}</td>
    <td>{{ $todo->created_at}}</td>
    <td><a href="todo_delete/{{$todo->id}}">Delete</a>
        <a href="todo_edit/{{$todo->id}}">Edit</a></td>
</tr>   
  @endforeach

</table>

</body>
</html>


