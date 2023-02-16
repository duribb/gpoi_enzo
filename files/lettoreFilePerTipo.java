import java.io.BufferedReader;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;

public class lettoreFilePerTipo {
    public void letturaFile(String[] allPath) { //riceve come parametro un array di path, caso minimo: 1 path
        for (int i=0; i<allPath.length; i++){
            BufferedReader reader = null;
            try {
                reader = new BufferedReader(new FileReader()); //Inserire path cartella da analizzare
            } catch (FileNotFoundException e) {
                System.out.println("Errore apertura file");
                System.exit(-1);
            }
        }

    }
}
