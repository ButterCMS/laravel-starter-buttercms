![recommended PHP version](https://img.shields.io/packagist/php-v/laravel/laravel)

# Laravel + ButterCMS Starter Project

This Laravel starter project fully integrates with dynamic sample content from your ButterCMS account, including main menu, pages, blog posts, categories, and tags, all with a beautiful, custom theme with already-implemented search functionality. All of the included sample content is automatically created in your account dashboard when you sign up for a free trial of ButterCMS.

You can view a [live demo hosted on Heroku](https://laravel-starter-buttercms-test.herokuapp.com), or you can click the button below to deploy your own copy of our starter project to the provider of your choice.


[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy?template=https://github.com/ButterCMS/laravel-starter-buttercms&env%5BLARAVEL_APP_BUTTER_CMS_API_KEY%5D=check%20https://buttercms.com/settings)

## 1. Installation

First, clone the repo and install the dependencies
```shell
git clone https://github.com/ButterCMS/laravel-starter-buttercms
cd laravel-starter-buttercms
composer install
```

### 2. Set API Token

To fetch your ButterCMS content, add your API token as an environment variable in `.env` file.

```
LARAVEL_APP_BUTTER_CMS_API_KEY="<Your API Token>"
```

### 3. Run local server

To view the app in the browser, you'll need to run the local development server:

```bash
$ php artisan serve
```

Congratulations! Your starter project is now live at [http://localhost:8000/](http://localhost:8000/).

## 4. Deploy on Heroku

Our starter app can be deployed to Heroku with the click of a button:

1. Create a Heroku account at https://signup.heroku.com.
2. Click the button below and fill in an app name and your Butter API token. Then click "deploy".

[![Deploy](https://www.herokucdn.com/deploy/button.svg)](https://heroku.com/deploy?template=https://github.com/ButterCMS/laravel-starter-buttercms/&env[LARAVEL_APP_BUTTER_CMS_API_KEY]=check%20https://buttercms.com/settings)

## 5. Previewing Draft Changes
By default, your starter project is set up to allow previewing of draft changes saved in your ButterCMS.com account. To disable this functionality, set the following value in your .env file: LARAVEL_APP_BUTTER_CMS_PREVIEW=false