<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prenon</th>
            <th scope="col">Matricule</th>
            <th scope="col">Email</th>
            <th scope="col">Matiere</th>
            <th scope="col">Typesdevoir</th>
            <th scope="col">Notes</th>
            <th scope="col">action </th>

          </tr>
        </thead>
        <tbody>
            @foreach ($apprenants as $note)
         
          <tr>
            <td>{{ $note->apprenant->nom }}</td>
            <td>{{ $note->apprenant->prenom }}</td>
            <td>{{ $note->apprenant->matricule }}</td>
            <td>{{ $note->apprenant->email }}</td>
            <td>{{ $note->matier->nom }}</td>
            <td>{{ $note->typeDevoir->nom }}</td>
            <td>{{ $note->Valeur }}</td>
            
            <td>{{$note->Valeur}}</td>
            <td></td>
          </tr>
        @endforeach
        </tbody>
      </table>
</body>
</html>