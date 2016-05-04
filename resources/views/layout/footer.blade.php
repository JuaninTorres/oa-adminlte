<footer class="main-footer">
    <div class="container">
        <div class="pull-right hidden-xs">
            <b>Versión</b> {{ config('app.version') }}
        </div>
        <strong>&copy; {{ Carbon\Carbon::now()->format('Y') }} <a href="https://juanintorres.cl">Juan Torres</a></strong> - Demo de AdminLTE para
        <a href="http://openagora.com">OA</a>
    </div>
    {{-- /.container --}}
</footer>