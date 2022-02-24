<%@page import="java.sql.ResultSet"%>
<%@page import="com.mysql.cj.xdevapi.Result"%>
<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>

<%
ResultSet lista = (ResultSet) request.getAttribute("Materia");
%>

<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
	crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
	<div class="container">

		<div class="row justify-content-center">

			<div class="col-md-6 justify-content-center">
				<h1 class="mt-3 mb-5 text-center">Prenota in tuo esame</h1>
				<form action="s1?z=2" method="post" class="">
					<div class="mb-3">
						<label class="form-label">Matricola</label> <input type="number"
							name="matricola" class="form-control" id="nome"
							aria-describedby="form">
					</div>
					<div class="mb-3">
						<label class="form-label">Nome</label> <input type="text"
							name="nome" class="form-control" id="nome"
							aria-describedby="form">
					</div>
					<div class="mb-3">
						<label class="form-label">Cognome</label> <input type="text"
							name="cognome" class="form-control" id="cognome"
							aria-describedby="form">
					</div>

					<div class="mb-3">
						<label class="form-label">Esame di:</label> <select name=esame>
							<%while (lista.next()) {%>
							<option>
								<%=lista.getString("nomeMateria")%>
							</option>
							<%}%>
						</select>
					</div>

					<div class="mb-3">
						<label class="form-label">Data Esame</label> <input type="date"
							name="dataE" class="form-control" id="date"
							aria-describedby="form">
					</div>

					<button type="submit" class="btn btn-primary mb-2 ">Submit</button>

				</form>
			</div>
		</div>
		<a href="s1?z=9" class="text-center mt-5"><button
				class=" btn btn-primary">Torna alla home studente</button></a>
	</div>
</body>
</html>