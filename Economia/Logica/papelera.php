<?php
	while($registro2 = mysqli_fetch_array($resu)){
    echo '<tr>
            <td>'.$registro2['nroProv'].'</td>
            <td>'.$registro2['cuit'].'</td>
            <td>'.$registro2['conv_multi'].'</td>
			<td>'.$registro2['email'].'</td>
			<td>'.$registro2['nombres'].'</td>
			<td>'.$registro2['domicilio'].'</td>
			<td>'.$registro2['localidad'].'</td>
			<td>'.$registro2['tel'].'</td>
			<td>'.$registro2['cp'].'</td>
			<td>'.$registro2['entidad'].'</td>
			<td>'.$registro2['dtos_filiat'].'</td>
			<td>'.$registro2['ap_pat'].'</td>
			<td>'.$registro2['ap_mat'].'</td>
			<td>'.$registro2['ap_interesado'].'</td>
			<td>'.$registro2['nom_interesado'].'</td>
			<td>'.$registro2['dni_int'].'</td>
			<td>'.$registro2['est_civil_int'].'</td>
			<td>'.$registro2['domicilio_int'].'</td>
			<td>'.$registro2['localidad_int'].'</td>
			<td>'.$registro2['provincia_int'].'</td>
			<td>'.$registro2['cp_int'].'</td>
			<td>'.$registro2['tel_int'].'</td>
			<td>'.$registro2['cel_int'].'</td>
			<td>'.$registro2['ap_cony'].'</td>
			<td>'.$registro2['nom_cony'].'</td>
			<td>'.$registro2['dni_cony'].'</td>
			<td>'.$registro2['ap_aut'].'</td>
			<td>'.$registro2['nom_aut'].'</td>
			<td>'.$registro2['cargo_aut'].'</td>
			<td>'.$registro2['documento_aut'].'</td>
			<td>'.$registro2['validado'].'</td>
          </tr>';        
	}?>
	
	
		<table class="table table-striped table-condensed table-hover" id="data">
	<thead>
	<tr>
	<th width="50" align="center"><span title="nroProv">Nro PROVEEDOR</span></th>
	<th width="50" align="center"><span title="cuit">CUIT</span></th>
	<!--<th width="50" align="center">CONVENIO Nro</th>  
	<th width="50" align="center">EMAIL</th>
	<th width="50" align="center">NOMBRES</th>
	<th width="50" align="center">DOMICILIO</th>
	<th width="50" align="center">LOCALIDAD</th>
	<th width="50" align="center">TEL</th>
	<th width="50" align="center">CP</th>
	<th width="50" align="center">ENTIDAD</th>
	<th width="50" align="center">DATOS FILIATORIOS</th>
	<th width="50" align="center">AP PATERNO</th>
	<th width="50" align="center">AP MATERNO</th>
	<th width="50" align="center">APELLIDO</th>
	<th width="50" align="center">DNI</th>
	<th width="50" align="center">ESTADO CIVIL</th>
	<th width="50" align="center">DOMICILIO</th>
	<th width="50" align="center">LOCALIDAD</th>
	<th width="50" align="center">PROVINCIA</th>
	<th width="50" align="center">CODIGO POSTAL</th>
	<th width="50" align="center">TELEFONO</th>
	<th width="50" align="center">CELULAR</th>
	<th width="50" align="center">AP CONYUGUE</th>
	<th width="50" align="center">NOM CONYUGUE</th>
	<th width="50" align="center">DNI CONYUGUE</th>
	<th width="50" align="center">AP AUT</th>
	<th width="50" align="center">NOM AUT</th>
	<th width="50" align="center">CARGO AUT</th>
	<th width="50" align="center">DNI AUT</th>
	<th width="50" align="center">VALIDADO POR EMAIL</th>-->
	</tr>
	</thead>
	<tbody>
	
            	
    </tbody>
    </table>