<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Pagina Docente</title>
<%String titolo = "Corso 432887";
String docente1 = (String) request.getAttribute("Docente");

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
		<div class="row justify-content-center text-center">
			<div class="col-12">
				<h2>Benvenuto Docente</h2>

				<h2><%=titolo%></h2>
				<div>
					Benvenuto
					<%=docente1%></div>

			</div>
		</div>
		<div class="row mt-5">
			<div class="col-3 text-center">
				<div class="container4">
					<div class="card">
						<div class="imgBx">
							<img src="./Img/vedere.png">
						</div>
						<div class="contentBx">
							<h2>Mostra colleghi</h2>
							<a href="s1?z=3">Vai!</a>
						</div>
					</div>
				</div>

			</div>
			<div class="col-3 text-center">
				<div class="container5">
					<div class="card">
						<div class="imgBx">
							<img src="./Img/inserisci.png">
						</div>
						<div class="contentBx">
							<h2>Inserisci Alunni</h2>
							<a href="s1?z=5">Vai!</a>
						</div>
					</div>
				</div>

			</div>
			<div class="col-3 text-center">
				<div class="container6">
					<div class="card">
						<div class="imgBx">
							<img src="./Img/vedere.png">
						</div>
						<div class="contentBx">
							<h2>Vedi studenti</h2>
							<a href="s1?z=6">Vai!</a>
						</div>
					</div>
				</div>

			</div>

			<div class="col-3 text-center">
				<div class="container7">
					<div class="card">
						<div class="imgBx">
							<img src="./Img/inserisci.png">
						</div>
						<div class="contentBx">
							<h2>Modifica studenti</h2>
							<a href="s1?z=7">Vai!</a>
						</div>
					</div>
				</div>

			</div>















		</div>

		<div class="row mt-5 justify-content-center">
			<div class="col-12 justify-content-center">
				<div class="text-center">
					<a href="s1?z=4" class=" mt-5"><button class=" btn btn-primary">Torna
							alla home</button></a>
				</div>
			</div>
		</div>
	</div>





</body>
</html>