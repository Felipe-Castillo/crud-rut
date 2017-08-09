function Valida_Rut( Objeto )
{
	var tmpstr = "";
	var intlargo = Objeto.value
	if (intlargo.length> 0)
	{
		crut = Objeto.value
		largo = crut.length;
		if ( largo <2 )
		{
      alert('El Rut Ingreso es Invalido')
			Objeto.value="";
			Objeto.setAttribute("data-val","false")
			return false;
		}
		for ( i=0; i <crut.length ; i++ )
		if ( crut.charAt(i) != ' ' && crut.charAt(i) != '.' && crut.charAt(i) != '-' )
		{
			tmpstr = tmpstr + crut.charAt(i);
		}
		rut = tmpstr;
		crut=tmpstr;
		largo = crut.length;
 
		if ( largo> 2 )
			rut = crut.substring(0, largo - 1);
		else
			rut = crut.charAt(0);
 
		dv = crut.charAt(largo-1);
 
		if ( rut == null || dv == null )
		return 0;
 
		var dvr = '0';
		suma = 0;
		mul  = 2;
 
		for (i= rut.length-1 ; i>= 0; i--)
		{
			suma = suma + rut.charAt(i) * mul;
			if (mul == 7)
				mul = 2;
			else
				mul++;
		}
 
		res = suma % 11;
		if (res==1)
			dvr = 'k';
		else if (res==0)
			dvr = '0';
		else
		{
			dvi = 11-res;
			dvr = dvi + "";
		}
 
		if ( dvr != dv.toLowerCase() )
		{
			alert('El Rut Ingreso es Invalido')
			Objeto.value="";
			Objeto.setAttribute("data-val","false");
			return false;
		}else{
			params={rut:Objeto.value};
    $.ajax({
            async:true,   
            cache:false, 
            dataType: 'json',
            type: 'get',  
            url: 'php/comprobarR.php',
            data:params,
            success: function(data){
          	if (data.success==true)
          	{
          		alert('El Rut Ingresado ya se encuentra registrado!')
          		Objeto.value="";

          			return false;
          			}else{
          			alert('El Rut Ingresado es Correcto!')
          		
          					return true;
          			}
            }           
        }); 
			
		//Objeto.focus();
		//return true;
		}
	}
}


$("#nombre").keyup(function(e) {
  // Our regex
  // a-z => allow all lowercase alphabets
  // A-Z => allow all uppercase alphabets
  // 0-9 => allow all numbers
  // @ => allow @ symbol
  var regex = /^[a-zA-Z0@ ]+$/;
  // This is will test the value against the regex
  // Will return True if regex satisfied
  if (regex.test(this.value) !== true)
  //alert if not true
  //alert("Invalid Input");

  // You can replace the invalid characters by:
    this.value = this.value.replace(/[^a-zA-Z@ ]+/, '');
});

$("#apellido").keyup(function(e) {
  // Our regex
  // a-z => allow all lowercase alphabets
  // A-Z => allow all uppercase alphabets
  // 0-9 => allow all numbers
  // @ => allow @ symbol
  var regex = /^[a-zA-Z0@ ]+$/;
  // This is will test the value against the regex
  // Will return True if regex satisfied
  if (regex.test(this.value) !== true)
  //alert if not true
  //alert("Invalid Input");

  // You can replace the invalid characters by:
    this.value = this.value.replace(/[^a-zA-Z@ ]+/, '');
});

$("#pais").keyup(function(e) {
  // Our regex
  // a-z => allow all lowercase alphabets
  // A-Z => allow all uppercase alphabets
  // 0-9 => allow all numbers
  // @ => allow @ symbol
  var regex = /^[a-zA-Z0@ ]+$/;
  // This is will test the value against the regex
  // Will return True if regex satisfied
  if (regex.test(this.value) !== true)
  //alert if not true
  //alert("Invalid Input");

  // You can replace the invalid characters by:
    this.value = this.value.replace(/[^a-zA-Z@ ]+/, '');
});


