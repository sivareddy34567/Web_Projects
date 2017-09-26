

<?php
?>
<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
	function myfunction()
	{


          var  farmername=document.registration.firstname.value;
          var  fathername=document.registration.lastname.value;
          var  phonenumber=document.registration.phonenumber.value;
          var  surveynumber=document.registration.surveynumber.value;
          var   noofacres=document.registration.noofacres.value;
          var nooffileds=document.registration.nooffileds.value;
          var statename=document.registration.statename.value;
          var disticname=document.registration.disticname.value;
          var mandalname=document.registration.mandalname.value;
          var villagename=document.registration.villagename.value;
          var centername=document.registration.centername.value;
          var zonename=document.registration.zonename.value;
          var latitude=document.registration.latitude.value;
          var longitude=document.registration.longitude.value;
          var createdname=document.registration.createdname.value;

		    var errormessage = document.getElementById('errormessage');
		    var errormessage1 = document.getElementById('errormessage1');
		    var errormessage2= document.getElementById('errormessage2');
             var errormessage3 = document.getElementById('errormessage3');
            var errormessage4 = document.getElementById('errormessage4');
            var errormessage5= document.getElementById('errormessage5');
             var errormessage6 = document.getElementById('errormessage6');
            var errormessage7 = document.getElementById('errormessage7');
            var errormessage8= document.getElementById('errormessage8');
             var errormessage9 = document.getElementById('errormessage9');
            var errormessage10= document.getElementById('errormessage10');
             var errormessage11 = document.getElementById('errormessage11');
            var errormessage12= document.getElementById('errormessage12');
            var errormessage13= document.getElementById('errormessage13');
             var errormessage14= document.getElementById('errormessage14');
		      var phoneno = /^\d{10}$/;
               var regex = /[0-9]|\./;

if((document.registration.firstname.value=="") && (document.registration.lastname.value=="") && (document.registration.surveynumber.value=="")
 && (document.registration.noofacres.value=="") && (document.registration.nooffileds.value=="") && (document.registration.statename.value=="") && (document.registration.disticname.value=="") && (document.registration.mandalname.value=="") 
 && (document.registration.villagename.value=="") && (document.registration.centername.value=="") &&  (document.registration.zonename.value=="") && (document.registration.latitude.value=="") && (document.registration.longitude.value=="") && (document.registration.phonenumber.value=="") && (createdname=="")) {
            document.getElementById('errormessage').innerHTML="please enter valid farmername";
            document.getElementById('errormessage1').innerHTML="please enter valid fathername";
            document.getElementById('errormessage2').innerHTML="please enter valid surveynumber";
            document.getElementById('errormessage3').innerHTML="please enter valid noofacres";
            document.getElementById('errormessage4').innerHTML="please enter valid nooffileds";
            document.getElementById('errormessage5').innerHTML="please enter valid statename";
            document.getElementById('errormessage6').innerHTML="please enter valid disticname";
            document.getElementById('errormessage7').innerHTML="please enter valid mandalname";
            document.getElementById('errormessage8').innerHTML="please enter valid villagename";
            document.getElementById('errormessage9').innerHTML="please enter valid centername";
            document.getElementById('errormessage10').innerHTML="please enter valid zonename";
            document.getElementById('errormessage11').innerHTML="please enter valid latitude";
            document.getElementById('errormessage12').innerHTML="please enter valid longitude";
                document.getElementById('errormessage13').innerHTML="please enter Date";
             document.getElementById('errormessage14').innerHTML="please enter valid phonenumber";
             
            return false;
        }else{
            // document.getElementById('errormessage').innerHTML="";
            // document.getElementById('errormessage1').innerHTML="";
    
        }





    if(!(/^[a-zA-Z]+$/.test(farmername)) && !(farmername=="")  )
    {
        errormessage.innerHTML="Only alphabets allowed";	  
        
        return false;
    
    }
    else if(!(/^[a-zA-Z]+$/.test(fathername)) && !(fathername==""))
    {
         errormessage1.innerHTML="Only alphabets allowed";  
        return false;
    
     }

 else if(!(regex.test(surveynumber)) && !(surveynumber==""))
    {
         errormessage2.innerHTML="Only alphabets allowed";  
        return false;
    
     }
 else if(!(regex.test(noofacres)) && !(noofacres==""))
    {
         errormessage3.innerHTML="Only alphabets allowed";  
        return false;
    
     }
 else if(!(regex.test(nooffileds)) && !(nooffileds==""))
    {
         errormessage4.innerHTML="Only alphabets allowed";  
        return false;
    
     }





     else if(!(/^[a-zA-Z]+$/.test(statename)) && !(statename==""))
    {
         errormessage5.innerHTML="Only alphabets allowed";  
        return false;
    
     }
     else if(!(/^[a-zA-Z]+$/.test(disticname)) && !(disticname==""))
    {
         errormessage6.innerHTML="Only alphabets allowed";  
        return false;
    
     }
      else if(!(/^[a-zA-Z]+$/.test(mandalname)) && !(mandalname==""))
    {
         errormessage7  .innerHTML="Only alphabets allowed";  
        return false;
    
     }
       else if(!(/^[a-zA-Z]+$/.test(villagename)) && !(villagename==""))
    {
         errormessage8.innerHTML="Only alphabets allowed";  
        return false;
    
     }

 else if(!(/^[a-zA-Z]+$/.test(centername)) && !(centername==""))
    {
         errormessage9.innerHTML="Only alphabets allowed";  
        return false;
    
     }
else if(!(/^[a-zA-Z]+$/.test(zonename)) && !(zonename==""))
    {
         errormessage10.innerHTML="Only alphabets allowed";  
        return false;
    
     }
     else if(!(/^[a-zA-Z]+$/.test(zonename)) && !(zonename==""))
    {
         errormessage10.innerHTML="Only alphabets allowed";  
        return false;
    
     }
      else if(!(regex.test(latitude)) && !(latitude==""))
    {
         errormessage11.innerHTML="Only numbers allowed";  
        return false;
    
     }

 else if(!(regex.test(longitude)) && !(longitude==""))
    {
         errormessage12.innerHTML="Only numbers allowed";  
        return false;
    
     }
     else if(!(phoneno.test(phonenumber)) && !(phonenumber==""))
    {
         errormessage14.innerHTML="Only numbers allowed";  
        return false;
    
     }
  
 
     
}  
         






		
// 		if(document.registration.fastname.value=="")
// 		{
	
// 			document.getElementById('errormessage').innerHTML="please enter valid username";
			
// 			return false;

// 		}else
// 		{
// 			document.getElementById('errormessage').innerHTML="";
// 		}


// 		if (document.registration.lastname.value=="") {

// 			document.getElementById('errormessage1').innerHTML="please enter valid lastname";

// 			return false;
// 		}	
// 		else{
// 			document.getElementById('errormessage1').innerHTML="";
// 		}

		

		



</script>
</head>
<body>

<form name="registration" action="basic.php" method="post" onsubmit="return myfunction()">
<div>Farmer Name: <input type="text" name="firstname"> <span id="errormessage"></span><div>
<br>
<div> Father Name: <input type="text" name="lastname"> <span id="errormessage1"></span></div> 	
<br>
<br>
<div> Survey Number: <input type="text" name="surveynumber"> <span id="errormessage2"></span></div> 
<br>
<br>
<div> No Of Acres: <input type="number" name="noofacres"> <span id="errormessage3"></span></div> 
<br>
<br>
<div> No Of Fields: <input type="text" name="nooffileds"> <span id="errormessage4"></span></div> 
<br>
<br>
<div> State Name: <input type="text" name="statename"> <span id="errormessage5"></span></div> 
<br>
<br>
<div> Distic Name: <input type="text" name="disticname"> <span id="errormessage6"></span></div> 
<br>
<br>
<div> Mandal Name: <input type="text" name="mandalname"> <span id="errormessage7"></span></div> 
<br>
<br>
<div> Village Name: <input type="text" name="villagename"> <span id="errormessage8"></span></div> 
<br>
<br>
<div> Center Name: <input type="text" name="centername"> <span id="errormessage9"></span></div> 
<br>
<br>
<div> Zone Name: <input type="text" name="zonename"> <span id="errormessage10"></span></div> 
<br>
<br>
<div> latitude: <input type="input" name="latitude"> <span id="errormessage11"></span></div> 
<br>
<br>
<div> longitude: <input type="text" name="longitude"    > <span id="errormessage12"></span></div> 
<br>
<br>
<div> Creted Name: <input type="Date" name="createdname"> <span id="errormessage13"></span></div> 
<br>
<br>
<div> Phone Number: <input type="text" name="phonenumber"> <span id="errormessage14"></span></div> 
<br>
<br>

<input type="submit" value="Submit" >
</form>

</body>
</html>
