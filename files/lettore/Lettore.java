class Lettore {
    public BufferedReader reader
    Lettore(String[] allPath){
        reader = null;
        for(int i=0; i<allPath.length; i++){
            try {
                reader = new BufferedReader(new FileReader(allPath[i])); //Inserire path cartella da analizzare
            } catch (FileNotFoundException e) {
                System.out.println("Errore apertura file");
                System.exit(-1);
            }
        }
    }
}