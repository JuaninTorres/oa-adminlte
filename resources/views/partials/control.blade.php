{{-- Control Sidebar --}}
<aside class="control-sidebar control-sidebar-dark">
    {{-- Create the tabs --}}
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
        <li><a href="#control-sidebar-style" data-toggle="tab"><i class="fa fa-wrench"></i></a></li>
        <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
    </ul>
    {{-- Tab panes --}}
    <div class="tab-content">
        {{-- Home tab content --}}
        <div class="tab-pane" id="control-sidebar-style">
            <h3 class="control-sidebar-heading">Skins</h3>
            <ul class="list-unstyled clearfix">
                <li style="float:left; width: 33.33333%; padding: 5px;">
                    <a @click="change('skin-blue')" href="#"
                       style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                       class="clearfix full-opacity-hover">
                        <div>
                            <span style="display:block; width: 20%; float: left; height: 7px; background: #367fa9;"></span><span
                                    class="bg-light-blue"
                                    style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                        <div>
                            <span style="display:block; width: 20%; float: left; height: 20px; background: #222d32;"></span><span
                                    style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                        </div>
                    </a>
                    <p class="text-center no-margin">Blue</p></li>
                <li style="float:left; width: 33.33333%; padding: 5px;">
                    <a @click="change('skin-black')" href="#"
                       style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                       class="clearfix full-opacity-hover">
                        <div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix"><span
                                    style="display:block; width: 20%; float: left; height: 7px; background: #fefefe;"></span><span
                                    style="display:block; width: 80%; float: left; height: 7px; background: #fefefe;"></span>
                        </div>
                        <div>
                            <span style="display:block; width: 20%; float: left; height: 20px; background: #222;"></span><span
                                    style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                        </div>
                    </a>
                    <p class="text-center no-margin">Black</p></li>
                </li>
                <li style="float:left; width: 33.33333%; padding: 5px;">
                    <a @click="change('skin-purple')" href="#"
                       style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                       class="clearfix full-opacity-hover">
                        <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                   class="bg-purple-active"></span><span class="bg-purple"
                                                                         style="display:block; width: 80%; float: left; height: 7px;"></span>
                        </div>
                        <div>
                            <span style="display:block; width: 20%; float: left; height: 20px; background: #222d32;"></span><span
                                    style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                        </div>
                    </a>
                    <p class="text-center no-margin">Purple</p></li>
                </li>
                <li style="float:left; width: 33.33333%; padding: 5px;">
                    <a @click="change('skin-green')" href="#"
                       style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                       class="clearfix full-opacity-hover">
                        <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                   class="bg-green-active"></span><span class="bg-green"
                                                                        style="display:block; width: 80%; float: left; height: 7px;"></span>
                        </div>
                        <div>
                            <span style="display:block; width: 20%; float: left; height: 20px; background: #222d32;"></span><span
                                    style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                        </div>
                    </a>
                    <p class="text-center no-margin">Green</p></li>
                <li style="float:left; width: 33.33333%; padding: 5px;">
                    <a @click="change('skin-red')" href="#"
                       style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                       class="clearfix full-opacity-hover">
                        <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                   class="bg-red-active"></span><span class="bg-red"
                                                                      style="display:block; width: 80%; float: left; height: 7px;"></span>
                        </div>
                        <div>
                            <span style="display:block; width: 20%; float: left; height: 20px; background: #222d32;"></span><span
                                    style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                        </div>
                    </a>
                    <p class="text-center no-margin">Red</p></li>
                <li style="float:left; width: 33.33333%; padding: 5px;">
                    <a @click="change('skin-yellow')" href="#"
                       style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                       class="clearfix full-opacity-hover">
                        <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                   class="bg-yellow-active"></span><span class="bg-yellow"
                                                                         style="display:block; width: 80%; float: left; height: 7px;"></span>
                        </div>
                        <div>
                            <span style="display:block; width: 20%; float: left; height: 20px; background: #222d32;"></span><span
                                    style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                        </div>
                    </a>
                    <p class="text-center no-margin">Yellow</p></li>
                <li style="float:left; width: 33.33333%; padding: 5px;">
                    <a @click="change('skin-blue-light')" href="#"
                       style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                       class="clearfix full-opacity-hover">
                        <div>
                            <span style="display:block; width: 20%; float: left; height: 7px; background: #367fa9;"></span><span
                                    class="bg-light-blue"
                                    style="display:block; width: 80%; float: left; height: 7px;"></span></div>
                        <div>
                            <span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span
                                    style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                        </div>
                    </a>
                    <p class="text-center no-margin" style="font-size: 12px">Blue Light</p></li>
                <li style="float:left; width: 33.33333%; padding: 5px;">
                    <a @click="change('skin-black-light')" href="#"
                       style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                       class="clearfix full-opacity-hover">
                        <div style="box-shadow: 0 0 2px rgba(0,0,0,0.1)" class="clearfix"><span
                                    style="display:block; width: 20%; float: left; height: 7px; background: #fefefe;"></span><span
                                    style="display:block; width: 80%; float: left; height: 7px; background: #fefefe;"></span>
                        </div>
                        <div>
                            <span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span
                                    style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                        </div>
                    </a>
                    <p class="text-center no-margin" style="font-size: 12px">Black Light</p></li>
                <li style="float:left; width: 33.33333%; padding: 5px;">
                    <a @click="change('skin-purple-light')" href="#"
                       style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                       class="clearfix full-opacity-hover">
                        <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                   class="bg-purple-active"></span><span class="bg-purple"
                                                                         style="display:block; width: 80%; float: left; height: 7px;"></span>
                        </div>
                        <div>
                            <span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span
                                    style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                        </div>
                    </a>
                    <p class="text-center no-margin" style="font-size: 12px">Purple Light</p></li>
                <li style="float:left; width: 33.33333%; padding: 5px;">
                    <a @click="change('skin-green-light')" href="#"
                       style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                       class="clearfix full-opacity-hover">
                        <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                   class="bg-green-active"></span><span class="bg-green"
                                                                        style="display:block; width: 80%; float: left; height: 7px;"></span>
                        </div>
                        <div>
                            <span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span
                                    style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                        </div>
                    </a>
                    <p class="text-center no-margin" style="font-size: 12px">Green Light</p></li>
                <li style="float:left; width: 33.33333%; padding: 5px;">
                    <a @click="change('skin-red-light')" href="#"
                       style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                       class="clearfix full-opacity-hover">
                        <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                   class="bg-red-active"></span><span class="bg-red"
                                                                      style="display:block; width: 80%; float: left; height: 7px;"></span>
                        </div>
                        <div>
                            <span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span
                                    style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                        </div>
                    </a>
                    <p class="text-center no-margin" style="font-size: 12px">Red Light</p></li>
                <li style="float:left; width: 33.33333%; padding: 5px;">
                    <a @click="change('skin-yellow-light')" href="#"
                       style="display: block; box-shadow: 0 0 3px rgba(0,0,0,0.4)"
                       class="clearfix full-opacity-hover">
                        <div><span style="display:block; width: 20%; float: left; height: 7px;"
                                   class="bg-yellow-active"></span><span class="bg-yellow"
                                                                         style="display:block; width: 80%; float: left; height: 7px;"></span>
                        </div>
                        <div>
                            <span style="display:block; width: 20%; float: left; height: 20px; background: #f9fafc;"></span><span
                                    style="display:block; width: 80%; float: left; height: 20px; background: #f4f5f7;"></span>
                        </div>
                    </a>
                    <p class="text-center no-margin" style="font-size: 12px;">Yellow Light</p></li>
            </ul>
        </div>
        <div class="tab-pane active" id="control-sidebar-home-tab">
            <h3 class="control-sidebar-heading">Cambio de Perfil</h3>
            {{-- Role Form Input --}}
            <div class="form-group">
                <div class="col-sm-12">
                    {!! Form::select('role', config('openagora.roles'), $currentUser->role, ['class'=>'form-control']) !!}
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-12">
                    <a href="#" class="btn btn-primary btn-block">Realizar cambio</a>
                </div>
            </div>
            {{-- /.control-sidebar-menu --}}

        </div>
        {{-- /.tab-pane --}}
    </div>
</aside>
{{-- /.control-sidebar --}}
{{-- Add the sidebar's background. This div must be place
     immediately after the control sidebar --}}
<div class="control-sidebar-bg"></div>
{{--<div style="background-color: #00a7d0"></div>--}}
