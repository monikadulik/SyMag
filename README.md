# ![SyMag](https://image.ibb.co/enHDsq/SyMag.jpg)
SyMag jest prostym systemem zarządzania magazynem, zawierającym w sobie podstawowe funkcjonalności wymagane przy obsłudze nowoczesnych magazynów składowania oraz zarządzania ich stanem.

System powstaje w formie aplikacji webowej z użyciem frameworka _Laravel_

</br>
<p align="center">
<img src="https://i.ibb.co/jkB8hff/Zrzut-ekranu-z-2019-01-27-19-49-59.png">
</p>
</br></br>

## Rozwijana Funkcjonalność
- __Podgląd stanu magazynu__ - Użytkownik ma możliwość podejrzenia listy towarów dostępnej na stanie, ich liczby oraz umiejscowienia towarów na magazynie.

</br>
<p align="center">
<img src="https://i.ibb.co/pw81H16/Zrzut-ekranu-z-2018-12-05-20-44-30.png">
</p>
</br></br>

- __Podgląd listy zamówień__ - Użytkownik ma możliwość podglądu listy złożonych zamówień z podziałem na zamówienia oczekujące na płatność, będące w realizacji, oczekujące na wydanie oraz te przekazane do wysyłki.

</br>
<p align="center">
<img src="https://i.ibb.co/m8WLs2K/test.jpg">
</p>
</br></br>

- __Funkcja kompletacji paczki__ - Użytkownik pracujący na stanowisku kompletacji towarów do wysyłki może wybrać kolejne zamówienie z listy i przejść do trybu kompletacji paczki. Zostają mu wyświetlone kolejne pozycje zamówienia, ich umiejscowienie na magazynie oraz dostępna i zamówiona ilość.

</br>
<p align="center">
<img src="https://i.ibb.co/3TCLq6R/Zrzut-ekranu-z-2018-12-10-17-19-47.png">
</p>
</br></br>

- __Zapisywanie transakcji magazynowych__ (przyjęcia i wydania towaru) - Użytkownik ma możliwość aktualizacji ilości dostępnych na magazynie towarów w momencie ich przyjęcia bądź wydania.

</br>
<p align="center">
<img src="https://i.ibb.co/WG8bqQN/Zrzut-ekranu-z-2019-01-29-00-17-05.png">
</p>
</br></br>

- __Generacja raportów__ - Użytkownik ma możliwość wygenerowania raportu dotyczącego rotacji towarów na magazynie oraz wydajności pracowników.

</br>
<p align="center">
<img src="https://i.ibb.co/V3ryTSk/Zrzut-ekranu-z-2019-01-29-00-14-58.png">
</p>
</br></br>

- __Alerty informacyjne__ - po uprzedniej konfiguracji, system może powiadamiać użytkowników o kończących się zasobach magazynu. Taka funkcjonalność pozwala z wyprzedzeniem zamówić będące na wyczerpaniu materiały i uniknąć przerw w łańcuchu dostaw. System może także powiadamiać o występującej nadwyżce konkretnych produktów w celu wstrzymania kolejnych ich dostaw.

</br>
<p align="center">
<img src="https://i.ibb.co/5kJj7ST/Zrzut-ekranu-z-2019-01-05-01-25-58.png">
</p>
</br></br>


## Instalacja

- Skopiuj kod projektu do swojego lokalnego środowiska - `git clone`
- Przejdź do folderu w którym znajduje się teraz projekt -  `cd`
- Zainstaluj zależności composera (będąc w folderze projektu!) - `composer install`
- Stwórz własną kopię pliku .env - `cp .env.example .env`
- Wygeneruj klucz aplikacji - `php artisan key:generate`
- Utwórz bazę danych z której będzie mogła korzystać aplikacja (MySql) - `CREATE DATABASE dbname; USE dbname;`
- Skonfiguruj połączenie z utworzoną przed momentem bazą w pliku .env - `DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD`
- Wykonaj migracje tabel i zasil bazę danymi - `php artisan migrate --seed`
- Uruchom serwer lokalny - `php artisan serve`
- Ciesz się aplikacją po adresem `localhost:8000`
