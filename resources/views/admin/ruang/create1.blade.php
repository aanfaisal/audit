@extends('layouts.admin.main')

@section('title')
    Buat Data Ruangan
@endsection

@section('maincontent')
         <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Buat Data Ruangan Gedung</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Buat Data Ruangan Gedung</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                  {!! Form::open(['url' => '/manage/ruang', 'class' => 'form-horizontal', 'files' => true]) !!}

                    <!-- Smart Wizard -->
                    <p></p>
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step_descr">
                                              Step 1<br />
                                              <small>Nama dan Luas</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                                              Step 2<br />
                                              <small>Data Penerangan</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                                              Step 3<br />
                                              <small>Data AC</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                                              Step 4<br />
                                              <small>Data Beban Lain</small>
                                          </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-5">
                            <span class="step_no">5</span>
                            <span class="step_descr">
                                              Step 4<br />
                                              <small>Data Mesin</small>
                                          </span>
                          </a>
                        </li>
                      </ul>
                      <div id="step-1">
                       <div class="form-group {{ $errors->has('nm_ruang') ? 'has-error' : ''}}">
                        {!! Form::label('nm_ruang', 'Nama Ruang', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::text('nm_ruang', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                {!! $errors->first('nm_ruang', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('luas_ruang') ? 'has-error' : ''}}">
                            {!! Form::label('luas_ruang', 'Luas Ruang', ['class' => 'col-md-4 control-label']) !!}<strong>m<sup>2</sup></strong>
                            <div class="col-md-6">
                                {!! Form::number('luas_ruang', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!} 
                                {!! $errors->first('luas_ruang', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>

                      </div>
                      <div id="step-2">
                        <div class="form-group {{ $errors->has('jns_lamp') ? 'has-error' : ''}}">
                           {!! Form::label('jns_lamp', 'Jenis Lamp', ['class' => 'col-md-4 control-label']) !!}
                            <div class="col-md-6">
                                {!! Form::select('jns_lamp', ['Lampu Hemat Energi' => 'Lampu Hemat Energi', 'Lampu TL' => 'Lampu TL', 'Lampu SL' => 'Lampu SL', 'Lampu Halogen' => 'Lampu Halogen'],null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                {!! $errors->first('jns_lamp', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('jml_lamp') ? 'has-error' : ''}}">
                            {!! Form::label('jml_lamp', 'Jumlah Lamp', ['class' => 'col-md-4 control-label']) !!}<strong>Pcs</strong>
                            <div class="col-md-6">
                                {!! Form::number('jml_lamp', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                {!! $errors->first('jml_lamp', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('daya_lamp') ? 'has-error' : ''}}">
                            {!! Form::label('daya_lamp', 'Daya Lampu', ['class' => 'col-md-4 control-label']) !!}<strong>Watt</strong>
                            <div class="col-md-6">
                                {!! Form::number('daya_lamp', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
                                {!! $errors->first('daya_lamp', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                      </div>
                      <div id="step-3">
                      <div id="app">
                                <h3>Data AC Ruang</h3>
                                
                                    <div class="row" v-for="(item,index) in beban">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="Nama / Merk AC" class="form-control" :name="'nmbebanac['+index+']'" value="" required="" />
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input type="number" placeholder="Jumlah AC" class="form-control" :name="'jml_ac['+index+']'" value="" required="" />
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input type="number" placeholder="Total Daya AC (watt)" class="form-control" :name="'daya_ac['+index+']'" value="" required="" />
                                            </div>
                                           
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <button class="btn btn-success btn-flat" type="button" @click="addPhoto(index)"><i class="fa fa-plus"></i></button>
                                                <button class="btn btn-danger btn-flat" type="button" @click="remPhoto(index)"  v-if="beban.length > 1"><i class="fa fa-close"></i></button>
                                            </div>
                                        </div>
                                    </div>
                             
                            </div>
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                            <br>
                            <br>
                            <br>
                      </div>




                      <div id=step-4>
                      <div id="app2">
                                <h3>Data Beban Lain di Ruangan</h3>
                                
                                    <div class="row" v-for="(item,index) in beban">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="Jenis Beban Lain" class="form-control" :name="'jnsbebanlain['+index+']'" value="" required="" />
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input type="number" placeholder="Jumlah Beban" class="form-control" :name="'jmlbebanlain['+index+']'" value="" required="" />
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input type="number" placeholder="Total Daya Beban (watt)" class="form-control" :name="'dyabebanlain['+index+']'" value="" required="" />
                                            </div>
                                           
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <button class="btn btn-success btn-flat" type="button" @click="addPhoto(index)"><i class="fa fa-plus"></i></button>
                                                <button class="btn btn-danger btn-flat" type="button" @click="remPhoto(index)"  v-if="beban.length > 1"><i class="fa fa-close"></i></button>
                                            </div>
                                        </div>
                                    </div>
                             
                            </div>
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                            <br>
                            <br>
                            <br>
                      </div>
                      <div id=step-5>
                        <div id="app3">
                                <h3>Data Beban Mesin di Ruangan</h3>
                                
                                    <div class="row" v-for="(item,index) in beban">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" placeholder="Nama Mesin" class="form-control" :name="'nm_mesin['+index+']'" value="" required="" />
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input type="number" placeholder="Jumlah Mesin" class="form-control" :name="'jml_mesin['+index+']'" value="" required="" />
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <input type="number" placeholder="Total Daya Beban (watt)" class="form-control" :name="'daya_mesin['+index+']'" value="" required="" />
                                            </div>
                                           
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group">
                                                <button class="btn btn-success btn-flat" type="button" @click="addPhoto(index)"><i class="fa fa-plus"></i></button>
                                                <button class="btn btn-danger btn-flat" type="button" @click="remPhoto(index)"  v-if="beban.length > 1"><i class="fa fa-close"></i></button>
                                            </div>
                                        </div>
                                    </div>
                             
                            </div>
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                            <br>
                            <br>
                            <br>
                      </div>
            
                    </div>
                    <!-- End SmartWizard Content -->


                  {!! Form::close() !!}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

@endsection

@section('htmlpage')

@endsection

@section('jspage')
    <!-- jQuery Smart Wizard -->
    <script src="{{ asset('plugins/jQuery-Smart-Wizard/js/jquery.smartWizard.js') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/vue/vue.js') }}"></script>

    <script type="text/javascript">

    $vapp = new Vue({
        el:'#app',
        data:{
            beban:[
                {
                    teks:'',
                    gambar:'',
                }
            ]
        },
        mounted: function(){
            //this.initFancy();
        },
        updated: function(){
            //this.initFancy();
        },
        methods: {
            addPhoto: function(event) {
                var beban = {
                    teks:'',
                    gambar:'',
                }
                this.beban.splice(event+1,0,beban);
            },
            remPhoto: function(event) {
                if(this.beban.length > 1)
                    this.beban.splice(event,1)
            }
        }
    });;

    $vapp2 = new Vue({
        el:'#app2',
        data:{
            beban:[
                {
                    teks:'',
                    gambar:'',
                }
            ]
        },
        mounted: function(){
            //this.initFancy();
        },
        updated: function(){
            //this.initFancy();
        },
        methods: {
            addPhoto: function(event) {
                var beban = {
                    teks:'',
                    gambar:'',
                }
                this.beban.splice(event+1,0,beban);
            },
            remPhoto: function(event) {
                if(this.beban.length > 1)
                    this.beban.splice(event,1)
            }
        }
    });;

    $vapp3 = new Vue({
        el:'#app3',
        data:{
            beban:[
                {
                    teks:'',
                    gambar:'',
                }
            ]
        },
        mounted: function(){
            //this.initFancy();
        },
        updated: function(){
            //this.initFancy();
        },
        methods: {
            addPhoto: function(event) {
                var beban = {
                    teks:'',
                    gambar:'',
                }
                this.beban.splice(event+1,0,beban);
            },
            remPhoto: function(event) {
                if(this.beban.length > 1)
                    this.beban.splice(event,1)
            }
        }
    });;
</script>
@endsection