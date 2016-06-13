<?php
include ("../Conexion/Conexion.php");
$conn=Conectarse();
$sql="SELECT * FROM subrubros s, rubros r  WHERE s.idrubro=r.rubro ;";
$sub = $rs->get_object($sql);

$options="";
if ($_POST["elegido"]==1) {
$options= ?>
<?php
foreach($sub as $valor){ ?>
<option value="<?php echo $valor->id ?>"><?php echo $valor->titulo ?></option>
<?php
}}?>
<?php
}

echo $options;



?>