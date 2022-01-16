public class Pizza {
    String impasto;
    String salsa;
    String contimento;
    String extra;
    String extra1;

    Pizza( String impasto){

        this.impasto = impasto;
        System.out.println("Impasto scelto " + this.impasto);

    }

    Pizza(String impasto , String salsa){

        this.impasto = impasto;
        this.salsa = salsa;
        System.out.println("Impasto scelto "+ this.impasto + " e la salsa scelta è " + this.salsa );


    }
    
    Pizza(String impasto , String salsa, String contimento){

        this.impasto = impasto;
        this.salsa = salsa;
        this.contimento = contimento;
        System.out.println("Impasto scelto "+ this.impasto + " e la salsa scelta è " + this.salsa + " contimento " + this.contimento);

    }

    Pizza(String impasto , String salsa, String contimento, String extra){

        this.impasto = impasto;
        this.salsa = salsa;
        this.contimento = contimento;
        this.extra = extra;
        System.out.println("Impasto scelto "+ this.impasto + " e la salsa scelta è " + this.salsa + " contimento " + this.contimento + "con " + this.extra);

    }

    Pizza(String impasto , String salsa, String contimento, String extra, String extra1){

        this.impasto = impasto;
        this.salsa = salsa;
        this.contimento = contimento;
        this.extra = extra;
        this.extra1 = extra1;

        System.out.println("Impasto scelto "+ this.impasto + " e la salsa scelta è " + this.salsa + " contimento " + this.contimento + " con " + this.extra + " e " + this.extra1 );

    }
}

