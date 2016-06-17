@extends('site.layouts.default')




@section('content')



<script>


	function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
	}


	function sendmsg()
	{
		var flag=1;
		var name=$("input[name='name']").val();
		var email=$("input[name='email']").val();
		var subject=$("input[name='subject']").val();
		var msg=$("textarea[name='message']").val();
		
		
		if(!name || !email || !subject || !msg)
		{
			if("<?=$lang;?>"=="el")
				alert("Παρακαλώ συμπληρώστε όλα τα στοιχεία")
			if("<?=$lang;?>"=="en")
				alert("Please fill in all the data")	
			if("<?=$lang;?>"=="pu")
				alert("Por favor, preencha todos os detalhes")	
			
			
			flag=0
		}
			
		if(!validateEmail(email) && flag==1)	
		{
			
			if("<?=$lang;?>"=="el")
				alert("To email δεν έχει σωστή μορφή")
			if("<?=$lang;?>"=="en")
				alert("The email is malformed")	
			if("<?=$lang;?>"=="pu")
				alert("O e-mail é inválido")	
			
			flag=0;
		}
		
		if(flag==1)
			$("#contactform").submit();
		
		
	}


</script>







                     <div id="content">
                        <div class="container">
                            <div class="row margin-vert-30">
							
							
								<h2><?=$lekseis[0];?></h2>
								
								<span style="color:green"><?=$sendmessage;?></span>
							
								<form id="contactform" method="post" action="{{URL::to('/')}}/<?=$lang;?>/home/contact">
                                <!-- Main Column -->
                                <div class="col-md-12">
                                    <div class="col-md-1"><label><?=$lekseis[1];?>:</label></div>
                                    <div class="col-md-2"><input type="text" name="name" /></div>
                                </div>
								<br/><br/>
								<div class="col-md-12">
                                    <div class="col-md-1"><label><?=$lekseis[2];?>:</label></div>
                                    <div class="col-md-2"><input type="text" name="email" /></div>
                                </div>
								<br/><br/>
								<div class="col-md-12">
                                    <div class="col-md-1"><label><?=$lekseis[3];?>:</label></div>
                                    <div class="col-md-2"><input type="text" name="subject" /></div>
                                </div>
								<br/><br/>
								<div class="col-md-12">
                                    <div class="col-md-1"><label><?=$lekseis[4];?>:</label></div>
                                    <div class="col-md-2"><textarea style="width:300px; height:150px;" name="message"></textarea></div>
                                </div>
								
								<div class="col-md-12">
									<input onclick="sendmsg()" type="button" value="<?=$lekseis[5];?>" />
								</div>
								
								
								</form>
								
								
								
								
								
                                <!-- End Main Column -->
                            </div>
                        </div>
                    </div>


@endsection	