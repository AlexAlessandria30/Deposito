package principale;

import java.sql.ResultSet;

import java.sql.SQLException;

import java.util.ArrayList;

import dao.DaoStudenti;

import modelli.Studenti;

public class Main {

	public static void main(String[] args) {
		boolean continua=true;
		Generica generica = new Generica();
		DaoStudenti daostudenti = new DaoStudenti();
		ResultSet listaRS=null;
		ArrayList<Studenti> listastuarray ;
	
		
		
		
		while(continua){
			generica.menu1();
			int scelta=generica.insNumero("Inserire una Scelta");
			
			switch (scelta) {
			case 0:
				continua=false;
				break;
			case 1:
				// inserire studenti
				listaRS = daostudenti.listaTuttiRS();
				listastuarray= daostudenti.listaAL(listaRS);
				
				daostudenti.vediListaArray(listastuarray);
				
				System.out.println();
				System.out.println("INSERIMENTO NUOVO STUDENTE");
				Studenti studente=daostudenti.creaStudente();
				daostudenti.salvaStudente(studente);
				break;
			case 2:
				Studenti s=daostudenti.creaStInd();
				System.out.println(s.getIndirizzo().getIndirizzo());
				break;
			case 3:
				
				
				//daostudenti.EliminaStudenti(listastuarray);
							
				break;
			case 4:
				listaRS = daostudenti.listaTuttiRS();
				try {
					System.out.println();
					while(listaRS.next()){
						System.out.println(listaRS.getString("nome")+" "
					    +listaRS.getString("cognome")+" "+listaRS.getString("citta")+" "+listaRS.getString("nascita"));
					}
					System.out.println();
				} catch (SQLException e) {
					
				}
				break;
			case 5:
					System.out.println();
					ResultSet risultato = daostudenti.listaTuttiRS();
					ArrayList<Studenti> lista = daostudenti.listaAL(risultato);
					daostudenti.vediListaArray(lista);
					System.out.println();
				break;
			}
		}

	}


}
