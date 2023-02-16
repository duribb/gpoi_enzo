/*
 * Per un corretto funzionamento del MOCK inserire un file di testo con estensione .txt
 * Dopo l'apertura il MOCK provvederà a stampare a video riga per riga sulla console
 */

import java.io.*;

public class mockLettoreFilePerTipo {
    public static void main(String[] args) throws IOException {
        BufferedReader reader = null;
        try {
            reader = new BufferedReader(new FileReader("prova.txt"));
            /*
                si può anche mettere il path all'interno del FileReader, in modo da leggere i file fuori
                dalla cartella del progetto, ma  all'interno delle cartelle alla quale abbiamo accesso
            */
        } catch (FileNotFoundException e) {
            System.out.println("Errore apertura file");
            System.exit(-1);
        }

        String line = reader.readLine();
        while (line != null) {
            System.out.println(line);
            line = reader.readLine();
        }
    }
}


 