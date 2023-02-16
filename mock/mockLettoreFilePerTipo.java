/*
 * Per un corretto funzionamento del MOCK inserire un file di testo con estensione .txt
 * Dopo l'apertura il MOCK provvederà a stampare a video riga per riga sulla console
 */

import java.io.BufferedReader;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;

public class mockLettoreFilePerTipo {
    public static void main(String[] args) throws IOException {
        BufferedReader reader = null;
        try {
            reader = new BufferedReader(new FileReader("prova.txt"));
        } catch (FileNotFoundException e) {
            System.out.println("Errore apertura file");
        }

        String line = reader.readLine();
        while (line != null) {
            System.out.println(line);
            line = reader.readLine();
        }
    }
}
