#1 cream un model , o clasa de tip "models"
Cum facem asta?
 
1.1 nu e best , pur simplu  creezi un fisier
Tabelata .php in folderul models ce se afla
in folderul App
1.2 Best practice 
  in termina rulezi "php artisan make:models TabelaTa"
php artisan make:models Category


#2 cum il folosesti ? 

Simplu, te legi de namespace care de regula
use App\Models\ClasaModel

Vizual creati tabela
 categories
cu urmatoarele coloane

 id , intreg 
  name , string 
 categori_id , intreg
 game_id , intreg

#3 Cum incarci datele... din tabela in modela ... ai nevoie in programul tau,baza de date o tabela



     