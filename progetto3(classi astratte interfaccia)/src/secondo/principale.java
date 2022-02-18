package secondo;

import java.util.ArrayList;
import java.util.Collection;
import java.util.List;

import modelli.Alunno;

public class principale {

	public static void main(String[] args) {

		ArrayList<Integer> valori = new ArrayList<Integer>();
		ArrayList<String> valore = new ArrayList<String>();

		valori.add(21);
		valori.add(34);
		valori.add(198);
		valore.add("Riccardo");
		valore.add("Armando");
		valore.add("Sandro");

		// System.out.println(valori.size());

		ArrayList<Object> misto = new ArrayList<Object>();

		misto.add(valori);
		misto.add(valore);

		List<Object> listaSpesa = new ArrayList<Object>();
		Collection<Integer> listac = new ArrayList<Integer>();

		listac.add(10);
		listaSpesa.add(misto);

		Alunno alex = new Alunno("Alex", "Alessandria", 100);
		Alunno michele = new Alunno("Michele", "Santopa", 101);
		Alunno claudia = new Alunno("Claudia", "Derfe", 102);

		ArrayList<Alunno> alunni = new ArrayList<Alunno>();

		alunni.add(michele);
		alunni.add(alex);
		alunni.add(claudia);

		// System.out.println(alunni.get(0).getCognome()); // in posizione 0 prendi il cognome

		for (Object alunno : alunni) {
			System.out.println(alunno);
		}
	}

}
