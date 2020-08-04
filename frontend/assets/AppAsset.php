<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'frontend/assets/css/style.css',
        'frontend/assets/css/main-color.css',
        'frontend/assets/css/bootstrap-grid.css',
        'frontend/assets/css/icons.css',
        'frontend/assets/css/invoice.css',
        
        
        //plugins
        'frontend/assets/css/plugins/revolutionslider.css',
        //'css/site.css',
        
    ];
    public $js = [
        'frontend/assets/scripts/chosen.min.js',
        'frontend/assets/scripts/counterup.min.js',
        'frontend/assets/scripts/custom.js',
        'frontend/assets/scripts/daterangepicker.js',
        'frontend/assets/scripts/dropzone.js',
        'frontend/assets/scripts/infobox.min.js',
        'frontend/assets/scripts/isotope.min.js',
        'frontend/assets/scripts/jquery.countdown.min.js',
        'frontend/assets/scripts/jquery-3.4.1.min.js',
        'frontend/assets/scripts/jquery-migrate-3.1.0.min.js',
        'frontend/assets/scripts/jquery-ui.min.js',
        'frontend/assets/scripts/leaflet.min.js',
        'frontend/assets/scripts/leaflet-autocomplete.js',
        'frontend/assets/scripts/leaflet-control-geocoder.js',
        'frontend/assets/scripts/leaflet-gesture-handling.min.js',
        'frontend/assets/scripts/leaflet-listeo.js',
        'frontend/assets/scripts/leaflet-markercluster.min.js',
        'frontend/assets/scripts/magnific-popup.min.js',
        'frontend/assets/scripts/maps.js',
        'frontend/assets/scripts/markerclusterer.js',
        'frontend/assets/scripts/mmenu.min.js',
        'frontend/assets/scripts/moment.min.js',
        'frontend/assets/scripts/quantityButtons.js',
        'frontend/assets/scripts/rangeslider.min.js',
        'frontend/assets/scripts/slick.min.js',
        'frontend/assets/scripts/switcher.js',
        'frontend/assets/scripts/themepunch.revolution.min.js',
        'frontend/assets/scripts/themepunch.tools.min.js',
        'frontend/assets/scripts/tooltips.min.js',
        'frontend/assets/scripts/typed.js',
        'frontend/assets/scripts/waypoints.min.js',
        
        //Extensions
        'frontend/assets/scripts/extensions/revolution.extension.actions.min.js',
        'frontend/assets/scripts/extensions/revolution.extension.carousel.min.js',
        'frontend/assets/scripts/extensions/revolution.extension.kenburn.min.js',
        'frontend/assets/scripts/extensions/revolution.extension.layeranimation.min.js',
        'frontend/assets/scripts/extensions/revolution.extension.migration.min.js',
        'frontend/assets/scripts/extensions/revolution.extension.navigation.min.js',
        'frontend/assets/scripts/extensions/revolution.extension.parallax.min.js',
        'frontend/assets/scripts/extensions/revolution.extension.slideanims.min.js',
        'frontend/assets/scripts/extensions/revolution.extension.video.min.js',
        
        
    ];
    public $depends = [
        //'yii\web\YiiAsset',
        //'yii\bootstrap\BootstrapAsset',
    ];
}
