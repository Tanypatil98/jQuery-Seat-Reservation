<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>jQuery-seat-reservation</title>
	<link rel="stylesheet" href="./home_files/bootstrap.min.css" >
	<link rel="stylesheet" href="./home_files/w3.css">
	
	
	<style>
	
	label{
		margin-left: 50px;
	}
	table {
  border: 1px solid black;
  width: 80%;
  margin-left: 40px;
}
th{
	width: 20%;
}
td{
	padding-left: 10px;
	padding-top: 10px;
	padding-bottom: 10px;
}
.column-49 {
  float: left;
  width: 50%;
  padding: 15px;
}
.column-50 {
  
 width: 50%;
  padding: 15px;
}
.se{
	padding: 5px;
	width: 80%;
	height: 100px;
}
.n{
		padding-top: inherit;
		margin-top: 50px;
	}
@media screen and (max-width: 1000px) {
	h4{
		padding-left: 10px;
	}
.column-49,
  .column-50 {
    width: 100%;
    
    height: 100%;
    padding-left: inherit;
  }
  .pb{
  	width: 50%;
  }
  .se{
  	width: 90%;
  	height: 50px;
  }
  
}
</style>
</head>
<body>
	<div class="d-flex justify-content-center">
		    <header>
			    <h1><BIG>jQuery Seat Reservation</BIG></h1>
			</header>
		</div>
	<?php $t=600; ?>
	<div class="row" style="margin-left: 20px;" >
		<img src="./img/icons8-blue-square-96.png" style="width: 20px;height: 20px;">
		<label style="margin-left: 10px;margin-right: 20px;">Booked</label>
		<img src="./img/icons8-green-square-96.png" style="width: 20px;height: 20px;">
		<label style="margin-left: 10px;margin-right: 20px;">Available</label>
		<img src="./img/icons8-red-square-96.png" style="width: 20px;height: 20px;">
		<label style="margin-left: 10px;margin-right: 20px;">Not Available</label>

</div>
<div class="wor"><p style="color: red;margin-left: 20px;">Please Select Seat</p></div>
<div>
	<label>Seat no.:</label>
	<input type="text"  name="" id="myInput" disabled>
	<label>price:</label>
	<input type="text"  name="" id="myprice"  disabled>
	<button> Processed </button>
	</div>

	
	<div class="container">
<div class="row">
	<div class="column-49">
		<h2>Lowercase</h2>
		<table>
			<tr>
				<th> </th>
				<th> </th>
				<th> </th>
				<th><img class="pb" src="./img/icons8-steering-wheel-80.png"></th>
			</tr>
			<tr>
				<td><input type="button" class="se" name="" value="1" data-price=<?php echo $t; ?> ></td>
				<td> </td>
				<td><input type="button" class="se" name="" value="5" data-price=<?php echo $t; ?> ></td>
				<td><input type="button" class="se" name="" value="6"  data-price=<?php echo $t; ?> ></td>
			</tr>
			
			<tr>
				<td><input type="button" class="se" name="" value="7" data-price=<?php echo $t; ?> ></td>
				<td> </td>
				<td><input type="button" class="se" name="" value="11"  data-price=<?php echo $t; ?> ></td>
				<td><input type="button" class="se" name="" value="12"  data-price=<?php echo $t; ?> ></td>
			</tr>
			
			<tr>
				<td><input type="button" class="se" name="" value="13"  data-price=<?php echo $t; ?> ></td>
				<td> </td>
				<td><input type="button" class="se" name="" value="17"  data-price=<?php echo $t; ?> ></td>
				<td><input type="button" class="se" name="" value="18"  data-price=<?php echo $t; ?> ></td>
			</tr>
			
			<tr>
				<td><input type="button" class="se" name="" value="19"  data-price=<?php echo $t; ?> ></td>
				<td> </td>
				<td><input type="button" class="se" name="" value="23"  data-price=<?php echo $t; ?> ></td>
				<td><input type="button" class="se" name="" value="24"  data-price=<?php echo $t; ?> ></td>
			</tr>
			
			<tr>
				<td><input type="button" class="se" name="" value="25"  data-price=<?php echo $t; ?> ></td>
				<td> </td>
				<td><input type="button" class="se" name="" value="29"  data-price=<?php echo $t; ?> ></td>
				<td><input type="button" class="se" name="" value="30"  data-price=<?php echo $t; ?> ></td>
			</tr>
			
			<tr>
				<td><input type="button" class="se" name="" value="31"  data-price=<?php echo $t; ?> ></td>
				<td></td>
				<td><input type="button" class="se" name="" value="35"  data-price=<?php echo $t; ?> ></td>
				<td><input type="button" class="se" name="" value="36"  data-price=<?php echo $t; ?> ></td>
			</tr>
			
		</table>
	</div>
	<div class="column-50">
		<h2>Uppercase</h2>
		<table>
			<tr>
				<th> </th>
				<th> </th>
				<th> </th>
				<th><img class="pb" src="./img/icons8-steering-wheel-80.png"></th>
			</tr>
			<tr>
				<td><input type="button" class="se" name="" value="2" data-price=<?php echo $t; ?> ></td>
				<td> </td>
				<td><input type="button" class="se" name="" value="3" data-price=<?php echo $t; ?> ></td>
				<td><input type="button" class="se" name="" value="4" data-price=<?php echo $t; ?> ></td>
			</tr>
			
			<tr>
				<td><input type="button" class="se" name="" value="8" data-price=<?php echo $t; ?> ></td>
				<td> </td>
				<td><input type="button" class="se" name="" value="9" data-price=<?php echo $t; ?> ></td>
				<td><input type="button" class="se" name="" value="10"  data-price=<?php echo $t; ?> ></td>
			</tr>
			
			<tr>
				<td><input type="button" class="se" name="" value="14"  data-price=<?php echo $t; ?> ></td>
				<td> </td>
				<td><input type="button" class="se" name="" value="15"  data-price=<?php echo $t; ?> ></td>
				<td><input type="button" class="se" name="" value="16"  data-price=<?php echo $t; ?> ></td>
			</tr>
			
			<tr>
				<td><input type="button" class="se" name="" value="20"  data-price=<?php echo $t; ?> ></td>
				<td> </td>
				<td><input type="button" class="se" name="" value="21"  data-price=<?php echo $t; ?> ></td>
				<td><input type="button" class="se" name="" value="22"  data-price=<?php echo $t; ?> ></td>
			</tr>
			
			<tr>
				<td><input type="button" class="se" name="" value="26"  data-price=<?php echo $t; ?> ></td>
				<td> </td>
				<td><input type="button" class="se" name="" value="27"  data-price=<?php echo $t; ?> ></td>
				<td><input type="button" class="se" name="" value="28"  data-price=<?php echo $t; ?> ></td>
			</tr>
			
			<tr>
				<td><input type="button" class="se" name="" value="32"  data-price=<?php echo $t; ?> ></td>
				<td> </td>
				<td><input type="button" class="se" name="" value="33"  data-price=<?php echo $t; ?> ></td>
				<td><input type="button" class="se" name="" value="34"  data-price=<?php echo $t; ?> ></td>
			</tr>
			
		</table>
	</div>
</div>
</div>

<footer class="w3-container  w3-center w3-xlarge ">
	<p>Created By <a href="">Tanay Patil</a></p>
</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js" ></script>
	
<script type="text/javascript">
	var i = [];
	
	var total=0;
	var pri=0;
	var t = [];
$( document ).ready(function() {

            $('.se').each(function(elem) {
            	
            $(this).click(function(e) {
            	if($(this).hasClass('click')){
            		$(this).css('background-color','');
            		
            		var y=i;
            		
            		var remove_Item = $(this).val();
            		y = $.grep(y, function(value) {
					  return value != remove_Item;
					});
					$('#myInput').val('');
					$('#myInput').val(function(){
                 	return this.value + y +',';
                 	});
                 	
                 	 
					i=y;
                 	
                 	total=total - pri;
                 	$('#myprice').val('');
                 $('#myprice').val(function(){
                 	return this.value + total ;
                 });
                 	if (total==0) {
                 		$('#myInput').val('');

                 	}
            		$(this).removeClass('click');
            	}else{
            		
            		$(this).css('background-color','green');
                 i.push($(this).val());
                 var number=$(this).val();
                 var price=$(this).data(price);
                 $.each(price, function(key, value) { 
				   pri=value;
				});

                 total=pri + total;

                 $('#myInput').val(function(){
                 	return this.value + number +',';
                 })
                 $('#myprice').val('');
                 $('#myprice').val(function(){
                 	return this.value + total ;
                 });
              	$(this).addClass('click');
                 
            	}
            }); 
          });
             
});
 

 

$('.wor').hide();
$("button").click(function(){
				var length=i.length;
				var number=$('#myInput').val();
				var price=$('#myprice').val();
				
				if ($('#myprice').val()==0 & $('#myInput').val()=='') {
					$('.wor').show();
				}else{
			     var url = "inform.php?number=" + encodeURIComponent(number) + "&price=" + encodeURIComponent(price)+ "&length=" + encodeURIComponent(length) ;
				
            window.location.href = url;
        }
			  });
</script>
</body>
</html>