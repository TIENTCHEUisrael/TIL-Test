<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client list</title>
</head>
<body>
    <form action="" method="post">
<div>
    <div class="ent">
        <h2>Client list</h2>       
    </div>
    @if ($list->count() > 0)
    <table class="table table-bordered" style="width: 1000px">
        <thead>
            <th>ID</th>
            <th>NOM</th>
            <th>VILLE</th>
            <th>TELEPHONE</th>
            <th>CREATED</th>
        </thead>
        <tbody>
            @foreach ($list as $r)
            <tr>
                <th>{{$r->id}}</th>
                <th>{{$r->nom}}</th>
                <th>{{$r->ville}}</th>
                <th>{{$r->telephone}}</th>
                <th>{{$r->createdAt}}</th>                
            </tr>
            @endforeach
        </tbody>
    </table>

    @endif

    <style>
        body{
            padding: 32px;
        }
        table{
            justify-self: center;
            margin-left: 32px;
            margin-right: 100px;
            margin-top:32px;
        }
        thead{
            background-color: black;
            color: white;

        }
        .ent{
            display: flex;
            flex-direction: row;
        }
        .tbn{
            margin-left: 43%;
        }
    </style>
</div>
</form>
</body>
</html>
