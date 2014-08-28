## To Do App

To Do app is a basic web application written in the Laravel PHP framework.  Bootstrap was used to provide most styling and UI elements.  The app allows you to create users and add/edit/delete tasks.

###Configuration

Before you can run the app, you will need to create a new MySQL database on your local machine. Once you have, change the 'mysql' config array in /app/config/database.php by supplying the following:
-   host
-   database
-   username
-   password

After you have the database set up, it may be necessary to run the following from within the project directory:
    php composer.phar install -o
*Make sure you have composer.phar in the project directory first*

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
