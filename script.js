$(document).ready(function(){
	$( ".clickfirst" ).click(function() {
		$( ".clickfirst" ).fadeOut( "slow" );
		$( ".clicksecond" ).delay( 800 ).fadeIn ( "slow" );
	});
	$( ".clicksecond" ).click(function() {
		$( ".clicksecond" ).fadeOut( "slow" );
		$( ".clickfirst" ).delay( 800 ).fadeIn ( "slow" );
	});

    /*$( "#generate" ).click(function() {
  		$.ajax({
	        type:"POST",
	        url:"connect.php",
	        data:{action:"generatebullshit"},
	        success:function(data){
	            //$("#content").html(data);
	            $('#bullshitbox').val(data);
	        }
	    });
	});*/
});