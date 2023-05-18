package enzo;
import java.io.BufferedWriter;
import java.io.File;
import java.io.FileWriter;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.io.IOException;
import java.nio.file.DirectoryIteratorException;
import java.nio.file.DirectoryStream;




public class Main {
    public static void main(String[] args) {
        Input input = new Input();
    // "/home/folder/src/"
        try (DirectoryStream<Path> stream = Files.newDirectoryStream(Paths.get("cartella/"))) {
            String nome_file;
            File file1;
            for (Path file : stream) {
                nome_file =  file.getFileName().toString();
                System.out.println("Il nome del file selezionato dovrebbe essere: " + nome_file);
                file1 = new File(String.valueOf(file));
                input.AnalizzaTutto("parole_ricerca.txt", nome_file, file.toFile().getPath());
            }


        } catch (IOException | DirectoryIteratorException ex) {
            System.err.println(ex);
        }
    }
}