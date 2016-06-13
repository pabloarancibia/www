<html>
<script src="jquery-latest.js" type="text/javascript"></script>
<script type="text/javascript">
$("#datos").hide();
$("#btnSigModif").click(function(){
alert('jsjdjdjd');
			$.post("getdataCargarDatosPreIns.php", {"NroSol":$("#NroSol").val()}, function(data){


				if(data.nombres){

					$("#nombres").val(data.nombres);

				}else{
					$("#nombres").val("error");
				}

		},"json");

			$("#datos").show('slow');
		});
</script>
<body>
  <input type="text" id="NroSol" name="NroSol"/>

  <input type="button" id="btnSigModif" value="SIGUIENTE"/>

<div id="datos">
  <input type="text" name="nombres" id="nombres" />
</div>
</body>
</html>
