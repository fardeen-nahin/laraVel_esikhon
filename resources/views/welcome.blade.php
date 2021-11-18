<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
        @foreach ($person_list as $personList)
            
                <h2>{{$personList->name}}</h2>
                <h2>{{$personList->email}}</h2>
                <h2>{{$personList->address}}</h2>
            
        @endforeach
        
</body>
</html>