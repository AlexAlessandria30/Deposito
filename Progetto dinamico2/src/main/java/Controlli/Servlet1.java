package Controlli;

import java.io.IOException;


import java.sql.ResultSet;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import Connessioni.Connetti;
import JavaBean.Persona;
import Sistema.Controllo;


@WebServlet({ "/Servlet1", "/s1" })
public class Servlet1 extends HttpServlet {
	private static final long serialVersionUID = 1L;

	public Servlet1() {
		super();
		// TODO Auto-generated constructor stub
	}

	RequestDispatcher rd;
	ResultSet rs;

	protected void doGet(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {

		String indice = request.getParameter("z");

		switch (indice) {
		case "1":
			String s = request.getParameter("s");
			request.setAttribute("Studente", s);
			request.setAttribute("corso", "Corso Servlet");
			
			Controllo generico = new Controllo();

			int c = generico.Calcolo(21, 1230);
			request.setAttribute("calcolo", c);

			int matricola = generico.Numeromatricola(15);
			request.setAttribute("matricola", matricola);

			Controllo generica2 = new Controllo();
			String[] materia = generica2.mostraMateria();
			request.setAttribute("materia", materia);

			rd = request.getRequestDispatcher("/Pagine/Studente.jsp");
			rd.forward(request, response);

			break;
		case "2":
			String doc = request.getParameter("d");
			request.setAttribute("Docente", doc);
			request.setAttribute("corso", "Corso Servlet");

			Controllo generico1 = new Controllo();
			int c1 = generico1.Calcolo(21, 1230);
			request.setAttribute("calcolo", c1);

			rd = request.getRequestDispatcher("/Pagine/Docente.jsp");
			rd.forward(request, response);
			break;
		case "3":
			Controllo generica = new Controllo();
			String[] a = generica.mostracolleghi();
			request.setAttribute("colleghi", a);

			rd = request.getRequestDispatcher("/Pagine/mostraDocenti.jsp");
			rd.forward(request, response);
			break;
		case "4":
			rd = request.getRequestDispatcher("./Index.jsp");
			rd.forward(request, response);
			break;
		case "5":

			rd = request.getRequestDispatcher("/Pagine/inserisciAlunno.jsp");
			rd.forward(request, response);
			break;
		case "6":
			
			Controllo controllo = new Controllo();
			
			
			rs = controllo.listaAL();
			request.setAttribute("Studenti", rs);
			
			rd = request.getRequestDispatcher("/Pagine/tuttGliStudenti.jsp");
			rd.forward(request, response);
			
			break;
			
		case"7":
			Controllo controllo1 = new Controllo();
			rs=controllo1.listaAL();
			request.setAttribute("listast", rs);
			
			
			rd = request.getRequestDispatcher("/Pagine/modificaStd.jsp");
			rd.forward(request, response);
			
			break;
			
		default:
			break;

		}

	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		
		Connetti connetto = new Connetti();
		connetto.connettiDB();
		
		String nome = request.getParameter("nome");
		String cognome = request.getParameter("cognome");
		String dataN = request.getParameter("dataN");
		String citta = request.getParameter("citta");
		
		Persona persona = new Persona();
		persona.setNome(nome);
		persona.setCognome(cognome);
		persona.setDataN(dataN);
		persona.setCitta(citta);
	
	
		Controllo generico = new Controllo();
		generico.BeanP(nome, cognome, dataN,citta);
		generico.insertPersona(persona);
		

		rd = request.getRequestDispatcher("./Pagine/Docente.jsp");
		rd.forward(request, response);

	}

}
