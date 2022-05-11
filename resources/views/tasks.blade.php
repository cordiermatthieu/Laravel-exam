<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task No. {{$tasks->id}}</title>

    <style>
        .btn{
            padding: 15px;
            background-color: lightgrey;
            border-radius: 90px;
            cursor: pointer;
            font-weight: 800;
        }
    </style>

    <?php use Carbon\Carbon; Carbon::setLocale('fr'); ?>
    <a href='/'> <- Accueil </a>
    
    <h2> Affichage de la tâche n°{{$tasks->id}} : {{$tasks->title}} </h2>

    <h3>Description:</h3>
    <div class="description"> {{$tasks->description}}</div>
    
    <h3> Le  {{$tasks->created_at->translatedFormat('j F Y');}} </h3>

    <a class='btn' href='/deletedTasks{{ $tasks->id }}'> Delete this task ! </a>
    

</head>
<body>
    
</body>
</html>
