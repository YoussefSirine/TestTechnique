<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test Technique</title>
    </head>
        <body class="antialiased">    
      @foreach($utilisateur->groups as $group)
        <span>{{ $group->nom }}</span>
      @endforeach  


         </body>   
</html>