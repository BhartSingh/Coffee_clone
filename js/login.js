$(document).on('click','#send1',function(){
	 $('#send').hide();
	 $("#otp").show();
 });
 $(document).on('click','#resend1',function(){
	 $('#resend').hide();
 });
 $(document).on('click','.close_model',function(){
	
	 $('#send').show();
	 $("#otp").hide();
 });