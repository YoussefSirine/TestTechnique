<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <title>Import</title>
    </head>
    <body>
        <section style="padding-top:60px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <div class="card">
                        <div classs="card-header">
                            Import
                        </div>
                        <div class="card-body">
                            <form methode="POST" enctype="multipart/form-data" action="{{ route('utilisateur-import') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="file">choose CSV</label>
                                    <input type="file" name="file" class="form-control" />
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form> 
                        </div>
                    </div>
                </div>

            </div>

        </div>

        </section>

    </body>   
</html> 