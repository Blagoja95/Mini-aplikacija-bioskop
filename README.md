# Mini aplikacija bioskop

- Aplikacija radjena za predmet `Programiranje web aplikacija i web servisi`
- Zadatak radjen u Oktobru 2021. godine.

## Zadatak:

Pomoću PHPa realizovati mini aplikaciju koja omogućava studentu sljedeće opcije:
logavanje na sistem, prikaz svih filmova koje može da gleda
(može da gleda samo filmove koje se prikazuju u bioskopu iz istog grada kao i student).
U okviru inforamcija o studentu potrebno je definisati grad u kome student živi.
Za svaki film definisati bioskop i grad u kome se film prikazuje.
Potrebno je za aplikaciju napisati kod koji formira potrebne tabele i popunjava ih inicijalnim podacima.

### Kreiranje baze podataka

Kada se svi fajlovi prebace u zeljenu lokaciju kao sto je u mom slucaju
htdocs (xampp) mozemo poceti sa kreiranjem baze, tabela i na kraju podataka.

U folderu 'db' nalaze se sve neophodne php skirpte za kreiranje baze kao i .sql tabele koje se mogu iskoristit u slucaju da skripte ne rade.

Ovaj link kreira bazu  
http://localhost/seminarski/db/kreirajBazu.php

Ovaj link kreira tabele i unosi podatke
http://localhost/seminarski/db/kreirajTabele.php

### LOGIN

Ulazimo na pocetnu straicu preko linka: http://localhost/seminarski/
i dobijamo login straicu u koju je neophodno unjeti korisnicko ime i lozinku.
Trenutno u bazi postoje dva korisnika sa podacima pomocu kojih se moze pristupiti.

Korisnicko ime i lozinka:

    1 korisnik:
        boka95
        123456789

    2 korisnik
        markan
        1234567890

Nakon unosa, podaci se provjeravaju i ako su ispravni dobijamo pristup i automatski budemo prosljedjeni na stranicu korisnik.php na kojoj se ispisuju svi podaci vezani za unesenog korisnika.
