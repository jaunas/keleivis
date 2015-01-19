# keleivis
## Aplikacja php do relacjonowania podróży

### Podstawowe informacje

Portal pozwalający użytkownikow wprowadzanie planów swoich podróży, zrealizowanych podróży lub wprowadzanie informacji na bieżąco podczas podróży.

Schemat działania:

1. Użytkownik loguje się do portalu.
1. Dodaj podróż (planuję, sprawozdaję, realizuję).
1. Miejsce startu.
1. Jadę
1. Miejsce pośrednie
1. Jadę
  - ...
1. Jadę
1. Miejsce zakończenia.

Do każdego miejsca można dodać lokalizacje, które się tam zwiedziło, wydarzenia, w których się uczestniczyło.

Do każdej translokacji można dodać informację o środku transportu, przebytej odległości itp.

Zarówno do miejsca, lokalizacji wydarzenia, translokacji można dodać obszerny komentarz.

Użytkownicy tworzą społeczność:
* mogą pozwolić na podgląd swojej podróży określonej grupie (znajomym, całej społeczności itp.)
* mogą wspólnie uczestniczyć w podróży

Dostęp **tylko** dla zalogowanych użytkowników.

#### Miejsce
Hierarchiczna drzewiasta struktura  
Polska -> woj. podlaskie -> pow. Suwałki -> Suwałki  
Polska -> Suwalszczyzna -> Suwałki
* Nazwa
* Położenie geograficzne (współrzędne)
* Typ (państwo, powiat, gmina, miasto, wieś, dzielnica, osiedle, stan, obwód, kraj itp.)

#### Lokalizacja
Jakieś muzeum, restauracja, park, cokolwiek.
* Nazwa
* Współrzędne geograficzne
* Miejsce (przypisana do możliwie najniższego szczebla w hierarchii miejsc)
* Dodatkowe info

#### Wydarzenie
* Nazwa
* Data (albo przedział)
* Godzina (albo przedział)
* Lokalizacja

#### Translokacja
Opisuje sposób przebycia drogi z A do B
* Miejsce zakończenia
* Środek transportu
* Godzina i data rozpoczęcia
* Godzina i data zakończenia
* Przebyte km
* Komentarz

#### Podróż
Plan, sprawozdanie, realizacja. Ze względu na to, że w danej podróży może uczestniczyć więcej niż jeden użytkownik, tabela będzie połączona relacją wiele do wielu z tabelą użytkowników.
* Nazwa
* Referencja do pierwszego miejsca
* Komentarz (opis)

#### Miejsce dla podróży
Odnosić będzie się do miejsca i będzie zawierać dodatkowo informacje dla konkretnej podróży.
* Referencja do translokacji prowadzącej z tego miejsca

#### Użytkownik
Informacje o użytkowniku
* Imię
* Nazwisko
* E-mail
* Typ użytkownika
* Jakieś inne duperele

#### Dodatkowe informacje
Kiedy użytkownik dodaje miejsce, lokalizację albo wydarzenie. system proponuje dostępne w bazie, a jeśli ich nie ma, użytkownik je tworzy uzupełniając jak największą ilością informacji. Wtedy system daje do wyboru, czy to jest publiczne - każdy może odwiedzić, uczestniczyć, czy może prywatne - jak np. stancja Romana, domówka. Domyślnie system proponuje publiczne i wtedy to trafia do zatwierdzenia przez administratora, a ten upublicznia po zweryfikowaniu.

Baza danych na wstępie będzie potężna, trzeba będzie zaimportować jak najwięcej miejsc z Polski, a do tego jeszcze będą dochodzić dane spoza kraju. Dodatkowo użytkownicy będą dodawać masę danych. Może to znacznie spowolnić działanie serwisu, ale jak to mówi Agatka: my się tym nie przejmujemy :)

### Projekt bazy danych

#### Miejsca - place
Tabela z miejscami

Pole|Opis|Typ|Dodatkowe informacje
----|----|---|--------------------
id|identyfikator|int|
name|nazwa|string|
geo_lat|szerokość geograficzna|float|
geo_lng|długość geograficzna|float|
place_type_id|typ|int|klucz obcy do tabeli z typami (państwo, gmina, województwo, ...)
comment|dodatkowe informacje|text|

#### Typy miejsc - place_type
Tabela z typami miejsc (państwo, gmina, województwo, ...)

Pole|Opis|Typ|Dodatkowe informacje
----|----|---|--------------------
id|identyfikator|int|
name|nazwa|string|
comment|dodatkowe informacje|text|

#### Miejsca<->miejsca - place_place
Tabela porządkująca miejsca w graf w celu utworzenia drzewiastej struktury

Pole|Opis|Typ|Dodatkowe informacje
----|----|---|--------------------
parent_id|identyfikator rodzica|int|
child_id|identyfikator dziecka|int|

#### Lokalizacje - localization
Tabela z lokalizacjami przypisanymi do miejsc

Pole|Opis|Typ|Dodatkowe informacje
----|----|---|--------------------
id|identyfikator|int|
name|nazwa|string|
geo_lat|szerokość geograficzna|float|
geo_lng|długość geograficzna|float|
place_id|identyfikator miejsca|int|możliwie najniżej w hierarchii miejsc
comment|dodatkowe informacje|text|

#### Wydarzenia - event
Tabela z wydarzeniami przypisanymi do lokalizacji

Pole|Opis|Typ|Dodatkowe informacje
----|----|---|--------------------
id|identyfikator|int|
name|nazwa|string|
date_start|data rozpoczęcia|date|
date_end|data zakończenia|date|jeśli podana to przedział
time_start|czas rozpoczęcia|time|
time_end|czas zakończenia|time|jeśli podany to przedział
localization_id|id lokalizacji|int|
comment|dodatkowe informacje|text|

#### Translokacja - move
Tabela z informacją o przebytej drogi z jednego miejsca do innego

Pole|Opis|Typ|Dodatkowe informacje
----|----|---|--------------------
id|identyfikator|int|
place_end_id|id miejsca zakończenia|int|
time_start|czas rozpoczęcia|datetime|
time_end|czas zakończenia|datetime|
travel_type_id|id środka transportu|int|samochód, tramwaj, piechota, autostop, samolot, ...
distance|przebyta odległość|float|zapisane w km
comment|dodatkowe informacje|text|

Trzeba jeszcze rozkminić jak połączyć dla konkretnej podróży kolejność miejsce->jazda->miejsce->jazda itd. Poza tym nie mogą to być miejsca z tabeli place, bo one są publiczne, a ktoś mógłby chcieć jakiś komentarz do tego walnąć.

#### Podróż - journey
Tabela z podróżami (plany, sprawozdania i uzupełniane na bieżąco)

Pole|Opis|Typ|Dodatkowe informacje
----|----|---|--------------------
id|identyfikator|int|
name|nazwa|string|
journey_place_start_id|id miejsca rozpoczęcia podróży|int|
comment|dodatkowe informacje|string|

#### Miejsce dla podróży - place_for_journey
Tabela z miejscami dla konkretnych podróży

Pole|Opis|Typ|Dodatkowe informacje
----|----|---|--------------------
id|identyfikator|int|
place_id|id miejsca z tabeli place|int|
move_to_id|id translokacji prowadzącej z tego miejsca|int|

#### Użytkownik - user
Tabela z użytkownikami

Pole|Opis|Typ|Dodatkowe informacje
----|----|---|--------------------
id|identyfikator|int|
login|login|string|
password|hasło|string|sha1?
salt|sól do hasła|string|
f_name|imię|string|
l_name|nazwisko|string|
email|e-mail|string|
user_type_id|typ użytkownika|int|
...|...|...|**do uzupełnienia**

#### Podsumowanie
Hm, na razie tyle przychodzi mi do głowy. Pora na technologie.

### Technologie

#### Framework
Ze znanych frameworków najlepiej orientuję się w Symfony2 więc będzie to w nim napisane. Myślałem, żeby stworzyć REST API w oparciu o Symfony2 i stronę kliencką o AngularJS, ale to chyba ewentualnie jak skończę to pisać, to przerobię to na REST API. Póki co - po prostu Symfony2.

Do stworzenia wyglądu oprę się o Bootstrap, w późniejszym etapie będę optymalizował wygląd pod responsywność.

### Do dzieła!
