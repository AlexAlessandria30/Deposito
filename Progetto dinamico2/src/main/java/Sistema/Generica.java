package Sistema;

import java.text.ParseException;
import java.text.SimpleDateFormat;
import java.util.Date;
import java.util.Scanner;

public class Generica {

	 
	

	

	
	public static String dataitaing(String dataN){
		String dataingstring=null;
		SimpleDateFormat fit = new SimpleDateFormat("dd/MM/yyyy");
		SimpleDateFormat fing = new SimpleDateFormat("yyyy-MM-dd");
		try {
			Date dtit = fit.parse(dataN);
			dataingstring=fing.format(dtit);						
		} catch (ParseException e) {
			
			e.printStackTrace();
			System.out.println("Errore data");
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
