<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">    <title>List of Products</title>
</head>
<body>
    <center><h1>List of products</h1></center>
    <div class="container">
        <a href="<?=base_url('new_product')?>" class="btn btn-primary" type="button">Add Product</a></br></br>
            <table class="table table-light">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($products as $product){?>
                        <tr>
                            <td><?php echo $product['id']?></td>
                            <td><?php echo $product['nombre']?></td>
                            <td><?php echo $product['descripcion']?></td>
                            <td>
                                <img class="img-thumbnail" src="<?=base_url()?>/uploads/<?=$product['imagen'];?>" width="100" alt="">
                            </td>
                            <td>
                                <a href="<?=base_url('edit_product/'.$product['id']);?>" class="btn btn-info" type="button">Editar</a> / 
                                <a href="<?=base_url('delete_product/'.$product['id']);?>" class="btn btn-danger" type="button">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
    </div>
</body>
</html>