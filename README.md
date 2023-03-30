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


##### spiegazione non sintetica del funzionamento:

(S3) l'utente carica i file dalla pagina web
(S1) i file vengono caricati sull archivio e nomi e path sul db
(E1) enzo tramite un batch sposta i file in una cartella apposita, 
    utilizza il (E2) lettore file in base al tipo del file (che restituisce un txt), 
    analizza i txt e (E3) assegna i tag al file
(E4) i txt vengono eliminati e i file spostati in una cartella del tipo 'analizzati' e il db viene caricato con path e tag
(M1) l'utente può selezionare alcuni tag e (S2) viene creata una query apposita da inviare al db(A) i file vengono prelevati dall archivio (in base ai risultati della query) e (M2) viene creato uno zip da restituire all utente che può essere scaricato.

##### HP 
tutti i pc/utenti collegati alle rete possono caricare i file e accedere alla ricerca per tag (con le varie pagine di visualizzazione), ma enzo gira solo su uno(lo stesso dove è situato il db).


##### git e features:

### M
#### - interfaccia per ricerca tramite filtri (5)
#### - creazione e fornitura file zip (13)

### S
#### - caricatore file sull'archivio remoto e sul relativo database (13)
caricatoreFileArhcivioDb.php
#### - generatore query con dati (tag) forniti dalla barra di ricerca (8)
elaboratoreDiRicerca.php

#### - interfaccia utente che riceve uno o più file in input (14)
interfacciaCaricamentoUtente.html

### E
#### - prelevatore file dal database e dall'archivio (6.5)
waitingToRaw.txt
waitingToRaw.bat
rawToProcessed.txt
rawToProcessed.bat
#### - un lettore file per ogni tipo di file possibile da inserire (40)
lettoreFilePerTipo.java
TrovaEstensione.java
#### - assegantore di tag (tramite parole chiave e altri file) (100)
#### - caricatore tag (assegati ai file) nel database (3)

### I
#### - caricamento file (8)
#### - ricerca per filtri (4)
#### - visualizzazione lista risultati (8)

### ALERT
scriptCreazioneDB.sql
directory 'archivio'
