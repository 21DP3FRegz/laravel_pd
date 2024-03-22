- Kas ir API

Programmu savstarpējās mijiedarbības interfejs

- Kā deklarēt mainīgo PHP?

$mainigais = "vertība";

- Kādu arhitekturu izmanto Laravel?

Controller -> View -> Route -> Controller <-> Model <-> Db

View - ko redz user
Route - savieno pieprasījumus ar kontrolieri
Controller - pārvalda datus
Model - glaba datus
Db - datu bāze

- Kas ir ORM, kāpēc to izmanto tīra SQL vietā?

Mijiedarbību ar datubāzi caur modeliem.
Izmanto, jo tas ir ērtāk neka katru reizi rakstīt sql pieprasījumus.

- Eloquent ORM pieprasījums

User::where('rating', '>', 4)->get();