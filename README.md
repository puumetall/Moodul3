1. step;

git clone https://github.com/puumetall/Moodul3.git


2. step;

cd Moodul3


3. step;

composer install
npm install


4. step;

cp .env.example .env


5. step;

Tee database.sqlite fail database kausta
ning peale seda jooksute see rida koodi

php artisan migrate


6. step;

php artisan storage:link


7. step;

npm run dev
+
php artisan serve


8. step;

Kui miski katki tee

php artisan migrate:fresh --seed


9. step

Kui ikka ei tööta siis viga on teie seadmes
