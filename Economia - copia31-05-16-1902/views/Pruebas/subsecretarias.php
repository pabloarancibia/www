<?php include "../Conexion/Conexion.php";
$con=Conectarse();	
$sql="select * from dirgenerales where issec=".$_GET['id'];
$res=mysqli_query($con,$sql);
/*while ($fila=mysql_fetch_array($res)){echo $fila['nombre'];		}*/
	?>

DIR.GRAL:
<select name="dirgral" size=1 id="" >		
	<?php while ($fila=mysqli_fetch_array($res)){ ?>
	<option value="<?php echo $fila['dirgral']?>"><?php echo $fila['dirdetalle']?></option>
<?php }?>
</select>