<script src="{{ elixir('js/all-vendors.js') }}"></script>
<script src="{{ elixir('js/all-footer.js') }}"></script>
<script>$('#flash-overlay-modal').modal();</script>
@include('flash::message')
@yield('scripts')