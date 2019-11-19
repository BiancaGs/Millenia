const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false
     });

// MDBootstrap
mix.styles([
    'resources/lib/mdbootstrap/css/bootstrap.css',
    'resources/lib/mdbootstrap/css/mdb.css',
    'resources/lib/mdbootstrap/css/datatables.css',
], 'public/css/mdbootstrap.css');
mix.scripts([
    'resources/lib/mdbootstrap/js/bootstrap.js',
    'resources/lib/mdbootstrap/js/mdb.js',
    'resources/lib/mdbootstrap/js/datatables.js',
], 'public/js/mdbootstrap.js');

/**
 * Dashboard
 */

// =======================================================
// Cadastros
// =======================================================
 
// Clientes
mix.scripts('resources/js/dashboard/cadastros/cliente/index.js', 'public/js/dashboard/cadastros/cliente/index.js');
mix.scripts('resources/js/dashboard/cadastros/cliente/create.js', 'public/js/dashboard/cadastros/cliente/create.js');

// Profissionais
mix.scripts('resources/js/dashboard/cadastros/profissional/create.js', 'public/js/dashboard/cadastros/profissional/create.js');
mix.scripts('resources/js/dashboard/cadastros/profissional/index.js', 'public/js/dashboard/cadastros/profissional/index.js');

// Serviços
mix.scripts('resources/js/dashboard/cadastros/servico/index.js', 'public/js/dashboard/cadastros/servico/index.js');
mix.scripts('resources/js/dashboard/cadastros/servico/create.js', 'public/js/dashboard/cadastros/servico/create.js');

// Produtos
mix.scripts('resources/js/dashboard/cadastros/produto/index.js', 'public/js/dashboard/cadastros/produto/index.js');
mix.scripts('resources/js/dashboard/cadastros/produto/create.js', 'public/js/dashboard/cadastros/produto/create.js');

// Pacotes
mix.scripts('resources/js/dashboard/cadastros/pacote/index.js', 'public/js/dashboard/cadastros/pacote/index.js');
mix.scripts('resources/js/dashboard/cadastros/pacote/create.js', 'public/js/dashboard/cadastros/pacote/create.js');

// Comandas
mix.scripts('resources/js/dashboard/comandas/create.js', 'public/js/dashboard/comandas/create.js');


// =======================================================
// AGENDA
// =======================================================

// Agenda
mix.scripts('resources/js/dashboard/agenda/calendario.js', 'public/js/dashboard/agenda/calendario.js');
mix.scripts('resources/js/dashboard/agenda/novo-agendamento.js', 'public/js/dashboard/agenda/novo-agendamento.js');