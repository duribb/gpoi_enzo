## progetto gpoi - enzo
##### Durigon, Rosso, Levrone, Mariotti

#### EPIC:

applicazione web che analizza un insieme di file assegnando loro dei tag relativi a contenuto, estensione ecc. L’applicazione lato client visualizza la totalità dei file analizzati con la possibilità di filtrarli per tag (uno o più). Inoltre, da la possibilità di scaricare una cartella contenente i file risultanti di tale ricerca.

#### Stories:

##### M
##### priorità 16.5

Motore di ricerca, all'interno dell'interfaccia web, in grado di filtrare per tag i file nell 'archivio e su richiesta restituisce un file zip dei file selezionati.

###### - interfaccia per ricerca tramite filtri (5)
###### - creazione e fornitura file zip (13)

##### S
##### priorità 1

Componente responsabile della gestione dell'interazione tra utente e base dati

###### - caricatore file sull'archivio remoto e sul relativo database (13)
###### - generatore query con dati (tag) forniti dalla barra di ricerca (8)
###### - interfaccia utente che riceve uno o più file in input (14)

##### E
##### priorità 2

Intelligenza artificiale che associa dei tag a un file analizzato, basandosi su un addestramento e anche su altri file già analizzati.

###### - prelevatore file dal database e dall'archivio (6.5)
###### - un lettore file per ogni tipo di file possibile da inserire (40)
###### - assegantore di tag (tramite parole chiave e altri file) (100)
###### - caricatore tag (assegati ai file) nel database (3)

##### I
##### priorità 100

Va curata l'interfaccia grafica in modo da essere il più possibile user friendly con facilità nel caricamento di file e nella ricerca per tag e con immediatezza nella visualizzazione dei risultati.

###### - caricamento file (8)
###### - ricerca per filtri (4)
###### - visualizzazione lista risultati (8)