## Prerequisites

-   Node.js >= 18.18
-   PHP >= 8.2
-   Composer
-   XAMPP/MAMP/Laragon/Herd/etc

## Installation

1. Create the database (ex: `e_voting`)

2. Terminal

    ```shell
    git clone https://github.com/raflizocky/e-voting.git
    ```

    ```shell
    git clone -b main https://github.com/raflizocky/e-voting.git
    ```

3. Open both in different text editor

4. `.env` (e-voting)

    - Terminal:
        ```shell
        cp .env.example .env
        ```
    - Adjust `.env`:
        ```shell
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=your_mysql_db
        DB_USERNAME=your_mysql_username
        DB_PASSWORD=your_mysql_password
        ```
    - Adjust `.env` (for send mail (gmail), optional):
        ```shell
        MAIL_MAILER=smtp
        MAIL_HOST=smtp.gmail.com
        MAIL_PORT=587
        MAIL_USERNAME=youremail@gmail.com
        MAIL_PASSWORD=your_email_app_password
        MAIL_ENCRYPTION=tls
        MAIL_FROM_ADDRESS="youremail@gmail.com"
        MAIL_FROM_NAME="${APP_NAME}"
        ```

5. Terminal
    - ```shell
      composer update ; composer i ; php artisan key:generate ; php artisan mi:f --seed ; php artisan storage:link ; php artisan ser
      ```

6. fe-voting
   
    - Terminal:
        ```shell
        npm run i ; npm run dev
        ```

### Installation (Docker)

1. Open Docker Desktop (Windows, MacOS)

2. Terminal (`makefile` is optional, u can use usual docker compose command (see `makefile` file))

    - ```shell
      winget install ezwinports.make #for windows only
      ```
    - ```shell
      make build
      ```
    - ```shell
      make up
      ```
    - ```shell
      make migrate
      ```
    - ```shell
      make db-seed
      ```
    - ```shell
      make storage-link
      ```
    - ```shell
      make key-generate
      ```

3. Open project:
    - e-voting -> `8000:8000`
    - phpmyadmin -> `8080:80`

4. Adjust Login URL of e-voting at fe-voting
    
---

## Usage

-   Admin

    ```shell
    email   : admin1@gmail.com
    password: password
    ```

-   Voter
    ```shell
    email   : Voter1@gmail.com
    password: password
    ```
