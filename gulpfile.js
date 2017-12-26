const elixir = require('laravel-elixir');
require('laravel-elixir-vue-2');

elixir(mix => {
  mix.webpack('app.js');
});

// elixir(function(mix)
// {
//   mix.version(['css/app.css','js/app.js']);
// });
