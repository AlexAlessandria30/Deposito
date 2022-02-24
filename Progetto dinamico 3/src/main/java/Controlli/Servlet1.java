package Controlli;

import java.io.IOException;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;


import Sistema.Controllo;


@WebServlet("/S1")
public class Servlet1 extends HttpServlet {
	private static final long serialVersionUID = 1L;
       
  
    public Servlet1() {
        super();
        
    }
    RequestDispatcher rd;
	
	protected void doGet(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		Controllo generica = new Controllo();
	    String[] a =   generica.getArray();
		request.setAttribute("colleghi", a);
		
		rd=request.getRequestDispatcher("/Pagine/pagina1.jsp");
	    rd.forward(request, response);
	}


	protected void doPost(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		
	}

}
