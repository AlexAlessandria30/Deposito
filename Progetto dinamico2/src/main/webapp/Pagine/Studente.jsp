<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Pagina Studenti</title>
<%
String titolo = "Corso 432887";
String studente = (String) request.getAttribute("Studente");
Integer calcolo = (int) request.getAttribute("calcolo");
Integer matricola = (int) request.getAttribute("matricola");
String[] materieSc = (String[]) request.getAttribute("materia");
%>

<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
	crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
	<div class="container"></div>
		<div class="row">
			<div class="col-12 text-center">
				<h2>Benvenuto Studente</h2>
				<h2><%=titolo%></h2>
				<div>
					Benvenuto:
					<%=studente%>
					matricola:
					<%=matricola%></div>
				<div class=" tav1">
					Ore di lezione effetuate:
					<%=calcolo%></div>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-12 colmd-6 text-center">
				<%
				for (String materia : materieSc) {
				%>


				<div class="tav1"><%=materia%></div>



				<%
				}
				%>
			</div>
	<a href="s1?z=4" class="text-center mt-5"><button class=" btn btn-primary">Torna
						alla home</button></a>
		</div>
	</div>









	


</body>
</html>