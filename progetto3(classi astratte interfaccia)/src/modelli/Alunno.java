package modelli;

public class Alunno {
	String nome , cognome;
	int matricola;
	
	
	
	public Alunno(String nome, String cognome, int matricola) {
		super();
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
	
	
	@Override
	public String toString() {
		return "Alunno [nome= " + nome + ", cognome= " + cognome + ", matricola= " + matricola + "]";
	}

	

}
