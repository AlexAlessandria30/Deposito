package principale;


import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.Scanner;

public class Generica {
	 Scanner input = new Scanner(System.in);
	 static Scanner line = new Scanner(System.in);
	
	 // generica
	public int insNumero(String testo){
		int valoreN = 0;
		boolean ciclo=true;		
		while(ciclo){
			try {
				System.out.println(testo);
				String valore=input.nextLine();
				valoreN = Integer.parseInt(valore);
				ciclo=false;
			} catch (Exception e) {
				// TODO: handle exception
			}		
		}
		return valoreN;
	}
	
	public void menu1(){
		System.out.println("1-Inserimento Studenti ");
		System.out.println("2-Inserisci Studente e Indirizzo");
		System.out.println("3-Elimina Studente");
		System.out.println("------");
		
		System.out.println("4-Lista Studenti ResultSet");
		System.out.println("5-Lista Studenti ArrayList");
		System.out.println(" ----");
		System.out.println("0-Termina");
		System.out.println();
	}
	// ritorna una stringa - generica
	public  static String insTesto(String testo){
		System.out.println(testo);
		String inputT = line.nextLine();
		return inputT;
		
	}
	
	public static String dataitaing(String data){
		String dataingstring=null;
		SimpleDateFormat fit = new SimpleDateFormat("dd/MM/yyyy");
		SimpleDateFormat fing = new SimpleDateFormat("yyyy-MM-dd");
		try {
			Date dtit = fit.parse(data);
			dataingstring=fing.format(dtit);						
		} catch (ParseException e) {
			// TODO Auto-generated catch block
			e.printStackTrace();
		}
		return dataingstring;		
	}
	
	public static boolean verificaMail(String mail) {
		boolean esatto = false;
		String regex = "^[\\w-_\\.+]*[\\w-_\\.]\\@([\\w]+\\.)+[\\w]+[\\w]$";
		esatto = mail.matches(regex);
		return esatto;
		
	}

}