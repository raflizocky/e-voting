# E-Voting App

An application for managing and participating in digital voting.

## Demo

<a href="https://github.com/raflizocky/e-voting/blob/main/demo-img/Demo.md">View Demo Images</a>

## Features

-   **Admin Panel**:

    -   Dashboard: Displays voter data (total voters, voted, not voted) and vote count chart
    -   Candidates: CRUD functionality for candidate data
    -   Voters: CRUD functionality for voter data
    -   Admins: CRUD functionality for admin data

-   **Voter Panel**:
    -   Election Page: Displays all candidates
    -   Results Page: Displays vote count chart for all candidates

## Pre-requisites

-   Updated at: 2024-12-28
-   Min. version:
    -   PHP >= 8.1
    -   Composer
    -   XAMPP/MAMP/Laragon/Herd/etc

## Installation

1. Create the database (ex: `e_voting`)

2. Terminal

    ```shell
    git clone https://github.com/raflizocky/e-voting.git
    ```

    ```shell
    code e-voting
    ```

3. `.env`

    - Terminal:
        ```shell
        cp .env.example .env
        ```
    - Adjust `.env`:
        ```shell
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=e_voting
        DB_USERNAME=your_mysql_username
        DB_PASSWORD=your_mysql_password
        ```

4. Terminal
    - ```shell
      composer i ; php artisan key:generate ; php artisan mi:f --seed ; php artisan storage:link
      ```
    - ```shell
      php artisan serve
      ```

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

## License

```
Copyright (c) 2024 Rafli Zocky Leonard

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```
