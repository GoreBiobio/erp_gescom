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
                    <i class="fa fa-globe"></i> Mis Documentos
                </h2>
            </div>
        </div>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Bandeja de <D></D>ocumentos</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="dataTables_length" id="example1_length">
                                <label>Mostrar
                                    <select name="example1_length" aria-controls="example1" class="form-control input-sm">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select>Documentos
                                </label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div id="example1_filter" class="dataTables_filter">
                                <label>Buscar:<input type="search" class="form-control input-sm" placeholder="" aria-controls="example1"></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                <tr role="row">
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Rendering engine: activate to sort column ascending" style="width: 217.8px;">Rendering engine</th>
                                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column descending" style="width: 266.6px;" aria-sort="ascending">Browser</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 237px;">Platform(s)</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 187.4px;">Engine version</th>
                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 134.8px;">CSS grade</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr role="row" class="odd">
                                    <td class="">Other browsers</td>
                                    <td class="sorting_1">All others</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>U</td>
                                </tr><tr role="row" class="even">
                                    <td class="">Trident</td>
                                    <td class="sorting_1">AOL browser (AOL desktop)</td>
                                    <td>Win XP</td>
                                    <td>6</td>
                                    <td>A</td>
                                </tr><tr role="row" class="odd">
                                    <td class="">Gecko</td>
                                    <td class="sorting_1">Camino 1.0</td>
                                    <td>OSX.2+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                </tr><tr role="row" class="even">
                                    <td class="">Gecko</td>
                                    <td class="sorting_1">Camino 1.5</td>
                                    <td>OSX.3+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                </tr><tr role="row" class="odd">
                                    <td class="">Misc</td>
                                    <td class="sorting_1">Dillo 0.8</td>
                                    <td>Embedded devices</td>
                                    <td>-</td>
                                    <td>X</td>
                                </tr><tr role="row" class="even">
                                    <td class="">Gecko</td>
                                    <td class="sorting_1">Epiphany 2.20</td>
                                    <td>Gnome</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                </tr><tr role="row" class="odd">
                                    <td class="">Gecko</td>
                                    <td class="sorting_1">Firefox 1.0</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.7</td>
                                    <td>A</td>
                                </tr><tr role="row" class="even">
                                    <td class="">Gecko</td>
                                    <td class="sorting_1">Firefox 1.5</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                </tr><tr role="row" class="odd">
                                    <td class="">Gecko</td>
                                    <td class="sorting_1">Firefox 2.0</td>
                                    <td>Win 98+ / OSX.2+</td>
                                    <td>1.8</td>
                                    <td>A</td>
                                </tr><tr role="row" class="even">
                                    <td class="">Gecko</td>
                                    <td class="sorting_1">Firefox 3.0</td>
                                    <td>Win 2k+ / OSX.3+</td>
                                    <td>1.9</td>
                                    <td>A</td>
                                </tr></tbody>
                                <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1">
                                        Rendering engine
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Browser
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Platform(s)
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        Engine version
                                    </th>
                                    <th rowspan="1" colspan="1">
                                        CSS grade
                                    </th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                                Showing 1 to 10 of 57 entries
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button previous disabled" id="example1_previous">
                                        <a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0">Previous</a>
                                    </li>
                                    <li class="paginate_button active">
                                        <a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0">1</a>
                                    </li>
                                    <li class="paginate_button ">
                                        <a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0">2</a>
                                    </li>
                                    <li class="paginate_button ">
                                        <a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0">3</a>
                                    </li>
                                    <li class="paginate_button ">
                                        <a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0">4</a>
                                    </li>
                                    <li class="paginate_button ">
                                        <a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0">5</a>
                                    </li>
                                    <li class="paginate_button ">
                                        <a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0">6</a>
                                    </li>
                                    <li class="paginate_button next" id="example1_next">
                                        <a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.box-body -->
        </div>

    </section>

@endsection


