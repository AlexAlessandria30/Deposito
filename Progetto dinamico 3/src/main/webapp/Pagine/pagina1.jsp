<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>

<%
String []  nomi = (String []) request.getAttribute("colleghi");
%>

<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<body>
<h1>Ecco i nomi delle persone</h1>

<% for(String nome : nomi) {%>
<ul>  
 <li><%= nome %></li>
</ul>

<%} %>
</body>
</html>