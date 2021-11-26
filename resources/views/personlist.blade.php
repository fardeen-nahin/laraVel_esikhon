<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Person List</title>
</head>
<body>
    <table>
        <tr>
            <td>ID</td>
            <td>Email</td>
            <td>Address</td>
        </tr>

        @foreach ($person_list as $person)
            <tr>
            <td>{{$person-> id}}</td>
            <td>{{$person-> email}}</td>
            <td>{{$person-> address}}</td> 
        </tr>
        @endforeach
    </table>
</body>
</html>