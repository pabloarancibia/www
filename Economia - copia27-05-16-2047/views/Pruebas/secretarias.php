<?php include "../Conexion/Conexion.php";
$con=Conectarse();	
$sql="select * from subsecretarias where isec=".$_GET['id'];
$res=mysqli_query($con,$sql);
/*while ($fila=mysql_fetch_array($res)){echo $fila['nombre'];}*/
?>

SUB-SECRETARIA:
<select name="subsecret" size=1 id="" 
onchange="from(document.form1.divsecret.value,'divsubsecret','../views/subsecretarias.php')">	
<?php while ($fila=mysqli_fetch_array($res)){ ?>
<option value="<?php echo $fila['subsec']?>">
<?php echo $fila['detsubsec']?></option>
<?php }?>
</select>	