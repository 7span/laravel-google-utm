# Add Google UTM parameters with ease

This package will add Google UTM parameters to any Laravel URL. 
This package will also help to add "ref" query string parameter to URL. 

### In Your View

```html
<html>
<head></head>
<body>

    <!-- Generate like http://www.site.com/dashboard?ref=logo -->
	{!! GUTM::add( url('/dashboard'),   'logo'  ) !!}
	
	<!-- Generate like http://www.site.com/dashboard?utm_source=github&utm_medium=readme&utm_term=googleUTM&utm_content=ads&utm_campaign=githubRepo -->
	{!! GUTM::add( url('/dashboard'),  [ 'github' , 'readme' , 'googleUTM' , 'ads' , 'githubRepo' ] ) !!}

</body>
</html>
```

## Install
First add the package to your composer:
```
{
    "require": {
       "sevenspan/laravel-google-utm": "dev-master"
    }
}
```

You must install  a facade, which provides an easy way to call the the class.

```php
// config/app.php
'aliases' => [
    ...
    'GUTM'      => Sevenspan\LaravelGoogleUTM\LaravelGoogleUTM::class,
    ...
];
```
## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
