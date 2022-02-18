package Sistema;

import java.sql.Connection;

import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.Arrays;

import Connessioni.Connetti;
import JavaBean.IGenerica;
import JavaBean.Password;
import JavaBean.Persona;

public class Controllo extends Connetti implements IGenerica {
	public int Calcolo(int x, int y) {

		int risultato = x + y - (x / 2) + (y * 8) / 100 - (x / 10) - (y / 30) / 100;
		return risultato;

	}

	public int Numeromatricola(int x) {
		int matricola = x + 10 * 200 * 324 + 76 / 21 - 10;
		return matricola;
	}

	public String[] mostracolleghi() {
		String[] colleghi = { "Mario Rossi", "Luana Sada", "Franco Gendi", "Giovanni Ressa", "Flavia Zeta" };

		return colleghi;

	}

	public String[] mostraMateria() {
		String[] colleghi = { "Matematica", "Storia", "Italiano", "Geometria", "Inglese", "Francese", "Informarica" };

		return colleghi;

	}

	@Override
	public String toString() {
		return Arrays.toString(mostracolleghi());
	}

	// connessione al DB

	Statement st = null;
	PreparedStatement pst = null;
	ResultSet rst;
	String sql;
	Connection conn;
	ArrayList<Persona> arrayLS = new ArrayList<Persona>();

	public ResultSet listaTuttiRS() {
		Connection connesso = connettiDB();
		try {
			sql = "SELECT * FROM Persona";
			st = connesso.createStatement();

			rst = st.executeQuery(sql);
			// connesso.close();
		} catch (SQLException e) {
			System.out.println("Tabella Inesistente");
		}

		return rst;
	}

	@Override
	public Persona BeanP(String nome, String cognome, String dataN, String citta) {
		Persona persona = new Persona();
		persona.setNome(nome);
		persona.setCognome(cognome);
		persona.setDataN(dataN);
		persona.setCitta(citta);
		return persona;
	}

	@Override
	public void insertPersona(Persona persona) {
		// String data=Generica.dataitaing(st.getDataN());
		sql = "INSERT INTO Persona (nome,cognome,dataN,citta) VALUES(?,?,?,?)";
		conn = connettiDB();

		try {
			pst = conn.prepareStatement(sql);
			pst.setString(1, persona.getNome());
			pst.setString(2, persona.getCognome());
			pst.setString(3, persona.getDataN());
			pst.setString(4, persona.getCitta());
			pst.executeUpdate();
			conn.close();
		} catch (SQLException e) {
			e.printStackTrace();

		}

	}

	public ResultSet listaAL() {
		conn = connettiDB();
		sql = "SELECT * FROM Persona";

		try {
			st = conn.createStatement();
			rst = st.executeQuery(sql);

		} catch (SQLException e) {

			e.printStackTrace();
		}
		return rst;

	}

	public void vediListaArray(ArrayList<Persona> persone) {
	
		for (Persona st : persone) {
			System.out.println(st.getNome() + " " + st.getCognome() + " " + st.getDataN() + " " + st.getCitta());
		}
	}

	public Password BeanPass(String nome, String cognome, String email, String password) {
		Password persona = new Password();
		persona.setNome(nome);
		persona.setCognome(cognome);
		persona.setEmail(email);
		persona.setPassword(password);
		return persona;
	}

	@Override
	public void insertPassword(Password persona) {
		// String data=Generica.dataitaing(st.getDataN());
		sql = "INSERT INTO Password (nome,cognome,email,password) VALUES(?,?,?,?)";
		conn = connettiDB();

		try {
			pst = conn.prepareStatement(sql);
			pst.setString(1, persona.getNome());
			pst.setString(2, persona.getCognome());
			pst.setString(3, persona.getEmail());
			pst.setString(4, persona.getPassword());
			pst.executeUpdate();
			conn.close();
		} catch (SQLException e) {
			e.printStackTrace();

		}

	}

	public  Boolean verificaLogin(String email, String pass) {
		conn = connettiDB();
		sql = "SELECT * FROM Password WHERE email=? and password=? and name=?";
		Boolean  trovato = null;
		try {
			pst= conn.prepareStatement(sql);
			pst.setString(1, email);
			pst.setString(2, pass);
			rst=pst.executeQuery();
			trovato = rst.next();
			conn.close();
			} catch (Exception e) {
	
		}
		return trovato;
	}

}
