# realtime-laravel-logs

Demo Laravel app to view logs in realtime using Pusher Channels and Laravel 5.6+ log channels


[View tutorial](https://pusher.com/tutorials/live-logs-dashboard-laravel)

## Prerequisites
- PHP >= 7.1.3
- Composer
- A [Pusher account](https://pusher.com/signup) and [Pusher app credentials](http://dashboard.pusher.com/)

## Getting started
Clone the project and install dependencies:

```bash
git clone https://github.com/shalvah/realtime-laravel-logs
cd realtime-laravel-logs
composer install
```

Copy the `.env.example` file to a `.env` file. Add your Pusher app credentials to this file:
```
PUSHER_APP_ID=your-app-id
PUSHER_APP_KEY=your-app-key
PUSHER_APP_SECRET=your-app-secret
PUSHER_APP_CLUSTER=your-app-cluster
```
Create a file called `database.sqlite` in the `database` folder of your app. Seed the database by running:

```bash
php artisan migrate --seed
```

Then:

```bash
# generate an application key
php artisan key:generate

# start the app
php artisan serve
```
## Built With

* [Pusher](https://pusher.com/) - APIs to enable devs building realtime features
* [Laravel](http://laravel.com) - the PHP framework for web artisans
