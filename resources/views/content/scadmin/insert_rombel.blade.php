@extends('layouts.scadmin.base')

@section('content')
<div id="main-content-wrapper">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="content clearfix">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3>Tambah Rombel</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" class="form-horizontal" id="form" name="insert_rombel" method="post" action="#" enctype="multipart/form-data">
                            <div class="form-group">
                                <label class="col-lg-2 col-md-2 col-sm-2" for="rombel">ID Rombel</label>
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon">&nbsp;&nbsp;&nbsp;</span>
                                        <input type="text" class="form-control" name="id" placeholder="Masukkan id rombel" required="required">
                                    </div>        
                                </div>
                            </div>  
                            <div class="form-group">
                                <label class="col-lg-2 col-md-2 col-sm-2" for="name">Nama Rombel</label>
                                <div class="col-lg-10 col-md-10 col-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-addon">&nbsp;&nbsp;&nbsp;</span>
                                        <input type="text" class="form-control" name="name" placeholder="Masukkan nama rombel" required="required">
                                    </div>           
                                </div>
                            </div>                            
                        </form>
                        <div class="col-md-10">
                        </div>
                        <div class="btn-menu col-md-2">
                            <a href="#" id="btn-save-jurusan" class="btn btn-block btn-primary">Simpan</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop