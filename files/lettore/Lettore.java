/*
* Per i file PDF servono 3 librerie, a seguire i link per il download:
* - http://www.java2s.com/example/jar/p/download-pdfbox201jar-file.html
* - http://www.java2s.com/Code/Jar/f/Downloadfontbox150jar.htm
* - http://www.java2s.com/Code/Jar/o/Downloadorgapachecommonsloggingjar.htm
* 
* Video: https://www.youtube.com/watch?v=DdzX835l7Ok
*/
package lettore;

import java.io.File;
import java.io.IOException;

import org.apache.pdfbox.pdmodel.PDDocument;
import org.apache.pdfbox.text.PDFTextStripper;


public class Lettore {
    public void gestioneFile(String path, String estensione) throws IOException{
        switch (estensione){
            case "txt":
                //I file txt vengono solamente spostati
                txt(path);
                break;
            case "pdf":
            	pdf(path);
            	break;
        }
    }

    private void txt(String path) {
        File fileDaSpostare = new File(path);
        File destinazioneFile = new File("fileSpostati");

        if (fileDaSpostare.exists() && destinazioneFile.exists()) { //Controllo l'esistenza del file e del percorso
            boolean success = fileDaSpostare.renameTo(new File(destinazioneFile, fileDaSpostare.getName())); //lo "rinonimo" in un altra posizione
            if (success) {
                System.out.println("File spostato con successo");
            } else {
                System.out.println("Spostamento del file non riuscito");
            }
        } else {
            System.out.println("ERRORE: il file e/o la destinazione non esistono");
        }
    }
    
    private void pdf(String path) throws IOException {
    	 try (PDDocument document = PDDocument.load(new File(path))) {

             // Create a PDFTextStripper object to extract text
             PDFTextStripper stripper = new PDFTextStripper();

             // Get the text content from the PDF document
             String text = stripper.getText(document);

             // Print the text content
             System.out.println(text);

         } catch (IOException e) {
             e.printStackTrace();
         }
    }


}
