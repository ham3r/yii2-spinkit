<?php

/**
 * This file is part of the ham3r/yii2-spinkit project
 *
 * For the full license information, please view
 * the LICENSE file that was distributed with this package.
 * 
 */

namespace ham3r\spinkit;

use yii\web\AssetBundle;

/**
 * SpinKit CSS Asset for the Yii2
 */
class SpinKitAsset extends AssetBundle {

    /** Source path for the given assets package (bower) */
    public $sourcePath = '@bower/spinkit';

    /** CSS files */
    public $css = [
        'css/spinkit.css'
    ];
}
