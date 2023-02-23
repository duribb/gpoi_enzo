import java.io.BufferedReader;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;

public class lettoreFilePerTipo {
    public void letturaFile(String[] allPath) {
        for (int i=0; i<allPath.length; i++){
            BufferedReader reader = null;
            try {
                reader = new BufferedReader(new FileReader(allPath[i])); //Inserire path cartella da analizzare
            } catch (FileNotFoundException e) {
                System.out.println("Errore apertura file");
                System.exit(-1);
            }
        }

    }
}
