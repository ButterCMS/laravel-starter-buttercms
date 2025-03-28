![recommended PHP version](https://img.shields.io/packagist/php-v/laravel/laravel)

# Laravel + ButterCMS Starter Project

This Laravel starter project fully integrates with dynamic sample content from your ButterCMS account, including main menu, pages, blog posts, categories, and tags, all with a beautiful, custom theme with already-implemented search functionality. All of the included sample content is automatically created in your account dashboard when you sign up for a free trial of ButterCMS.

You can view a [live demo hosted on Heroku](http://laravel-starter-buttercms.herokuapp.com/), or you can click the button below to deploy your own copy of our starter project to the provider of your choice.

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy?template=https://github.com/ButterCMS/laravel-starter-buttercms&env%5BLARAVEL_APP_BUTTER_CMS_API_KEY%5D=check%20https://buttercms.com/settings)

## Requirements

This project requires:
- PHP 8.1+
- Composer 2.3.5+

## 1. Installation

### Install PHP and required extensions (Ubuntu/Debian)
sudo apt update
sudo apt install php8.1 php8.1-mbstring php8.1-xml php8.1-curl php8.1-zip

### Install Composer if needed (Ubuntu/Debian)
sudo apt install composer

### Install PHP and required extensions (MacOS)
brew install php@8.1

### Install Composer if needed (MacOS)
brew install composer

Then, clone the repo and install the dependencies:

```shell
git clone https://github.com/ButterCMS/laravel-starter-buttercms
cd laravel-starter-buttercms
composer install
```

## 2. Set API Token

To fetch your ButterCMS content, open .env file that was created during "composer install" and add your API token as an environment variable.

## 3. Run local server

To view the app in the browser, you'll need to run the local development server:

```bash

php artisan serve
```

Congratulations! Your starter project is now live at [http://localhost:8000/](http://localhost:8000/).

## 4. Deploy on Heroku

Our starter app can be deployed to Heroku with the click of a button:

1. Create a Heroku account at https://signup.heroku.com.
2. Click the button below and fill in an app name and your Butter API token. Then click "deploy".

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy?template=https://github.com/ButterCMS/laravel-starter-buttercms/&env[LARAVEL_APP_BUTTER_CMS_API_KEY]=check%20https://buttercms.com/settings)

## 5. Previewing Draft Changes
By default, your starter project is set up to allow previewing of draft changes saved in your ButterCMS.com account. To disable this functionality, set the following value in your .env file: LARAVEL_APP_BUTTER_CMS_PREVIEW=false

## 6. Troubleshooting

If you are sure your PHP and Composer versions are correct, you can try the following:

### Laravel-specific Issues
If you encounter errors after installation:

```bash
# Clear application caches
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Regenerate autoloader files
composer dump-autoload
```

## 7. ButterCMS Integration
This project uses ButterCMS version 3.1.0. For documentation and API references, visit [ButterCMS PHP API docs](https://buttercms.com/docs/api-client/php/).
