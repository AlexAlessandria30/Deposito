public class Persona {

    String nome ;
    String cognome ;
   


    Persona(String nome , String cognome ){
        
        this.nome = nome;
         this.cognome = cognome;
        
    }

    void saluta(Persona personaDaSalutare){
        System.out.println("Ciao  " +personaDaSalutare.nome+ " sono "+ nome);
    }

    void cammina (){
        System.out.println("Sto camminando .....");
    }

    void Giorno (){
        System.out.println("ciao");
    }
    
    public String toString(){
        String persona = "Ciao sono  " + this.nome + " " +this.cognome;

        return persona;
    }



    
}
