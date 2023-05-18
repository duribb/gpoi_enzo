package enzo;

import java.io.*;
import java.nio.file.Path;
import java.util.ArrayList;
import java.util.regex.Matcher;
import java.util.regex.Pattern;

public class Input {



    public int trovaParolaDaFile(String parola, ArrayList<String> file) {
        for (String linea :
                file) {
            Pattern pattern = Pattern.compile(parola, Pattern.CASE_INSENSITIVE);
            Matcher matcher = pattern.matcher(linea);
            boolean matchFound = matcher.find();
            if (matchFound) {
                System.out.println("Match found");
                return 0;
            } else {
                System.out.println("Match not found");
                return 1;
            }
        }
        return 1;
    }
    public int trovaParolaDaStringa(String parola, String stringa){
        System.out.println("Sono entrato nella funzione trovaParolaDaStringa");
        Pattern pattern = Pattern.compile(parola, Pattern.CASE_INSENSITIVE);
        Matcher matcher = pattern.matcher(stringa);
        boolean matchFound = matcher.find();
        if(matchFound) {
            System.out.println("Match found");
            return 0;
        } else {
            System.out.println("Match not found");
            return 1;
        }
    }


    public void AnalizzaTutto(String nome_file_tags, String titolo, String path) throws IOException {
        System.out.println("Il path del file e': " + path);
        ArrayList<String> elenco_tags;
        elenco_tags = leggiFile(nome_file_tags);
        System.out.println("Elenco dei tag letti dal file: \n");
        System.out.println(elenco_tags);
        System.out.println("----------------");
        ArrayList<String> contenuto_file;
        contenuto_file = leggiFile(path);
        System.out.println("Elenco delle righe lette nel contenuto del file: \n");
        System.out.println(contenuto_file);
        System.out.println("-----------------");
        Tags tag = new Tags();
        System.out.println("Adesso analizzo titolo\n");
        for (String parola:
             elenco_tags) {
            System.out.println(parola);
            if(trovaParolaDaStringa(parola, titolo) == 0){
                System.out.println("ho trovato una parola nel titolo");
                tag.setTag(parola);
            }
            else if(trovaParolaDaFile(parola, contenuto_file) == 0){
                System.out.println("ho trovato una parola nel file");
                tag.setTag(parola);
            }

        }

        String nome_file_csv = "Tag.csv";
        File csv = new File(nome_file_csv);
        boolean fileExist = csv.exists();
        try (BufferedWriter writer = new BufferedWriter(new FileWriter(nome_file_csv, true))){
            if (fileExist) {
                writer.newLine();
            }
            writer.write(titolo + ";");
            writer.write(String.join(";", tag.getTag()));
        } catch (IOException e) {
            System.err.println("Error writing CSV file: " + e.getMessage());
        }
    }








    public ArrayList<String> confrontaConElenco(String parola, String nome_file) throws IOException {
        ArrayList<String> tags = new ArrayList<>();
        ArrayList<String> arrayList = leggiFile(nome_file);
        for (String word:arrayList) {
            if (trovaParolaDaStringa(word, parola) == 0){
                tags.add(word);
            }
        }
        return tags;
    }

    public ArrayList<String> leggiFile(String nome_file) throws IOException {
        BufferedReader reader = new BufferedReader(new FileReader(nome_file));
        ArrayList<String> elenco_tag = new ArrayList<String>();
        String line = reader.readLine();
        while(line!=null) {
            System.out.println(line);
            elenco_tag.add(line);
            line = reader.readLine();

        }
        return elenco_tag;
    }


}


