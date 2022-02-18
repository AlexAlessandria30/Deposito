package principale;

public class Main {

	public static void main(String[] args) {
		//eredita anche gli attributi di recatipi anche se non lo stiamo usando

		Studente studente = new Studente("Mario", "Rossi", 1234, "3454433322","Roma"); 
		//Recapiti recapito = new Recapiti();
		
		
		
		System.out.println(studente);
		
		Studente studente1 = new Studente("Giorgio", "Blue", 1235, "34544321212","Roma"); 
		System.out.println(studente1);
		
		
	}

}
