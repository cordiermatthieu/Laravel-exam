<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tâche supprimée</title>

    <style>
        .btn{
            padding: 15px;
            background-color: lightgrey;
            border-radius: 90px;
            cursor: pointer;
            font-weight: 800;
        }
    </style>
</head>
<body>
    

    <h2> tâche n°{{$deletedTasks->id}} : {{$deletedTasks->title}} supprimée</h2>

    <a href='/'> Accueil </a>


</body>
</html>



