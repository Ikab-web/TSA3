# Tasks for Today Management System (Laravel)

IT0049 Technical Summative Assessment 3. This standalone Laravel 12 project provides a daily task dashboard, a complete task list, a student profile, and project information.

## Requirements

- PHP 8.2 or newer with PDO SQLite (or PDO MySQL)
- Composer

## Run locally

```sh
composer install
cp .env.example .env
php artisan key:generate
```

The example configuration uses SQLite. Create the database file, then migrate and seed:

```sh
touch database/database.sqlite
php artisan migrate --seed
php artisan serve
```

On Windows PowerShell, create the file with `New-Item database/database.sqlite -ItemType File`. Visit <http://127.0.0.1:8000>.

To use MySQL instead, set `DB_CONNECTION=mysql`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, and `DB_PASSWORD` in `.env` before running the migration.

## Pages

- `/` shows tasks dated today using an Eloquent `whereDate` query.
- `/tasks` shows every task ordered by date.
- `/profile` shows the single seeded user.
- `/about` identifies the developer and project.

## Database

`database/migrations` creates the `users` and `tasks` tables. The task status defaults to `pending`. `DatabaseSeeder` creates exactly one user and eight example tasks across today, yesterday, two days ago, and tomorrow. Seeding can be repeated safely.

Update the sample profile in `database/seeders/DatabaseSeeder.php` and developer name in `resources/views/about.blade.php` with your own details before submission.
