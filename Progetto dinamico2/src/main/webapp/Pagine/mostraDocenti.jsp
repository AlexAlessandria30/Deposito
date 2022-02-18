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
String []  colleghi = (String []) request.getAttribute("colleghi");
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
<div class="row text-center">
<div class="col-12 mt-5">
<% for(String colleg : colleghi) {%>


<div><%=  colleg %></div>


 
<%} %></div>
<a href="s1?z=2" class="text-center mt-5"><button class=" btn btn-primary">Torna
						alla home Docente</button></a>
<a href="s1?z=4" class="text-center mt-5"><button class=" btn btn-primary">Torna
						alla home</button></a>
</div>
</div>









</body>
</html>
