public class Persona {

    String nome ;
    String cognome ;
    int eta ;
    String colorePreferito;


    Persona(String nome , String cognome , int eta , String colorePreferito){
        
        this.nome = nome;
         this.cognome = cognome;
         this.eta = eta;
         this.colorePreferito = colorePreferito;
    }

    void saluta(Persona personaDaSalutare){
        System.out.println("Ciao  " +personaDaSalutare.nome+ " sono "+ nome);
    }

    void cammina (){
        System.out.println("Sto camminando .....");
    }
    
    public String toString(){
        String persona = "Ciao sono  " + this.nome + " " +this.cognome + " ho "+ this.eta + " anni e il mio colore preferito è " + this.colorePreferito ;

        return persona;
    }



    
}
