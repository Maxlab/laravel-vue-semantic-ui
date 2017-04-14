## The Vue2 with ElemeFE/element for Laravel 5.4

- Starter kit Vue2 in conjunction with SemanticUi for Laravel 5.4
 
## Installation

```sh
$ laravel new project && cd project/
$ composer require maxlab/laravel-vue-element
```

Then add to config/app.php
```php
Maxlab\VueSemanticUi\VueSemanticUiServiceProvider::class
```

Then
```sh
$ php artisan vendor:publish --force --provider="Maxlab\VueSemanticUi\VueSemanticUiServiceProvider"
$ npm install && npm run dev-ui
```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
