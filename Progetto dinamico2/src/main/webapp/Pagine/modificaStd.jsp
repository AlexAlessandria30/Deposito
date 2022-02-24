<%@page import="java.sql.ResultSet"%>
<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<%
ResultSet lista = (ResultSet) request.getAttribute("listast");
%>




<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
	crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="Style.css">

<script type="text/javascript" src="JQueryLib/jquery-1.7.1.min.js"></script>
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2>Lista modifica studenti</h2>
			</div>
		</div>
		<div class="row justify-content-center text-center">
			<div class="col-6 justify-content-center">
				<h3>LISTA STUDENTI</h3>
			
					<table  class="Lista" style="border-collapse: separate; border-spacing: 20px">
						<tr class="justify-content-center">
							<td>Matricola</td>
							<td>Nome</td>
							<td>Cognome</td>
							<td>Città</td>
							<td>Data di nascita</td>
						</tr>
						<%
						while (lista.next()) {
						%>

						<tr>
							<td><%=lista.getInt("matricola")%></td>
							<td><%=lista.getString("nome")%></td>
							<td><%=lista.getString("cognome")%></td>
							<td><%=lista.getString("citta")%></td>
							<td><%=lista.getString("dataN")%></td>
						</tr>
						<%}%>
					</table>
				
				<div id="sceltaid">
					<form action="s1?z=3" method="POST">
						<h5>codice selezionato</h5>
						<input type="number" name="matricola" /><input type="submit"
							value="APRI" />
					</form>
				</div>
				<div class="mt-5">
					<a href="s1?z=2" class="text-center mt-5"><button
							class=" btn btn-primary">Torna alla home Docente</button></a> <a
						href="s1?z=4" class="text-center mt-5"><button
							class=" btn btn-primary">Torna alla home</button></a>
				</div>
			</div>
		</div>
	</div>




</body>
</html>