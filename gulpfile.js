var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass(['app.scss'], 'public/css/app.css')
        .scripts([
            'vendor/jquery/dist/jquery.js',
            'vendor/jquery-highlight/jquery.highlight.js',
            'vendor/jquery-slimscroll/jquery.slimscroll.js',
            'vendor/bootstrap/dist/js/bootstrap.js',
            'vendor/AdminLTE/dist/js/app.js',
            'vendor/sweetalert/dist/sweetalert.min.js',
            'vendor/fastclick/lib/fastclick.js',
            'vendor/select2/dist/js/select2.full.min.js',
            'vendor/datatables/media/js/jquery.dataTables.js',
            'vendor/datatables/media/js/dataTables.bootstrap.js',
            'vendor/datatables-plugins/features/searchHighlight/dataTables.searchHighlight.js',
            'vendor/vue/dist/vue.js',
            'vendor/vue-resource/dist/vue-resource.js',
            'vendor/Chart.js/dist/Chart.js',
            'vendor/seiyria-bootstrap-slider/dist/bootstrap-slider.js'
        ], 'public/js/all-vendors.js', 'public/components')
        .scripts([
            'ajax-helpers.js',
            'app.js'
        ], 'public/js/all-footer.js')
        .version([
            'css/app.css',
            'js/all-vendors.js',
            'js/all-footer.js'
        ]);
});

