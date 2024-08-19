let mix = require("laravel-mix");

mix.setResourceRoot("resources");
mix.setPublicPath("public");
mix.disableNotifications();

mix.options({
    processCssUrls: false,
});

mix.js("resources/js/dashboard.js", "public/js/dashboard.js");
mix.sass("resources/scss/dashboard.scss", "public/css/dashboard.css");
