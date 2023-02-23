class Lettore {
    BufferedReader lett(){
        BufferedReader reader = null;
        try {
            reader = new BufferedReader(new FileReader(allPath[i])); //Inserire path cartella da analizzare
        } catch (FileNotFoundException e) {
            System.out.println("Errore apertura file");
            System.exit(-1);
        }
    }
}