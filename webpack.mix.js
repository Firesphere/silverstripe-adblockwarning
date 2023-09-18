const mix = require('laravel-mix');
mix.sass('client/css/base.scss', 'dist/css/nativeads.js.css');
mix.js('client/js/base.js', 'dist/js/base.js');

mix.webpackConfig({
    devtool: "source-map"
});
