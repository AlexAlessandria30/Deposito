<%@page import="java.sql.ResultSet"%>
<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
<%ResultSet lista = (ResultSet) request.getAttribute("listast"); %>




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
				<h1>Lista studenti</h1>
			</div>

		</div>

		<div class="row mt-3">
			<div class="col-12  justify-content-center">

				<%
				while (lista.next()) {
				%>


				<div class="tav1"><%=lista.getString("nome") + " " + lista.getString("cognome")
				+ " , " + lista.getString("dataN")+ "   " + lista.getString("citta")%></div>

				<%
				}
				%>

<a href="s1?z=2" class="text-center mt-5"><button class=" btn btn-primary">Torna
						alla home Docente</button></a>
<div class="text-center">  	<a href="s1?z=4" class=" mt-5"><button class=" btn btn-primary">Torna
						alla home</button></a>   </div>
			
			</div>
		</div>
	</div>

</body>
</html>