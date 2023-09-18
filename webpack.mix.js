const mix = require('laravel-mix');
mix.sass('client/css/nativeads.js.scss', 'dist/css/nativeads.js.css');

mix.webpackConfig({
    devtool: "source-map"
});
