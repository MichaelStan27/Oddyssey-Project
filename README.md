## Oddyssey Project

This project was made to fulfill the requirements of the web programming lab's final project.

## Working with project
### Prerequisite
1. PHP development environment (>=8.1)
2. Composer
3. NodeJS (>=16)

### Setup
1. Clone this repository (`git clone https://github.com/MichaelStan27/Oddyssey-Project`)
2. Install all project dependencies (`npm install && composer install`)
3. Configure `.env` file
4. Run database migration and seeder (`php migration --seed`)
5. Build project assets (`npm run dev`)
6. Preview project (`php artisan serve`)

### Additional setup
1. Generate encryption keys for API (`php artisan passport:install`)
   This command needed for API to work properly
2. Link storage to public directory (`php artisan storage:link`)
   Put all the games assets in `storage/app/public/games`