<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test Technique</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
     
    <div class="container mt-3">
  <h2>Page Principale</h2>
  <h3><a href="{{route('excel')}}" >Importer des donnees a partir de CSV </a></h3>
  <p>Liste des utilisateurs avec groups qui correspond</p>
  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>Nom d'affichage</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
    @foreach($utilisateurs as $utilisateur)
      <tr>
        <td><a href="{{ route('detail', ['id' =>$utilisateur->id]) }}">{{$utilisateur->nomaffichage}}</a></td>
        <td>{{$utilisateur->addressemail}}</td>
        
      </tr>
    @endforeach  

    </tbody>
  </table>
  <h3>Liste des groupes</h3>
  <table class="table">
    <thead class="table-success">
      <tr>
        <th>Nom</th>
      </tr>
    </thead>
    <tbody>
    @foreach($groups as $group)
      <tr>
        <td><a href="{{ route('user', ['id' =>$group->id]) }}">{{$group->nom}}</a></td>
      </tr>
    @endforeach
    
    </tbody>
  </table>
</div>
    </body>
</html>
