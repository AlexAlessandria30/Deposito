<%@ page language="java" contentType="text/html; charset=UTF-8"
	pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Inserisci Persona</title>

<link
	href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
	rel="stylesheet"
	integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
	crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="Style.css">

</head>
<body>



	<div class="container ">
		<div class="row justify-content-center">
			<div class="col-12 col-md-6">



				<h1 class="text-center mt-2">Benvenuto</h1>
				<h2 class="text-center">Inserire Studente</h2>

				<form action="s1?z=1" method="post" class="">
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
						<label class="form-label">Città</label> <input type="text"
							name="citta" class="form-control" id="cognome"
							aria-describedby="form">
					</div>

					<div class="mb-3">
						<label class="form-label">Data di nascita</label> <input
							type="date" name="dataN" class="form-control" id="date"
							aria-describedby="form">
					</div>

					<button type="submit" class="btn btn-primary mb-2 ">Submit</button>

				</form>


			</div>
			<a href="s1?z=2" class="text-center mt-5"><button
					class=" btn btn-primary">Torna alla home Docente</button></a> <a
				href="s1?z=4" class="text-center mt-5"><button
					class=" btn btn-primary">Torna alla home</button></a>
		</div>

	</div>

</body>
</html>