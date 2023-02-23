class trovaEstensione {
    public String trovaEstensione(String path){
        //Riceve in input un path, restituisce l'estensione
        int len = path.length();
        while (path.charAt(len-1) != '.'){
            len--;
        }
        return path.substring(len); //restituisce l'estensione
    }
}