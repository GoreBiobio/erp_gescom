<?php
/**
 * Created by PhpStorm.
 * User: leobas
 * Date: 16-01-2019
 * Time: 10:58
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
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <i class="fa fa-globe"></i> Consulta de Expedientes
                    <small class="pull-right">Fecha: 16/01/2019</small>
                </h2>
            </div>
        </div>
        <div class="row">
            <div action="/hola" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="col-xs-4">
                    <div class="form-group">
                        <label>Documento:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <input type="text" name='documento' class="form-control">
                        </div>
                        <!-- /.input group -->
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="form-group">
                        <label>Tramite:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <input type="text" name='tramite' class="form-control">
                        </div>
                        <!-- /.input group -->
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="form-group">
                        <label>Número / Año:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <input type="text" name='tramite' class="form-control">
                        </div>
                        <!-- /.input group -->
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="form-group">
                        <label>Referencia:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <input type="text" name='referencia' class="form-control">
                        </div>
                        <!-- /.input group -->
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="form-group">
                        <label>Estado:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <input type="text" name='estado' class="form-control">
                        </div>
                        <!-- /.input group -->
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="form-group">
                        <label>Servicio:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <input type="text" name='servicio' class="form-control">
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
                            <input type="text" name='materia' class="form-control">
                        </div>
                        <!-- /.input group -->
                    </div>
                </div>
                <div class="col-xs-6">
                    <div class="form-group">
                        <label>Materia Especifica:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <input type="text" name='materia_espe' class="form-control">
                        </div>
                        <!-- /.input group -->
                    </div>
                </div>
                <div class="col-xs-12">
                    <div class="form-group">
                        <label>Observaciones:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <input type="text" name='observaciones' class="form-control">
                        </div>
                        <!-- /.input group -->
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="form-group">
                        <label>Sistema Origen:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <input type="text" name='sisOrigen' class="form-control">
                        </div>
                        <!-- /.input group -->
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="form-group">
                        <label>Of. Salida:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <input type="text" name='ofSalida' class="form-control">
                        </div>
                        <!-- /.input group -->
                    </div>
                </div>
                <div class="col-xs-4">
                    <div class="form-group">
                        <label>Unidad:</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <input type="text" name='Unidad' class="form-control">
                        </div>
                        <!-- /.input group -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="invoice">
        <div class="row">
            <div class="row">
                <div class="col-xs-12">
                    <h2 class="page-header">
                        <i class="fa fa-globe"></i> Recurrente
                    </h2>
                </div>
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <label>Rut:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" name='Rut' class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
            </div>
            <div class="col-xs-6">
                <div class="form-group">
                    <label>Nombre:</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <input type="text" name='nombre' class="form-control">
                    </div>
                    <!-- /.input group -->
                </div>
            </div>




                <div class="col-xs-4">
                    <button type="submit" class="btn btn-block btn-primary btn-lg">
                        <i class="fa fa-search"></i> Buscar
                    </button>
                </div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-block btn-primary btn-lg">
                        <i class="fa fa-search"></i> Limpiar
                    </button>
                </div>
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-block btn-primary btn-lg">
                        <i class="fa fa-search"></i> Imprimir
                    </button>
                </div>

            </form>
        </div>
    </section>



@endsection
