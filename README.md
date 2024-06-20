# e-voting

[![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)](https://laravel.com)
[![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white)](https://getbootstrap.com)
[![jQuery](https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white)](https://jquery.com)
[![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)](https://www.mysql.com)

This is a simple e-voting application, designed to streamline the electoral process.

## Demo

<div>
  <img src="demo-img/dashboard.jpeg" alt="Login Demo 2" width="100%">
  <img src="demo-img/candidates.jpeg" alt="User Demo 1" width="100%">
</div>
<div>
  <img src="demo-img/election-page.jpeg" alt="Admin Demo 3" width="100%">
  <img src="demo-img/election-result.jpeg" alt="Admin Demo 4" width="100%">
</div>

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

1. Create a new database named `e_voting`.
2. Clone the repository: `git clone https://github.com/raflizocky/e-voting.git`
3. Open the project in your text editor.
4. Create a new `.env` file.
5. Copy the contents of `.env.example` and paste them into the newly created `.env` file.
6. Run the following commands:
    - `php artisan key:generate` (to generate the application key)
    - `composer update`
    - `composer install`
7. Run `php artisan migrate:fresh --seed` to create and seed the database tables with initial data.
8. Access the web application with the credentials provided in the database seeder file or the `users` table.

## Usage

### Admin Panel

-   Access the admin panel and use the provided functionality to manage candidates, voters, and admins.
-   The dashboard displays voter data and a vote count chart.

### Voter Panel

-   On the election page, voters can view all the candidates.
-   The results page displays a vote count chart for all candidates.

## Contributing

If you'd like to contribute, please fork the repository and make changes as you'd like. Pull requests are warmly welcome.

## License

This project is licensed under the [MIT License](LICENSE.md).
