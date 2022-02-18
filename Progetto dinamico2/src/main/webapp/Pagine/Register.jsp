<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<% String errore = (String) request.getAttribute("errore");%>

<link rel="stylesheet" type="text/css" href="Style.css">
<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
	crossorigin="anonymous">

</head>
<body>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-12 col-md-6 text-center">
				<h2>Accedi</h2>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12 col-md-6">
				<form action="s2?z=2" method="Post">
					<div class="mb-3">
						<label for="name" class="form-label">Nome </label> <input
							type="text" name="nome" class="form-control" id="nome"
							aria-describedby="emailHelp">
						<div id="emailHelp" class="form-text"></div>
					</div>
					<div class="mb-3">
						<label for="cognome" class="form-label">Cognome
						</label> <input type="text"name="cognome" class="form-control" id="cognome"
							aria-describedby="emailHelp">
						
					</div>
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Inserisci
							Email </label> 
							<input type="email" class="form-control" name="email"
							id="exampleInputEmail1" aria-describedby="emailHelp">
						<div id="emailHelp" class="form-text"></div>
					</div>
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Reinserisci
							Email </label> <input type="email" class="form-control" name="email" 
							id="exampleInputEmail1" aria-describedby="emailHelp">
						<div id="emailHelp" class="form-text"></div>
					</div>
					<div class="mb-3">
						<label for="exampleInputPassword1" class="form-label">Password</label>
						<input type="password" class="form-control" name="password"
							id="exampleInputPassword1">
					</div>

					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
			<%if(errore != null){
				%>
				<h3 class="text-center color"><%= errore %></h3>
		<%	} %>
				<a href="s2?z=1" class="text-center mt-5"><button class=" btn btn-primary">Accedi
						</button></a>
			<a href="s1?z=4" class="text-center mt-5"><button class=" btn btn-primary">Torna
						alla home</button></a>
		</div>

	</div>

</body>
</html>