@extends('layouts.master')
@section('css')
    @toastr_css
    @section('title')
        اصدار منحة/مكافأءة جديدة
    @stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    @section('PageTitle')
        اصدار منحة/مكافأءة جديدة
    @stop
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row -->
    <div class="row">
        <div class="col-md-12 mb-30">
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
                        <div class="card-body">
                            <div class="repeater">
                                <div data-repeater-list="List_Fees">
                                    <div data-repeater-item>
                                        <div class="row">

                                            <div class="col">
                                                <label for="Name" class="mr-sm-2">اسم الطالب</label>
                                                <select class="fancyselect" name="student_id" required>
                                                    <option value="">-- اختار من القائمة --</option>
                                                    <option value="">احمد محمد خالد</option>
                                                </select>
                                            </div>

                                            <div class="col">
                                                <label for="Name_en" class="mr-sm-2">البند</label>
                                                <div class="box">
                                                    <select class="fancyselect" name="fee_id" required>
                                                        <option value="">-- اختار من القائمة --</option>
                                                        <option value="">المشاركة في البرامج التطوعية</option>
                                                        <option value="">مساعدة زميله في تقديم البحث</option>
                                                    </select>
                                                </div>

                                            </div>
                                            <div class="col">
                                                <label for="Name_en" class="ml-sm-2">نوع المنحةاو المكافأءة</label>
                                                <div class="box">
                                                    <select class="fancyselect" name="fee_id" required>
                                                        <option value="">-- اختار من القائمة --</option>
                                                        <option value="">سلوك</option>
                                                        <option value="">تعلم</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <label for="Name_en" class="mr-sm-2">عدد النقاط</label>
                                                <div class="box">
                                                    <input type="number" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="inputEmail4">تفاصيل المنحةاو المكافأءة</label>
                                <input type="text" value="" name="title_en" class="form-control">
                            </div>


                            <div class="form-group col">
                                <label for="inputEmail4">مكان المنحةاو المكافأءة</label>
                                <input type="text" value="" name="amount" class="form-control">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col">
                                <label for="inputEmail4">محرر المنحةاو المكافأءة
                                </label>
                                <input type="text" value="" name="title_en" class="form-control">
                            </div>
                            <div>
                                <label for="inputAddress">ملاحظات</label>
                                <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="1" cols="85"></textarea>
                            </div>
                        </div>

                        <div class="form-group">

                        </div>
                        <br>

                        <button type="submit" class="btn btn-success">تاكيد</button>



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
