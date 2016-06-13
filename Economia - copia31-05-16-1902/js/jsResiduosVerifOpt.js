//verificamos los options que tienen q estar chek segun chek realizados
function verifOpt(){
var a5 = document.getElementsByName("optDif");//a5
var mtt = document.getElementsByName("optDifSi");//muni tercero tas
var a5b1 = document.getElementsByName("DifSiTercero").value;//selec tercero a5b1
var a5b2 = document.getElementsByName("freqDif");
var a5c = document.getElementsByName("cubreDif");
var a51 = document.getElementsByName("necDif");//a51
var a51a = document.getElementsByName("freqNecDif");//a51a
var a6 = document.getElementsByName("depBasura");
var txtOtros = document.getElementById("lbltxtOtros");
var a7 = document.getElementsByName("hrRec");
//var seleccionado = false;

var va5 = 'nc';//nc: no corresponde
var vmtt = 'nc';
var va5b1 = 'nc';
var va5b2 = 'nc';
var va5c = 'nc';
var va51 = 'nc';
var va51a = 'nc';
var va6 = 'nc';
var vtxtOtros = 'nc';
var va7 = 'nc';

for(var i=0; i<a5.length; i++) {//a5
  if(a5[i].checked) {//a5
    // si fue seleccionado entonces verifico su valor para los siguientes options
    va5='ok';
    //si selecciono si --> verifico que 6a5a especificar tercero este checked
  if (a5[i].value=='si'){//a5
      //verifico que tercero este chequeado
      for(var i=0; i<a5.length; i++) {//mtt
        if(mtt[i].checked) {//mtt
          //chequeo si seleccionado es ternero u otro valor
          if (mtt[i].value=='tercero'){//mtt
            //es tercero --> controlar que el txt tenga algo
              if( a5b1 == null || a5b1.length == 0 || /^\s+$/.test(a5b1) ) {
                //return false;//avisar q tiene q llenar txt DifSiTercero
              }
          }//no chekeo tercero sino muni o tas
        }//mtt NO esta chekeado
    }//for mtt
      //verif a5b2
      for(var i=0; i<a5b2.length; i++) {//
        if(a5b2[i].checked) {
          //a5b2 esta chek, no hago nada
        }//a5b2 NO esta chek
      }//fin for a5b2
      //verif a5c
      for(var i=0; i<a5c.length; i++) {//
        if(a5c[i].checked) {
          //si a5c = no
          if (a5c[i].value=='no'){
            //verif a51
            for(var i=0; i<a51.length; i++) {//
              if(a51[i].checked) {
                if (a51[i].value == 'si'){
                  //verif a51a
                  for(var i=0; i<a51a.length; i++) {//
                    if(a51a[i].checked) {
                      //no hago nada, fin si
                    }//a51a NO chek
                  }//fin for a51c
                }//a51 es no, no hago nada
              }//a51 NO esta chek
            }//fin for a51
          }//a5c es si, no hago nada
        }//a5c NO esta chek
      }//fin for a5c
  }else{//a5 es NO
    //verifico a51
    for(var i=0; i<a51.length; i++){
      if(a51[i].checked){
        //esta chek a51 entonces verifico si es si
        if(a51[i].value = 'si'){
          // esta chek a51 como si entonces compruebo q a51a este chek
          for(var i=0; i<a51a.length; i++){
            if(a51a[i].checked){
              //
              //seleccionado = true;
            }//a51a NO esta chek
          }//fin for a51a
        }//a51 es no, no hago nada
      }//a51 NO esta chek
    }//fin for a51
  }//fin else a5
}//a5 no esta chek
}//fin for a5
}//fin verifOpt
