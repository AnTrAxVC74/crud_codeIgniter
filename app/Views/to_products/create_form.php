<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>New register</title>
</head>
<body>
    <h1><center>Form to create</center></h1>
    <div class="container">
        <form method="post" action="<?=base_url('add_product')?>" enctype="multipart/form-data">
            
            <div class="form-group">
                <label for="nombre">Name:</label>
                <input id="nombre" class="form-control" type="text" name="nombre">
            </div>
            <div class="form-group">
                <label for="descripcion">Description:</label>
                <input id="descripcion" class="form-control" type="text" name="descripcion">
            </div>
            <div class="form-group">
                <label for="imagen">Image:</label>
                <input id="imagen" class="form-control" type="file" name="imagen">
            </div>
            <div class="form-group">
                <input class="btn btn-success" type="submit" value="Save">
            </div>
            
        </form>
    </div>
    
</body>
</html>