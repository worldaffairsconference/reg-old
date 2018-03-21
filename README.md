# reg-old

This is the old online registration system we used in WAC 2017. To be honest, it's not very well-written, which is why we moved to our new, super awesome registration system ([donna!](https://github.com/worldaffairsconference/donna/)). We'll keep this here for posterity, as well as an example of some bad code!

If you do want to create your own instance of this reg system, you can do so pretty easily. This reg system runs on PHP and PHPMyAdmin (a PHP implementation of MySQL). We recommend downloading [MAMP](https://www.mamp.info/en/) or an OS equivalent to meet those standards. To get started, simply run `setup.sql`, and change the `$username` and `$password` fields in `common.php`; then, you're good to go!

## Credit

This reg system was originally developed by [Matthew Wang](https://matthewwang.me) (@malsf21) and [Jack Sarick](https://sarick.science) (@sarick). To build this reg system, we used [Bootstrap](https://getbootstrap.com), [jQuery](https://jquery.com), [Font Awesome 4](https://fontawesome.com), and the loving support from the WAC team.

If you have any questions, please contact [Matthew Wang](https://matthewwang.me).
