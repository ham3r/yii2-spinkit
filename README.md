# SpinKit Asset for Yii2 Framework

Allows to use SpinKit (https://github.com/tobiasahlin/SpinKit) CSS library inside Yii2 framework environment.

## Installation

Use Composer to install this extension. Bower dependencies used by this asset will be automatically installed.

```
composer require ham3r/yii2-spinkit:dev-master
```

## Usage

### Register directly onto the view:

```php
use ham3r\spinkit\SpinKitAsset;

SpinKitAsset::register($this);

```

### Or use as another asset dependency:

```php
use yii\web\AssetBundle;

class SomeAsset extends AssetBundle {

    /** dependencies */
    public $depends = [
        'ham3r\spinkit\SpinKitAsset'
    ];
    
    ...
}
    
```

Then you can use CSS classes defined by this library:

```html
<div class="sk-rotating-plane"></div>
```

## License 

Project is licensed under MIT. Please see [License File](LICENSE) for more information.

