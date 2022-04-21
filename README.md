## How to set up

1. Install dependencies with `npm install` and `composer install`
2. Create a new file `.env` to setup the Environment
3. Create a new database and setup the connection inside `.env`
4. run `php artisan key:generate` to generate an app key
5. run `php artisan migrate --seed` to migrate the database and see the tables with the default values for translations
6. compile css and javascript assets with `npm run dev`
7. serve the app using `php artisan serve`

## Files 

1. Logic can be found in `app/Http/livewire/ConvertComponent.php`
2. The database is seeded using `database/seeders/DatabaseSeeder.php`
3. The tables are created using migrations in `database/migrations/`
4. Frontend HTML (Blade) is found in `resources/views/livewire/convert-component.blade.php` using the layout from `resources/views/layouts/layout.blade.php`.

## Working Demo

A can be found [here](https://votox.felixdeibert.de).
