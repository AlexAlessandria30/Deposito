// scrittura delle principali funzioni

// import java.util.Scanner;

public class Main {

    public static void main(String[] args) {

        // System.out.println("x");

        // Scanner scanner = new Scanner(System.in);

        // System.out.println("Qual'è il tuo nome?");
        // String nome = scanner.nextLine();

        // System.out.println("Qual'è il tuo cognome?");
        // String cognome = scanner.nextLine();

        // System.out.println("Qual'è la tua eta?");
        // int eta = scanner.nextInt();
        // scanner.nextLine();

        // System.out.println("In che citta vivi?");
        // String citta = scanner.nextLine();

        // System.out.println("Ciao " + nome + " " + cognome);
        // System.out.println("Hai " + eta + " anni");
        // System.out.println("Vivi a " + citta);

        // condizioni con il switch

        // String nomi = "Luca";

        // switch (nomi) {
        // case "Luca":
        // System.out.println("Ciao luca");
        // break;
        // case "MArco":
        // System.out.println("Ciao MArco");
        // break;
        // case "Giorgio":
        // System.out.println("Ciao Giorgio");
        // break;

        // default:
        // System.out.println("Non ti conosco");
        // break;
        // }

        // // if else if ed else condizioni

        // short numero = 1;

        // if (numero < 10) {
        // System.out.println("il numero è minore");

        // } else if (numero > 10) {
        // System.out.println("il numero è maggiore");

        // } else {
        // System.out.println("non trovo il numero");
        // }

        // // ciclo while

        // int i = 0;
        // while (i < 5) {
        // System.out.println(i);
        // i++;
        // }

        // // cicli do while

        // do {
        // System.out.println("dowhile" + i);
        // } while (i < 0);

        // // array

        // // dichiarare e inizializzare

        // int[] numeri = new int[2];

        // numeri[0] = 1;
        // numeri[1] = 2;

        // // unico passaggio

        // int[] valori = { 10, 20, 30 };

        // // foreach con array

        // for (int valore: valori) {
        // System.out.println(valore);
        // }

        // //for con array

        // for(int j = 0 ; j < numeri.length ; j++){
        // System.out.println(numeri[j]);

        // }

        Persona persona1 = new Persona("Luca", "Rossi", 22, "Rosso");
        Persona persona2 = new Persona("Jgiorgio", "reed", 234, "nero");

        System.out.println(persona1);
        System.out.println(persona2);

        persona1.saluta(persona2); //passiomo gli oggetti come parametri delle funzioni

        Pizza pizza1 = new Pizza("integrale");
        Pizza pizza2 = new Pizza("Classico", "Sugo", "Mozzarella", "Piccante", "Salame");

    }
}