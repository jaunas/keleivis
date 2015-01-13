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
Tak jak lokalizacja +info charakterystyczne dla wydarzeń:
* Data (albo przedział)
* Godzina (albo przedział)
* Zamiast miejsca - lokalizacja

#### Translokacja
Opisuje sposób przebycia drogi z A do B
* Miejsce startu
* Miejsce zakończenia
* Środek transportu
* Godzina i data rozpoczęcia
* Godzina i data zakończenia
* Przebyte km
* Komentarz

#### Dodatkowe informacje
Kiedy użytkownik dodaje miejsce, lokalizację albo wydarzenie. system proponuje dostępne w bazie, a jeśli ich nie ma, użytkownik je tworzy uzupełniając jak największą ilością informacji. Wtedy system daje do wyboru, czy to jest publiczne - każdy może odwiedzić, uczestniczyć, czy może prywatne - jak np. stancja Romana, domówka. Domyślnie system proponuje publiczne i wtedy to trafia do zatwierdzenia przez administratora, a ten upublicznia po zweryfikowaniu.

Baza danych na wstępie będzie potężna, trzeba będzie zaimportować jak najwięcej miejsc z Polski, a do tego jeszcze będą dochodzić dane spoza kraju. Dodatkowo użytkownicy będą dodawać masę danych. Może to znacznie spowolnić działanie serwisu, ale jak to mówi Agatka: my się tym nie przejmujemy :)

### Projekt bazy danych

#### Miejsca - places
Tabela z miejscami

Pole|Opis|Typ|Dodatkowe informacje
----|----|---|--------------------
id|identyfikator|int|
name|nazwa|string|
geo_lat|szerokość geograficzna|float|
geo_lng|długość geograficzna|float|
place_type_id|typ|int|klucz obcy do tabeli z typami (państwo, gmina, województwo, ...)

#### Typy miejsc - place_types
Tabela z typami miejsc (państwo, gmina, województwo, ...)

Pole|Opis|Typ|Dodatkowe informacje
----|----|---|--------------------
id|identyfikator|int|
name|nazwa|string|
