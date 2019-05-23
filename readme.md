instalasi:
1. git clone [link] [nama folder baru]
2. cd [nama folder] >> masuk ke folder yang udah dibuat
3. composer install
4. buka file .env.example
5. ctrl+A >> ctrl+C >> ctrl+N >> ctrl+V 
6. simpan sebagai .env
7. buat database baru
8. edit file.env
edit sebelah sini:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=[nama database]
DB_USERNAME=root
DB_PASSWORD=
9. php artisan migrate
10. php artisan key:generate
11. php artisan db:seed
12. php artisan serve

