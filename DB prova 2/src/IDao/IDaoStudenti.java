package IDao;

import java.sql.ResultSet;
import java.util.ArrayList;
import modelli.Studenti;

public interface IDaoStudenti {
	// contiene metodi non implementati
		// lista tutti gli studenti
		public ResultSet listaTuttiRS();
		public ArrayList<Studenti> listaAL(ResultSet rs);
		public Studenti creaStudente();
		public Studenti creaStInd();
		public void salvaStudente(Studenti st);
		public void vediListaArray(ArrayList<Studenti> arrst);
		public void EliminaStudenti (ArrayList<Studenti> arrst);
}
