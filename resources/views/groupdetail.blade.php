<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test Technique</title>
    </head>
    <body class="antialiased">    
      @foreach($group->$utilisateur as $utilisateur)
        <span>{{ $utilisateur->nomaffichage }}</span>
      @endforeach  


         </body>   
</html>