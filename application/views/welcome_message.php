<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
	
	<script type = "text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"> </script>
	
	<script type = "text/javascript">

	

	var count = 0;
	var ratio = 100;

		$(document).ready(function(){

			$("#warning").hide();
		
			$(".clicker2").click(function(){
				if($("#my_ul2 li").length < 1){
					$("#my_ul2").append('<li>' + "Son Goku " +$("#txt_input1").val()+ "%" + '</li>');
				}
				else{
					alert("oooppss isa lang..");
				}
			});
			
			 $(".clicker").click(function(){
			 	

				if($("#my_ul li").length < 2){
					$("#my_ul").append('<li>'+ '<input type="hidden" class="hide" value="'+$("#txt_input2").val()+'" />'
										+ $('#sel').find("option:selected").text() + "&nbsp;&nbsp;" + $("#txt_input2").val() + "%" + '</li>');
				}
				else{
					alert("hanggang dalawa lang pre..");
				}
				$("#txt_input2").val("");


				count++;
			 	total = 0;

			 	$("#my_ul li").find($(".hide")).each(function(){
							var palit = parseInt($(this).val());
							console.log(palit);
							total += palit;
					});

						ratio = 100 - total;
						console.log("hello world");
						$("#txt_input1").val(ratio);


				});

			 $("#txt_input2").on("keyup",function(){

			 	console.log($(this).val() + " --- " + ratio + !(isNaN($(this).val())) );

			 	if(parseInt($(this).val()) > 50 ){

			 		$(".clicker").fadeOut();
			 		$("#warning").fadeIn();

			 	}

			 	else if((ratio-total)>=parseInt($(this).val()) ){

			 		$(".clicker").fadeIn();
			 		$("#warning").fadeOut();

			 	}else{

			 		$(".clicker").fadeOut();
			 		$("#warning").fadeIn();

			 	}

			 });

			   
			$(".belat").click(function(){
					
					var one = parseInt($("#txt_input1").val());
					var total = 0;
					if(isNaN(one)){
					  one = 0;
					}
				   
					$("#my_ul li").find($(".hide")).each(function(){
							var palit = parseInt($(this).val());
							console.log(palit);
							total += palit;
					});
					var superdupertotal = total+one;
					alert("sum: " +superdupertotal+ "%");

					

			});

		});

</script>

</head>
<body>

<div id="container">
	<!-- <h1>Welcome to CodeIgniter!</h1>

	<div id="body">
		<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

		<p>If you would like to edit this page you'll find it located at:</p>
		<code>application/views/welcome_message.php</code>

		<p>The corresponding controller for this page is found at:</p>
		<code>application/controllers/welcome.php</code>

		<p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>-->
	
	<input type="text" id="txt_input1" name="txt_input1" disabled value = "100" />
	<button class = "clicker2">son goku</button>
	<br/>
	<select id="sel">
	<option value="">Majinboo</option>
	<option value="">Cell</option>
	<option value="">Freeza</option>
	</select>
	<input type="text" id="txt_input2" name="txt_input2" maxlength="3" style="width:64px" />
	<button class = "clicker">mr. pogi & co.</button><div id = "warning" >warning: ratio chu chu!</div>
	<br/>
	<ul id = "my_ul2">
	List ni Goku
	</ul>
	<br/>
	<ul id = "my_ul">
	List ni Mr. Pogi & Co.
	</ul>
	<button class = "belat">show me the money</button>
</div>

</body>
</html>