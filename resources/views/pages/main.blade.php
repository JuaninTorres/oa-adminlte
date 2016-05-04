@extends('fixed')

@section('page_title')
    Demos
@endsection

@section('page_description')
    Interfases típicas de AdminLTE
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-4 col-xs-12">
            @include('pages.partials.small-boxes')
        </div>
        <div class="col-lg-8">
                <div class="box box-primary animated fadeIn">
                    <div class="box-header with-border">
                        <h3 class="box-title">Avance Procesos Activos</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                            </button>
                            <div class="btn-group">
                                <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-wrench"></i></button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Action</a></li>
                                    <li><a href="#">Another action</a></li>
                                    <li><a href="#">Something else here</a></li>
                                    <li class="divider"></li>
                                    <li><a href="#">Separated link</a></li>
                                </ul>
                            </div>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>{{-- /.box-header --}}
                    <div class="box-body">
                        <canvas id="grafico1"></canvas>
                    </div>{{-- /.box-body --}}
                </div>{{-- /.box --}}
        </div>
        <!-- /.col -->
    </div>

    <div class="row">
        <div class="col-md-8">
            @include('pages.partials.tabs')
        </div>
        <div class="col-md-4">
            @include('pages.partials.table')
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        var ctx1 = document.getElementById('grafico1').getContext('2d');
        var chart1 = new Chart(ctx1, {
                type: 'bar',
                data: {
                    labels: ['Proceso 1', 'Proceso 2', 'Proceso 3'],
                    datasets: [
                        {
                            label: "En Proceso",
                            backgroundColor: "rgba(75,192,192,0.4)",
                            borderColor: "rgba(75,192,192,1)",
                            data: [10, 10, 100]
                        },
                        {
                            label: "Finalizadas",
                            backgroundColor: "rgba(54, 162, 235,0.4)",
                            borderColor: "rgba(54, 162, 235, 1)",
                            data: [120, 100, 40]
                        },
                        {
                            label: "No Comenzadas",
                            backgroundColor: "rgba(255, 99, 132, 0.4)",
                            borderColor: "rgba(255, 99, 132, 1)",
                            data: [80, 50, 10]
                        }
                    ]
                }
        });
    </script>
@endsection