package principale;

public class Studente extends Recapiti {

	private String nome, cognome;
	private int matricola;

	public Studente(String nome, String cognome, int matricola, String cellulare, String citta) {
		// richiama i parametri della classe che stiamo estendento
		
		super(cellulare, citta);
		this.nome = nome;
		this.cognome = cognome;
		this.matricola = matricola;
	}

	public String getNome() {
		return nome;
	}

	public void setNome(String nome) {
		this.nome = nome;
	}

	public String getCognome() {
		return cognome;
	}

	public void setCognome(String cognome) {
		this.cognome = cognome;
	}

	public int getMatricola() {
		return matricola;
	}

	public void setMatricola(int matricola) {
		this.matricola = matricola;
	}
	
	public String toString() {
		String studente = "Ciao sono "+ this.nome + " " + this.cognome + " " +"sono la matricola: "
			            	          + this.matricola + "\n"+"il mio numero di telefono è: "
				                      + this.getCellulare()+" "+"e vivo a "+this.getCitta()+ "\n";

		return studente;
		
	}

}
