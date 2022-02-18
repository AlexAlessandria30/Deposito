package dao;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.Scanner;

import IDao.IDaoStudenti;
import connessione.Connetti;
import modelli.Indirizzi;
import modelli.Studenti;
import principale.Generica;

public class DaoStudenti extends Connetti implements IDaoStudenti {
	Statement st=null;
	PreparedStatement pst=null;
	ResultSet rs=null;
	String sql;
	Connection conn;
	ArrayList<Studenti> arrayLS = new ArrayList<>();
	
	
	public ResultSet listaTuttiRS() {
		Connection connesso =connettiDB();
		try {
			sql="SELECT * FROM oggetto";
			st=connesso.createStatement();
		
			rs=st.executeQuery(sql);
			//connesso.close();
		} catch (SQLException e) {
			System.out.println("Tabella Inesistente");
		}
		
		return rs;
	}

	public ArrayList<Studenti> listaAL(ResultSet rs) {
		try {
			while(rs.next()){
				connettiDB();
				Studenti studente = new Studenti();
				studente.setNome(rs.getString("nome"));
				studente.setCognome(rs.getString("cognome"));
				studente.setCitta(rs.getString("citta"));
				studente.setTelefono(rs.getString("cellulare"));
				studente.setCf(rs.getString("cf"));
				studente.setDatanascita(rs.getString("nascita"));
				arrayLS.add(studente);
			}
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return arrayLS;
	}

	public Studenti creaStudente() {
		Studenti studente = new Studenti();
		
		studente.setNome(Generica.insTesto("Inserire il nome"));
		studente.setCognome(Generica.insTesto("Inserire il Cognome"));
		studente.setTelefono(Generica.insTesto("Inserire il Cellulare"));
		studente.setCf(Generica.insTesto("Inserire il CF"));
		studente.setCitta(Generica.insTesto("Inserire la Citta"));
		studente.setDatanascita(Generica.insTesto("Inserire la Nascita gg/mm/yyyy"));
		return studente;
	}

	public void salvaStudente(Studenti st ) {
		// la data in una tabella mysql si scrive in formato String
		String data=Generica.dataitaing(st.getDatanascita());
		sql="INSERT INTO oggetto (nome,cognome,citta,cellulare,cf,nascita) VALUES(?,?,?,?,?,?)";
		conn=connettiDB();
		
		try {
			pst=conn.prepareStatement(sql);
			pst.setString(1, st.getNome());
			pst.setString(2, st.getCognome());
			pst.setString(3, st.getTelefono());
			pst.setString(4, st.getCitta());
			pst.setString(5, st.getCf());
			pst.setString(6, data);
			pst.executeUpdate();
			conn.close();
		} catch (SQLException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		
	}

	
	public void vediListaArray(ArrayList<Studenti> arrst) {
		for (Studenti st : arrst) {
			System.out.println(st.getNome()+" "+st.getCognome()+" "+st.getTelefono()+" "+st.getDatanascita());
		}		
	}


	public Studenti creaStInd() {
		Studenti studente = new Studenti();
		Indirizzi ind = new Indirizzi();
		studente.setIndirizzo(ind);
		studente.setNome(Generica.insTesto("Inserire il nome"));
		studente.setCognome(Generica.insTesto("Inserire il Cognome"));
		studente.setTelefono(Generica.insTesto("Inserire il Cellulare"));
		studente.setCf(Generica.insTesto("Inserire il CF"));
		studente.setCitta(Generica.insTesto("Inserire la Citta"));
		studente.setDatanascita(Generica.insTesto("Inserire la Nascita gg/mm/yyyy"));
		studente.getIndirizzo().setIndirizzo(Generica.insTesto("Inserire Indirizzo"));
		return studente;
	}
	
	public int Scelta() {
		Scanner scanner = new Scanner(System.in);
		int valore = 0;
		boolean vero = true;

		while (vero) {

			

			try {
				valore = scanner.nextInt();
				scanner.nextLine();
				vero = false;

			} catch (Exception e) {
				System.out.println("Errore nella selezione reinserisci un numero");

			}
		}
		return valore;
	}
	
	public void EliminaStudenti (ArrayList<Studenti> arrst) {
		arrst.remove(Scelta());
		
	}

}