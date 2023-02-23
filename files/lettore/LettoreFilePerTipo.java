import java.io.BufferedReader;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;

import "TrovaEstensione.java";

public class lettoreFilePerTipo extends Lettore {
    public void letturaFile(String[] allPath) {
        for (int i=0; i<allPath.length; i++){
            TrovaEstensione te = new TrovaEstensione;
            String estensione = te.trovaEstensione(allPath[i]);

            gestisciEstensione(estensione);
        }

    }

    private void gestisciEstensione(String est, String path){
        switch(est){
                case txt:
                case csv:
                case pdf:
                case docx:
                /*
                case html:
                case css:
                case c:
                case cpp:
                */
            }
    }

    private void estensioneTxt(String path){
        
    }
}
