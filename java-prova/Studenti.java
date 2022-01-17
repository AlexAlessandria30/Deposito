public class Studenti extends Persona {

    String materiaPreferita;

    Studenti(String nome, String cognome, String materiaPreferita){
        super(nome , cognome);
        this.materiaPreferita = materiaPreferita;
    }

    void Presentazione(){
        System.out.println("Ciao sono  " + this.nome +" e la mia mataria preferita è " + this.materiaPreferita );
    }
    

    @Override

    void Giorno (){
        System.out.println("Buongiorno");
    }
}
