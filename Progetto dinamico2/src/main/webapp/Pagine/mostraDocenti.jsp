<%@page import="java.sql.ResultSet"%>
<%@page import="org.eclipse.jdt.internal.compiler.ast.ForeachStatement"%>
<%@page import="org.apache.jasper.tagplugins.jstl.core.ForEach"%>
<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Mostra docenti</title>
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
		<div class="row">
			<div class="col-12 text-center mt-5">

				<h1>Ecco tutti i docenedi</h1>
			</div>
		</div>
		<div class="row justify-content-center text-center">
			<div class="col-12 justify-content-center">
					<table  class="Lista" style="border-collapse: separate; border-spacing: 20px">
						<tr class="justify-content-center">
							<td>Materia</td>
							<td>Nome Docente</td>
						
							
						</tr>
						<%
						while (lista.next()) {
						%>

						<tr>
							<td><%=lista.getString("nomeMateria")%></td>
							<td><%=lista.getString("docente")%></td>
						
							
						</tr>
						<%}%>
					</table>
			</div>
		</div>

		

		<div>
			<a href="s1?z=2" class="text-center mt-5">
				<button class=" btn btn-primary">Torna alla home Docente</button></a>
				
			 <a href="s1?z=4" class="text-center mt-5">
				<button class=" btn btn-primary">Torna alla home</button></a>
		</div>
	</div>










</body>
</html>
