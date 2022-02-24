<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<%
String errore = (String) request.getAttribute("errore");
%>



<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
	crossorigin="anonymous">
	
<link rel="stylesheet" type="text/css" href="Style.css">

</head>
<body>

<div class="container justify-content-center">
		<div class="row justify-content-center">
			<div class="col-12 col-md-6 text-center">
				<h2>Accedi</h2>
			</div>
		</div>
		<div class="row justify-content-center mt-4">
			<div class="col-12 col-md-6">

				<form action="s2?z=3" method="Post"  id="formlogin">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Utente </label>
						<input type="text" class="form-control" name="utente"
							 aria-describedby="emailHelp">
						<div id="utente" class="form-text"></div>
					</div>
					<div class="mb-3">
						<label for="Password" id="password" class="form-label">Password</label>
						<input type="password" id="password" class="form-control" name="password"
							id="exampleInputPassword1">
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<%
			if (errore != null) {
			%>
			<h3 class="text-center color"><%=errore%></h3>
			<%
			}
			%>

		
					
					<a href="s1?z=4"
				class="text-center mt-5"><button class=" btn btn-primary">Torna
					alla home</button></a>

		</div>

	</div>








<script  type="text/javascript">
	$(document).ready(function() {		
		$("#formlogin").submit(function() {	
				var nome=document.getElementById("utente").value;
				var passwor=document.getElementById("password").value;
				if(nome=="" ){
					alert("Inseire un utente");
					return false;
				}else{
					return true;
				}	
			});				
	}); 		
</script>


 <script type="text/javascript" src="JQueryLib/jquery-1.7.1.min.js"></script>
 
 </body>
</html>