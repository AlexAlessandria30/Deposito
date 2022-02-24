<%@page import="java.sql.ResultSet"%>
<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Pagina Studenti</title>
<%
ResultSet lista = (ResultSet) request.getAttribute("Esami");
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
		<div class="row">
			<div class="col-12 text-center">

				<h3 class="mb-4">Esami prenotati</h3>

			</div>
		</div>
		<div class="row justify-content-center text-center">
			<div class="col-12 justify-content-center">
					<table  class="Lista" style="border-collapse: separate; border-spacing: 20px">
						<tr class="justify-content-center">
							<td>Matricola</td>
							<td>Nome</td>
							<td>Cognome</td>
							<td>Data esame</td> 
							<td>Materia esame</td>
						</tr>
						<%
						while (lista.next()) {
						%>

						<tr>
							<td><%=lista.getInt("matricola")%></td>
							<td><%=lista.getString("nome")%></td>
							<td><%=lista.getString("cognome")%></td>
							<td><%=lista.getString("dataE")%></td>
							<td><%=lista.getString("materia")%></td>
						</tr>
						<%}%>
					</table>
			</div>
		</div>


		<a href="s1?z=2" class="text-center mt-5"><button
				class=" btn btn-primary">Torna alla home</button></a>
	</div>
</body>
</html>