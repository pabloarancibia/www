<?php
echo "prueba";
if (!function_exists('Conectarse')) {
include "../Conexion/Conexion.php";
}
$conexion=Conectarse();

$NroSol=$_POST["NroSol"];
//echo $NroSol;
//echo json_encode(array("nombres"=>$cuit, "domicilio"=>"dom"));

///$query = "SELECT * FROM proveedores WHERE txt_nro_solicitud = '$NroSol'";
///$datosProv = mysqli_query($conexion, $query) or die(mysql_error());

///if (mysqli_num_rows($datosProv)!=0){
///  while ($registro = mysqli_fetch_array($datosProv)) {

    //$cuit = $registro['cuit'];

///    $nombres = $registro['nombres'];
  /*  $domicilio = $registro['domicilio'];
  $conv_multi = $registro['conv_multi'];
  $email = $registro['email'];
    $localidad = strtoupper($registro['localidad']);
    $tel = $registro['tel'];
    $cp = $registro['cp'];
    $entidad = strtoupper($registro['entidad']);
    $dtos_filiat = strtoupper($registro['dtos_filiat']);
    $ap_pat = strtoupper($registro['ap_pat']);
    $ap_mat = $registro['ap_mat'];
    $ap_interesado = $registro['ap_interesado'];//
    $nom_interesado = $registro['nom_interesado'];//
    $dni_int = $registro['dni_int'];
    $est_civil_int = $registro['est_civil_int'];
    $domicilio_int = strtoupper($registro['domicilio_int']);
    $localidad_int = $registro['localidad_int'];
    $provincia_int = $registro['provincia_int'];
    $cp_int = $registro['cp_int'];
    $tel_int = $registro['tel_int'];
    $cel_int = $registro['cel_int'];
    $ap_cony = $registro['ap_cony'];//
    $nom_cony = $registro['nom_cony'];//
    $dni_cony = $registro['dni_cony'];
    $ap_aut = $registro['ap_aut'];////////
    $nom_aut = $registro['nom_aut'];
    $cargo_aut = $registro['cargo_aut'];
    $tipo_doc_aut = $registro['tipo_doc_aut'];
    $documento_aut = $registro['documento_aut'];
    $ap_aut2 = $registro['ap_aut2'];
    $nom_aut2 = $registro['nom_aut2'];
    $cargo_aut2 = $registro['cargo_aut2'];
    $tipo_doc_aut2 = $registro['tipo_doc_aut2'];
    $documento_aut2 = $registro['documento_aut2'];
    $ap_aut3 = $registro['ap_aut3'];
    $nom_aut3 = $registro['nom_aut3'];
    $cargo_aut3 = $registro['cargo_aut3'];
    $tipo_doc_aut3 = $registro['tipo_doc_aut3'];
    $documento_aut3 = $registro['documento_aut3'];
    $ap_aut4 = $registro['ap_aut4'];
    $nom_aut4 = $registro['nom_aut4'];
    $cargo_aut4 = $registro['cargo_aut4'];
    $tipo_doc_aut4 = $registro['tipo_doc_aut4'];
    $documento_aut4 = $registro['documento_aut4'];*/
///  }
  echo json_encode(array(
"nombres"=>"si hay datos"
    //"nombres"=>$nombres
    /*,
    "domicilio"=>$domicilio,
    //"cuit"=>$cuit,
    "email"=>$email)
    "conv_multi"=>$conv_multi,
    "localidad"=>$localidad,
    "tel"=>$tel,
    "cp"=>$cp,
    "entidad"=>$entidad,
    "dtos_filiat"=>$dtos_filiat,
    "ap_pat"=>$ap_pat,
    "ap_mat"=>$ap_mat,
    "ap_interesado"=>$ap_interesado,
    "nom_interesado"=>$nom_interesado,
    "dni_int"=>$dni_int,
    "est_civil_int"=>$est_civil_int,
    "domicilio_int"=>$domicilio_int,
    "localidad_int"=>$localidad_int,
    "provincia_int"=>$provincia_int,
    "cp_int"=>$cp_int,
    "tel_int"=>$tel_int,
    "cel_int"=>$cel_int,
    "ap_cony"=>$ap_cony,
    "nom_cony"=>$nom_cony,
    "dni_cony"=>$dni_cony,
    "ap_aut"=>$ap_aut,
    "nom_aut"=>$nom_aut,
    "cargo_aut"=>$cargo_aut,
    "tipo_doc_aut"=>$tipo_doc_aut,
    "documento_aut"=>$documento_aut,
    "ap_aut2"=>$ap_aut2,
    "nom_aut2"=>$nom_aut2,
    "cargo_aut2"=>$cargo_aut2,
    "tipo_doc_aut2"=>$tipo_doc_aut2,
    "documento_aut2"=>$documento_aut2,
    "ap_aut3"=>$ap_aut3,
    "nom_aut3"=>$nom_aut3,
    "cargo_aut3"=>$cargo_aut3
    "tipo_doc_aut3"=>$tipo_doc_aut3,
    "documento_aut3"=>$documento_aut3,
    "ap_aut4"=>$ap_aut4,
    "nom_aut4"=>$nom_aut4,
    "cargo_aut4"=>$cargo_aut4,
    "tipo_doc_aut4"=>$tipo_doc_aut4,
    "documento_aut4"=>$documento_aut4
*/
    );
///}else {
///  echo json_encode(array(
///  "nombres"=>"no hay datos"//,
  //"domicilio"=>"no hay datos",
  //"cuit"=>"no hay datos",
  //"email"=>"no hay datos"
///)
///);
///}
?>
