## Ovreview
### Darsk Announcement Service

## Requirement

- Laravel 7.x (see [laravel Documentation](https://laravel.com/docs/7.x/#server-requirements)) .

##### meet that requirement then just complete this :

## installation 
##### intsall laravel in your folder :
       laravel new drsk
##### or via composer :
       composer create-project --prefer-dist laravel/laravel drsk
##### clone package  in temp directory :
       git clone https://github.com/ahmad-athamneh-mawdoo3/drsk.git temp.drsk
##### then the install command will be :
        cp -r temp.drsk/. drsk/
##### add this line in config/app.php to providers array :
        Mawdoo3\Drsk\DrskServiceProvider::class,
##### run internal php server in drsk folder :
       php artisan serve
##### That's it !! :
       http://127.0.0.1:8000/test

## Configration

## License
This is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
