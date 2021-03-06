<div class="nav-tabs-custom animated fadeInUp">
    <ul class="nav nav-tabs pull-right">
        <li><a href="#tab_1" data-toggle="tab">Resumen</a></li>
        <li><a href="#tab_2" data-toggle="tab">Comentarios</a></li>
        <li><a href="#tab_3" data-toggle="tab">Objetivos</a></li>
        <li class="active"><a href="#tab_4" data-toggle="tab">Competencias</a></li>
        <li class="pull-left header"><i class="fa fa-tachometer"></i> Evaluación</li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" id="tab_1">
            <b>How to use:</b>

            <p>Exactly like the original bootstrap tabs except you should use
                the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>
            A wonderful serenity has taken possession of my entire soul,
            like these sweet mornings of spring which I enjoy with my whole heart.
            I am alone, and feel the charm of existence in this spot,
            which was created for the bliss of souls like mine. I am so happy,
            my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
            that I neglect my talents. I should be incapable of drawing a single stroke
            at the present moment; and yet I feel that I never was a greater artist than now.
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_2">
            The European languages are members of the same family. Their separate existence is a myth.
            For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
            in their grammar, their pronunciation and their most common words. Everyone realizes why a
            new common language would be desirable: one could refuse to pay expensive translators. To
            achieve this, it would be necessary to have uniform grammar, pronunciation and more common
            words. If several languages coalesce, the grammar of the resulting language is more simple
            and regular than that of the individual languages.
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane" id="tab_3">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
            sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
            like Aldus PageMaker including versions of Lorem Ipsum.
        </div>
        <div class="tab-pane  active" id="tab_4">
            <table class="table table-striped hidden-xs hidden-sm visible-md visible-lg">
                <thead>
                <tr>
                    <th style="width: 100px">Evaluados</th>
                    <th>Reconoce sistemáticamente las actitudes positivas del entorno OA</th>
                    <th>Reconoce sistemáticamente las actitudes positivas del entorno OA</th>
                    <th>Reconoce sistemáticamente las actitudes positivas del entorno OA</th>
                    <th>Reconoce sistemáticamente las actitudes positivas del entorno OA</th>
                </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                <tr>
                    <td class="widget-user-2">
                        @include('pages.partials.user', compact('user'))
                    </td>
                    <td class="vertical-middle">
                        @include('pages.partials.slider', [ 'default' => 0])
                    </td>
                    <td class="vertical-middle">
                        @include('pages.partials.slider', [ 'default' => 50, 'color' => 'yellow'])
                    </td>
                    <td class="vertical-middle">
                        @include('pages.partials.slider', [ 'default' => 80, 'color' => 'green'])
                    </td>
                    <td class="vertical-middle">
                        @include('pages.partials.slider', [ 'default' => 100, 'color' => 'aqua'])
                    </td>

                </tr>
                @endforeach
                </tbody>
            </table>
            <div class="alert alert-warning hidden-md hidden-lg visible-xs visible-sm">
            	<strong><i class="fa fa-exclamation-triangle"></i> Atención:</strong> Esta interfaz no está optimizada para dispositivos de esta resolución, por favor ingrese desde un dispositivo que permita utilizar una resolución mayor.
            </div>
        </div>
        <!-- /.tab-pane -->
    </div>
    <!-- /.tab-content -->
</div>