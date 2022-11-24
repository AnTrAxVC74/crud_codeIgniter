<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Edit register</title>
</head>
<body>
<center><h1>Edit Form</h1></center>
    <div class="container">
        <form method="post" action="<?=base_url('update_product')?>" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$product['id']?>">
            
            <div class="form-group">
                <label for="nombre">Name:</label>
                <input id="nombre" value="<?=$product['nombre']?>" class="form-control" type="text" name="nombre">
            </div>
            <div class="form-group">
                <label for="descripcion">Description:</label>
                <input id="descripcion" value="<?=$product['descripcion']?>" class="form-control" type="text" name="descripcion">
            </div>
            <div class="form-group">
                <label for="imagen">Image:</label>
                <img class="img-thumbnail" src="<?=base_url()?>/uploads/<?=$product['imagen'];?>" width="100" alt="">
                <input id="imagen" class="form-control" type="file" name="imagen">
            </div>
            <div class="form-group">
                <input class="btn btn-success" type="submit" value="Save">
            </div>
            
        </form>
    </div>

</body>
</html>