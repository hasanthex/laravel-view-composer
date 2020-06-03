<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create New One</title>
</head>
<body>
    
    <form action="">
        <select name="" id="">
            @foreach($data as $dt)
                <option value=""> {{ $dt->name }} </option>
            @endforeach
        </select>
    </form>

</body>
</html>