# E-Voting App

An application for managing and participating in digital voting.

## Demo

<a href="https://github.com/raflizocky/e-voting/blob/main/demo-img/Demo.md">View Demo Images</a>

## Stack

- Laravel 10
- Bootstrap 4
- MySQL

## Features

- **Admin Panel**:
  - Dashboard: Displays voter data (total voters, voted, not voted) and vote count chart
  - Candidates: CRUD functionality for candidate data
  - Voters: CRUD functionality for voter data
  - Admins: CRUD functionality for admin data

- **Voter Panel**:
  - Election Page: Displays all candidates
  - Results Page: Displays vote count chart for all candidates

## Installation

1. Database = `e_voting`

2. Terminal
   ```shell
   git clone https://github.com/raflizocky/e-voting.git
   ```
   ```shell
   code e-voting
   ```

3. `.env`
   - Terminal (VS Code):
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

4. Terminal (VS Code)
   - ```shell
     composer i ; php artisan key:generate ; php artisan mi:f --seed
     ```
   - ```shell
     php artisan serve
     ```

## Usage

- Admin
  ```shell
  email   : admin1@gmail.com
  password: password 
  ```

- Voter
  ```shell
  email   : Voter1@gmail.com
  password: password 
  ```
