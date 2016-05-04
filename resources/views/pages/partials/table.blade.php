<div class="box box-warning animated fadeInUp">
    <div class="box-header with-border">
        <h3 class="box-title">Solicitudes Pendientes</h3>
        <div class="box-tools pull-right">
            {{-- Buttons, labels, and many other things can be placed here! --}}
            {{-- Here is a label for example --}}
            <span class="label label-warning">6</span>
        </div>{{-- /.box-tools --}}
    </div>{{-- /.box-header --}}
    <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
            <tbody><tr>
                <th>User</th>
                <th>Asunto</th>
                <th>Estado</th>
            </tr>
            <tr>
                <td>John Doe</td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                <td><span class="label label-success">En proceso</span></td>
            </tr>
            <tr>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                <td>Alexander Pierce</td>
                <td><span class="label label-warning">Pendiente</span></td>
            </tr>
            <tr>
                <td>Bob Doe</td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                <td><span class="label label-primary">Aprobado</span></td>
            </tr>
            <tr>
                <td>Mike Doe</td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                <td><span class="label label-danger">Bloqueado</span></td>
            </tr>
            <tr>
                <td>Jane Doe</td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                <td><span class="label label-primary">Aprobado</span></td>
            </tr>
            <tr>
                <td>Cotito Doe</td>
                <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                <td><span class="label label-danger">Bloqueado</span></td>
            </tr>
            </tbody></table>
    </div>
</div>{{-- /.box --}}
