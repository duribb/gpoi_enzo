package lettore;

public class TrovaEstensione {
	public String nomeEstensione(String path){
        //Riceve in input un path, restituisce l'estensione
        int len = path.length();
        while (path.charAt(len-1) != '.'){
            len--;
        }
        return path.substring(len); //restituisce l'estensione
    }
}
