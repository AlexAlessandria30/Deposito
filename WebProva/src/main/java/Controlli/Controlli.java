package Controlli;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet("/prova")
public class Controlli extends HttpServlet {
	private static final long serialVersionUID = 1L;

	public Controlli() {

	}

	protected void doGet(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {

		String param = request.getParameter("a");
		System.out.println("Stringa: " + param);

		String scelta = request.getParameter("x");
		scelta = "JAVA";
		System.out.println( scelta);

		String scelta1 = request.getParameter("y");
		scelta1="JAVA EE";
		System.out.println(scelta1);

		String scelta2 = request.getParameter("z");
		scelta2 = "DATA BASE";
		System.out.println(scelta2);

	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		System.out.println("DO POST");
	}

}
