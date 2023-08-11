<?php
$consulta1=mysqli_query($conexion,"SELECT * FROM consulta");
while($list=mysqli_fetch_assoc($consulta1)){
    ?>
    <div>
        <ul>
            <li><?php echo $list["nombre"]?></li>
            <li><?php echo $list["apellido"]?></li>
            <li><?php echo $list["correo"]?></li>
            <li><?php echo $list["consulta"]?></li>
        </ul>
    </div>
<?php
}
?>