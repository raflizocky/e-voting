## Demo

<a href="https://github.com/raflizocky/e-voting/blob/main/demo-img/Demo.md">Here</a>

## Features

-   **Admin Panel**:

    -   Dashboard: Displays voter data (total voters, voted, not voted) and vote count chart
    -   Candidates: CRUD functionality for candidate data
    -   Voters: CRUD functionality for voter data
    -   Admins: CRUD functionality for admin data

-   **Voter Panel**:
    -   Election Page: Displays all candidates
    -   Results Page: Displays vote count chart for all candidates

## Installation

1. Create a new database named `e_voting` at your DBMS (ex: `PhpMyAdmin`).
2. Clone this repository:
    ```shell
    git clone https://github.com/raflizocky/e-voting.git

    ```
3. Open this project in your text editor (ex: `Visual Studio Code`).

4. Create a new `.env` file.

5. Copy the contents of `.env.example` and paste them into the newly created `.env` file.

6. Run the following commands:
    - ```shell
      php artisan key:generate
      ```
    - ```shell
      composer update
      ```
    - ```shell
      composer install
      ```
    - ```shell
      php artisan migrate:fresh --seed`

      ```
7. Access the web application with the credentials provided in the `DatabaseSeeder.php` file or the `users` table.

## Contributing

If you'd like to contribute, please fork the repository and make changes as you'd like. Pull requests are warmly welcome.
