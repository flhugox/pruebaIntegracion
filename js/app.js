function calcular(){
var numero = $("#txtnum").val();
numero=parseFloat(numero);
        if (Number.isInteger(numero)) {
            total=(numero*(numero+1))/2;
            console.log(total);
            $("#p_resultadoG").empty();
            $("#p_resultadoG").append("Resultado "+total);
         
        }else{
         
            irreducible(numero);

            
        }
}


function validateDecimal(){
    var numero = $("#txtnum").val();
    numero=parseFloat(numero);
    var con3decimales = numero.toFixed(3);
    $("#txtnum").val(con3decimales);
   

}
function irreducible(numero){
     
    var denominador = 10000;
    var numerador =  (numero * 10000); 
   denominador=parseFloat(denominador);
  
   var  i = numerador;
   while (i > 1) {
       if (numerador % i == 0 && denominador % i == 0){
           numerador = numerador / i;
           denominador = denominador / i;
       }
       i =  i - 1;
       
   }
   
   $("#p_resultadoI").empty();
   $("#p_resultadoI").append("Resultado: "+ numerador+"/"+denominador);
   
}

function consultar(){
   var txtAlimento1=$("#txtAlimento1").val();
   var txtAlimento2=$("#txtAlimento2").val();
   var txtAlimento3=$("#txtAlimento3").val();

 

    separador = "|";
    textoseparado = txtAlimento1.split(separador);
    textoseparado2 = txtAlimento2.split(separador);
    textoseparado3 = txtAlimento3.split(separador);
    const array3 = textoseparado.concat(textoseparado2);
    const array4 = array3.concat(textoseparado3);
    

    var uniqueArray = [];

    for(i=0; i < array4.length; i++){
        if(uniqueArray.indexOf(array4[i]) === -1) {
            uniqueArray.push(array4[i]);
           
        }else{
    
         eliminarArray( uniqueArray, array4[i] );
        }
    }
   resul= uniqueArray.toString()
   $("#resulPlatillos").empty();
   $("#resulPlatillos").append("Resultados: "+resul);
   alert(resul);
}

function eliminarArray ( arr, item ) {
    var i = arr.indexOf( item );
    arr.splice( i, 1 );
}