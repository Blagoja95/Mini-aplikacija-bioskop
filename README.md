# Mini aplikacija bioskop

- Aplikacija rađena za predmet `Programiranje web aplikacija i web servisi`
- Zadatak rađen u Oktobru 2021. godine.

## Zadatak:

Pomoću PHPa realizovati mini aplikaciju koja omogućava studentu sljedeće opcije:
logavanje na sistem, prikaz svih filmova koje može da gleda
(može da gleda samo filmove koje se prikazuju u bioskopu iz istog grada kao i student).
U okviru inforamcija o studentu potrebno je definisati grad u kome student živi.
Za svaki film definisati bioskop i grad u kome se film prikazuje.
Potrebno je za aplikaciju napisati kod koji formira potrebne tabele i popunjava ih inicijalnim podacima.

### Kreiranje baze podataka

Kada se svi fajlovi prebace u željenu lokaciju kao sto je u mom slučaju
htdocs (xampp) možemo početi sa kreiranjem baze, tabela i na kraju podataka.

U folderu 'db' nalaze se sve neophodne php skirpte za kreiranje baze kao i .sql tabele koje se mogu iskoristit u slučaju da skripte ne rade.

Ovaj link kreira bazu  
http://localhost/seminarski/db/kreirajBazu.php

Ovaj link kreira tabele i unosi podatke
http://localhost/seminarski/db/kreirajTabele.php

### LOGIN

Ulazimo na početnu stranicu preko linka: http://localhost/seminarski/
i dobijamo login stranicu u koju je neophodno unjeti korisničko ime i lozinku.
Trenutno u bazi postoje dva korisnika sa podacima pomoću kojih se može pristupiti.

Korisničko ime i lozinka:

    1 korisnik:
        boka95
        123456789

    2 korisnik
        markan
        1234567890

Nakon unosa, podaci se provjeravaju i ako su ispravni dobijamo pravo na pristup i automatski budemo prosljeđeni na stranicu korisnik.php na kojoj se ispisuju svi podaci vezani za unesenog korisnika.
