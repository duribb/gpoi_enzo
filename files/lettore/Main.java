package lettore;

import java.io.IOException;

public class Main {

	public static void main(String[] args) throws IOException {
		String path = "Simplefile.pdf";

        TrovaEstensione te = new TrovaEstensione();
        String esten = te.nomeEstensione(path);
        System.out.println("L'estensione trovata è: " + esten);
        
        Lettore l = new Lettore();
        l.gestioneFile(path, esten);
	}
}
