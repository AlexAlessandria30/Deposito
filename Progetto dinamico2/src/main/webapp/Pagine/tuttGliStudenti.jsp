<%@page import="java.sql.ResultSet"%>
<%@page import="java.util.ArrayList"%>
<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Tutti gli Studenti</title>

<%
ResultSet lista = (ResultSet) request.getAttribute("Studenti");
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

		<div class="row text-center">
			<div class="col-12 text-center">
				<h1>Ecco tutti gli studenti iscritti</h1>
			</div>

		</div>
		<div class="row justify-content-center text-center">
			<div class="col-12 justify-content-center">
				<table class="Lista"
					style="border-collapse: separate; border-spacing: 20px">
					<tr class="justify-content-center">
						<td>Matricola</td>
						<td>Nome</td>
						<td>Cognome</td>
						<td>Data di nascita</td>
						<td>Città</td>



					</tr>
					<%
					while (lista.next()) {
					%>

					<tr>
						<td><%=lista.getString("matricola")%></td>
						<td><%=lista.getString("nome")%></td>
						<td><%=lista.getString("cognome")%></td>
						<td><%=lista.getString("dataN")%></td>
						<td><%=lista.getString("citta")%></td>


					</tr>
					<%}%>
				</table>
			</div>
		</div>


		<div class="row mt-5">

			<div class="row justify-content-center mt-5">
				<div class="col-12  justify-content-center">

					<a href="s1?z=10" class="text-center mt-5">
						<button class=" btn btn-primary">Vedi esami Prenotati</button>
					</a>
				</div>
				<div class="col-12 mt-5 justify-content-center">
					<a href="s1?z=2" class="text-center mt-5">
						<button class=" btn btn-primary">Torna alla home Docente</button>
					</a> <a href="s1?z=4" class="text-center mt-5">
						<button class=" btn btn-primary">Torna alla home</button>
					</a>
				</div>
			</div>
		</div>
	</div>








</body>
</html>