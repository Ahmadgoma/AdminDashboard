@extends('admin.master')
@section('content')
    <div class="page-content">
        <div class="row">
            <div class="col-md-12">
                <!-- BEGIN VALIDATION STATES-->
                <div class="portlet light portlet-fit portlet-form ">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class=" icon-layers font-red"></i>
                            <span class="caption-subject font-red sbold uppercase">إضافة منتج</span>
                        </div>
                    </div>
                    <div class="portlet-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger col-md-3 ">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                    @endif
                    <!-- BEGIN FORM-->
                        <form action="{{url('/admin/products')}}" method="post" enctype="multipart/form-data"
                              class="form-horizontal margin-bottom-40" role="form">
                            {{csrf_field()}}
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-9  col-md-offset-3">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn green-haze btn-file">
                                            <span class="fileinput-new"> اختار الصورة </span>
                                            <span class="fileinput-exists"> تغيير </span>
                                            <input type="file" name="image"> </span>
                                            <span class="fileinput-filename"> </span> &nbsp;
                                            <a href="javascript:;" class="close fileinput-exists"
                                               data-dismiss="fileinput"> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3 col-md-offset-3">
                                            <label>التصنيف</label>
                                            <select class="form-control" name="category_id">
                                                <option value="">إختار التصنيف</option>
                                                @forelse($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                    </div>
                                </div>
                            </div>

                            <div class="portlet box green-haze">
                                <div class="portlet-title">
                                    <div class="caption">
                                        <i class="fa fa-gift"></i>التفاصيل
                                    </div>
                                    <div class="tools">
                                        <a href="javascript:;" class="collapse" data-original-title="" title=""> </a>
                                        <a href="#portlet-config" data-toggle="modal" class="config"
                                           data-original-title="" title=""> </a>
                                    </div>
                                </div>
                                <div class="portlet-body" style="margin-bottom:10px;overflow: hidden">

                                    <div class="form-group form-md-line-input">
                                        <label for="inputEmail1" class="col-md-2 control-label">إسم المنتج </label>
                                        <div class="col-md-8">
                                            <input name="name" value="{{ old('name') }}" class="form-control"
                                                   id="form_control_1">
                                            <div class="form-control-focus"></div>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <label for="inputEmail1" class="col-md-2 control-label">السعر </label>
                                        <div class="col-md-8">
                                            <input name="price" value="{{ old('price') }}" class="form-control"
                                                   id="form_control_1">
                                            <div class="form-control-focus"></div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                                <div class="form-actions">
                                    <div class="row">
                                        <div class="col-md-12 col-md-offset-3">
                                            <button type="submit" class="btn green-haze">إضافة</button>

                                        </div>
                                    </div>
                                </div>

                        </form>
                        <!-- END FORM-->


                    </div>
                    <!-- END VALIDATION STATES-->
                </div>


            </div>
            <!-- END CONTENT BODY -->
        </div>
    </div>
@endsection