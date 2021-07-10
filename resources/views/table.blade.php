<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Read</title>
    <style>
        table{
            margin: 0% auto;
        }
    </style>
</head>
<body>
<br><br>
   <table border="2">
       <caption>Student Data</caption>
       <thead>
       <th>Name</th>
       <th>Email</th>
       <th>Number</th>
       <th>Password</th>
       <th colspan="2">Action</th>
       </thead>
       <tbody>
       @foreach($forms as $value)
           <tr>
               <td>{{$value->Name}}</td>
               <td>{{$value->Email}}</td>
               <td>{{$value->number}}</td>
               <td>{{$value->Password}}</td>
               <td><a href="delete/{{$value->id}}">Delete</a></td>
               <td><a href="edit/{{$value->id}}">Edit</a></td>
           </tr>
       @endforeach
       </tbody>
       <a href="{{route('form')}}">ADD Record..</a>
   </table>
</body>
</html>
