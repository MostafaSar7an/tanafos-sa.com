@extends('layouts.master')
@section('css')
    @toastr_css
    @section('title')
        قائمة بنود المنح والمكافأت
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')قائمة بنود المنح والمكافأت@stop
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">


        @if ($errors->any())
            <div class="error">{{ $errors->first('Name') }}</div>
        @endif



        <div class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <button type="button" class="button x-small" data-toggle="modal" data-target="#exampleModal">
                        {{ trans('Infringements_Item_trans.add_Item') }}
                    </button>
                    <br><br>

                    <div class="table-responsive">
                        <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                               style="text-align: center">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>البند</th>
                                <th>عدد النقاط</th>
                                <th>حذف</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $i = 0; ?>
{{--                            @foreach ($Infringement_Items as $Infringement_Item)--}}
                            <tr>
                                <?php $i++; ?>
                                <td>{{ $i }}</td>
                                <td>مساعدة زميله في تقديم البحث</td>
                                <td class="text-success">+40</td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#delete"
                                            title="{{ trans('Infringements_Item_trans.delete_Item_Infringement') }}"><i
                                            class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <!-- edit_modal_Infringement -->
                            <div class="modal fade" id="edit" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                id="exampleModalLabel">
                                                {{ trans('Infringements_Item_trans.edit_Infringement') }}
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <!-- add_form -->
                                            <form action="{{ route('Infringements_item.update', 'test') }}" method="post">
                                                {{ method_field('patch') }}
                                                @csrf
                                                <div class="row">
                                                    <div class="col">
                                                        <label for="Name"
                                                               class="mr-sm-2">{{ trans('Infringements_Item_trans.Item') }}
                                                            :</label>
                                                        <input id="Name" type="text" name="Name"
                                                               class="form-control"
                                                               value=""
                                                               required>
                                                        <input id="id" type="hidden" name="id" class="form-control"
                                                               value="">
                                                    </div>
                                                    <div class="col">
                                                        <label for="Name_en"
                                                               class="mr-sm-2">عدد النقاط
                                                            :</label>
                                                        <input type="number" class="form-control"
                                                               value=""
                                                               name="Name_en" required>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label
                                                        for="exampleFormControlTextarea1">{{ trans('Infringements_Item_trans.Notes') }}
                                                        :</label>
                                                    <textarea class="form-control" name="Notes"
                                                              id="exampleFormControlTextarea1"
                                                              rows="3"></textarea>
                                                </div>
                                                <br><br>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">{{ trans('Infringements_Item_trans.Close') }}</button>
                                                    <button type="submit"
                                                            class="btn btn-success">{{ trans('Infringements_Item_trans.submit') }}</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- delete_modal_Infringement -->
                            <div class="modal fade" id="delete" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                id="exampleModalLabel">
                                                {{ trans('Infringements_Item_trans.delete_Item_Infringement') }}
                                            </h5>
                                            <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('Infringements_item.destroy','id') }}" method="POST">
                                                {{ method_field('Delete') }}
                                                @csrf
                                                {{ trans('Infringements_Item_trans.Warning_Infringement') }}
                                                <input id="id" type="hidden" name="id" class="form-control"
                                                       value="">
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">{{ trans('Infringements_Item_trans.Close') }}</button>
                                                    <button type="submit"
                                                            class="btn btn-danger">{{ trans('Infringements_Item_trans.submit') }}</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--                            @endforeach--}}
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <!-- add_modal_Infringement -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                            {{ trans('Infringements_Item_trans.add_Item') }}
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <!-- add_form -->
                        <form action="" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <label for="Name" class="mr-sm-2">{{ trans('Infringements_Item_trans.Item') }}
                                        :</label>
                                    <input id="Name" type="text" name="Name" class="form-control">
                                </div>
                                <div class="col">
                                    <label for="Name_en" class="mr-sm-2">{{ trans('Infringements_Item_trans.Points_Rebate') }}
                                        :</label>
                                    <input type="text" class="form-control" name="Name_en">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">{{ trans('Infringements_Item_trans.Notes') }}
                                    :</label>
                                <textarea class="form-control" name="Notes" id="exampleFormControlTextarea1"
                                          rows="3"></textarea>
                            </div>
                            <br><br>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                                data-dismiss="modal">{{ trans('Infringements_Item_trans.Close') }}</button>
                        <button type="submit" class="btn btn-success">{{ trans('Infringements_Item_trans.submit') }}</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>

    </div>

    <!-- row closed -->
@endsection
@section('js')
    @toastr_js
    @toastr_render
@endsection
