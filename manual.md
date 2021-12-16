#1 instalare laravel 
https://laravel.com/docs/8.x/installation

composer create-project --prefer-dist laravel/laravel primaAplicatieLaravel
#2  redirectionare in folderul proiectului 
cd primaAplicatieLaravel

#3 Pentru a porni aplicatia laravel 
php artisan serve

#4 conectare la baza de date

in fisier .env avem
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=l8
DB_USERNAME=root
DB_DATABASe = numele bazei de date ce o avem pentru proiectul nostru
