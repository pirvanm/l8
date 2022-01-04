CUm folosim tinker

in proiectul nostru de laravel, avem 
php artisan tinker , ne va deschide o sesiune de terminal ce ne ajuta la testare,
similare cod

de exemplu vrem sa vedem toti utilizatori din tabele users
dupa ce am rulat "php artisan tinker" in interior putem defini urmatorul cod
$user = DB::table('name')
->get() 
// este pentru a ii spune sa ia toate datele ca o colectie..
pentru a vedea rezultatul acestei variabile putem folosi
dd($variabila)
dd($user)
Aditionat daca vrem sa vedem ce query de mysql a fost "construit" in spate in loc de 
get() putem folosim toSql() metoda de laravel....
$user = DB::table('name')
->toSql() 

Ce face dd () 
https://laraveldaily.com/echoing-dd-vs-var_dump-vs-print_r/