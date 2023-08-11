<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="yo.css">
    <title>Document</title>
</head>
<body>
    <h1>Registre el libro</h1>
    <form action="insertar.php" method="POST">
        <div>
            <div>
                <label>Nombre autor</label>
                <input type="text" name="n_autor" placeholder= "Ingrese nombre autor"required>
            </div>

            <div>
                <label>Categoria libro</label>
                <input type="text" name="categoria" placeholder="Ingrese categoria"required>
            </div>

            <div>
                <label>Nombre libro</label>
                <input type="text" name="n_libro" placeholder="Ingrese nombre libro">
            </div>

            <div>
                <label>Stock</label>
                <input type="text" name="stock" placeholder="Ingrese stock">
            </div>
            
            <div>
                <button type="sumbit" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Enviar</button>
            </div>
        </div>
    </form> 
</body>
</html>