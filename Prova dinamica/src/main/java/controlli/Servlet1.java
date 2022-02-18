package controlli;

import java.io.IOException;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

@WebServlet("/menu") // Annotation

public class Servlet1 extends HttpServlet {
	private static final long serialVersionUID = 1L;

	public Servlet1() {
		super();

	}

	protected void doGet(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		String indice = request.getParameter("z");
		switch (indice) {
		case "1":
			String x = request.getParameter("x");
			String y = request.getParameter("y");
			System.out.println(x + " " + y);

			break;
		case "2":
			System.out.println("Pagina delle penne");
			break;
		case "3":
			System.out.println("Pagina somma");
			System.out.println("La somma è " + (100 + 100));

			break;

		default:
			break;
		}
		System.out.println();
	}

	protected void doPost(HttpServletRequest request, HttpServletResponse response)
			throws ServletException, IOException {
		System.out.println("doPost");
	}

}
