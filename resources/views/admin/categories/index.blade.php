@extends('admin.master')
@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN EXAMPLE TABLE PORTLET-->
                <div class="portlet light ">
                    <div class="portlet-title">
                        <div class="caption font-dark">
                            <i class="icon-settings font-dark"></i>
                            <span class="caption-subject bold uppercase">التصنيفات</span>
                        </div>
                        <div  class="row">
                            <div class="col-md-12">
                                <a  class="btn green-haze  btn-outline"  href="{{url("admin/categories/create")}}">
                                    <span>إضافة</span></a>
                            </div>
                        </div>
                        <div class="tools"> </div>

                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success col-md-3">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="portlet-body">

                        <table class="table table-striped table-bordered table-hover dt-responsive" width="100%" id="sample_1">

                            <thead>
                            <tr>
                                <th class="all">ID</th>
                                <th class="min-phone-l">الإسم</th>
                                <th class="min-tablet">وقت التحديث</th>
                                <th class="all">الإعدادات.</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $category)
                                <tr>

                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->updated_at}}</td>
                                    <td>
                                        <div class="btn-group pull-right">
                                            <button class="btn green btn-xs btn-outline dropdown-toggle" data-toggle="dropdown">الإعدادات
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu pull-right">
                                                <li>
                                                    <a href="{{url("admin/categories/$category->id/edit")}}">
                                                        <i class="fa fa-edit"></i> تعديل </a>
                                                </li>
                                                <li>
                                                    <form action="{{route("categories.destroy", [$category->id] )}}" method="POST">
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                        <i class="fa fa-trash"></i><input type="submit" value="حذف">
                                                    </form>

                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- END EXAMPLE TABLE PORTLET-->
            </div>
        </div>
    </div>
@endsection