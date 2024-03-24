const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
       require('tailwindcss'),
   ])
   .babelConfig({
       presets: [
           [
               '@babel/preset-env',
               {
                   targets: '>= 16',
                   useBuiltIns: 'usage',
                   corejs: 3,
               },
           ],
       ],
   });
