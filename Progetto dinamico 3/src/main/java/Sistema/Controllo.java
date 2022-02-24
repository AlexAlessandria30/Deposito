package Sistema;

import JavaBean.IGenerica;

public class Controllo implements IGenerica{

	@Override
	public String[] getArray() {
	
		String[] nomi = { "Mario Rossi", "Luana Sada", "Franco Gendi", "Giovanni Ressa", "Flavia Zeta" };
		
		return nomi;
	}

}
