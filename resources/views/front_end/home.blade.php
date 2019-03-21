<?php
/**
 * Created by PhpStorm.
 * User: leobas
 * Date: 16-01-2019
 * Time: 11:25
 */
?>

@extends('adminlte::layouts.app')

@section('htmlheader_title')
    Inicio
@endsection

@section('contentheader_title')
    AAA
@endsection

@section('contentheader_description')
    BBB
@endsection

@section('main-content')

    <section class="invoice">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-search"></i> Identificación del Documento
                    <small class="pull-right">Fecha: 16/01/2019</small>
                </h2>
            </div>
        </div>
        <!-- title row -->
        <div class="row">
            <div class="col-xs-6">
                <div class="form-group">
                    <label>Tipo de Documento:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" name='tpDocumento' class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
            </div>
            <div class="col-xs-4">
                <div class="form-group">
                    <label>Número:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" name='tpDocumento' class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
            </div>
            <div class="col-xs-2">
                <div class="form-group">
                    <label>Año:</label>
                    <div class="input-group">
                        <select class="form-control">
                            <option>2019</option>
                            <option>2019</option>
                            <option>2019</option>
                        </select>

                    </div>
                    <!-- /.input group -->
                </div>
            </div>
            <div class="col-xs-12">
                <div class="form-group">
                    <label>Número:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" name='tpDocumento' class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
            </div>

        </div>
    </section>
    <section class="invoice">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-user-circle"></i> Recurrente
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-2">
                <div class="form-group">
                    <label>Tipo de Recurrente:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" name='tpDocumento' class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
            </div>
            <div class="col-xs-2">
                <div class="form-group">
                    <label>Rut:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" name='tpDocumento' class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
            </div>
            <div class="col-xs-2">
                <div class="form-group">
                    <label>Nombre:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" name='tpDocumento' class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
            </div>
            <div class="col-xs-2">
                <div class="form-group">
                    <label>Apellidos:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" name='tpDocumento' class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
            </div>
            <div class="col-xs-2">
                <div class="form-group">
                    <label>Dirección:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" name='tpDocumento' class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
            </div>
            <div class="col-xs-2">
                <div class="form-group">
                    <label>Teléfono:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" name='tpDocumento' class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
            </div>
            <div class="col-xs-2">
                <div class="form-group">
                    <label>Email:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" name='tpDocumento' class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
            </div>
        </div>
    </section>
    <section class="invoice">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-info-circle"></i> Información del Documento
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <div class="form-group">
                    <label>Tipo de Trámite:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" name='tpDocumento' class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <label>Plazo del Trámite:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" name='tpDocumento' class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <label>Fecha del Documento:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" name='tpDocumento' class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <label>Nro. Oficio Servicio:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" name='tpDocumento' class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <label>Comuna:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" name='tpDocumento' class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <label>Confidencialidad:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" name='tpDocumento' class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <label>Materia:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" name='tpDocumento' class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <label>Adjuntar Documento:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" name='tpDocumento' class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
            </div>
        </div>
    </section>
    <section class="invoice">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-archive"></i> Ingreso a Trámite
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <div class="form-group">
                    <label>Observaciones:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" name='obs' class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <label>Palabra Clave:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" name='palabraClave' class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
            </div>
        </div>
    </section>
@endsection
