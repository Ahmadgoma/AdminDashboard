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
                            <span class="caption-subject font-red sbold uppercase">تعديل بيانات المنتج</span>
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
                        <form action="{{route('products.update', $product->id)}}" method="post"
                              enctype="multipart/form-data" class="form-horizontal margin-bottom-40" role="form">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-body">
                                <div class="row">
                                    <div class="col-md-9  col-md-offset-3">
                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn green-haze btn-file">
                                            <span class="fileinput-new"> اختار الملف </span>
                                            <span class="fileinput-exists"> تغيير </span>
                                            <input type="file" name="image"> </span>
                                            <img src="{{asset('images/'. $product->image)}}" height="100px;"
                                                 width="100px;">
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

                                            @forelse($categories as $category)
                                                <option
                                                        {{ $category->id == $product->category_id ? "selected" : "" }}
                                                        value="{{$category->id}}">{{$category->name}}</option>
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
                                        <label for="inputEmail1" class="col-md-2 control-label">اسم المنتج</label>
                                        <div class="col-md-8">
                                            <input name="name" value="{{ $product->name }}" class="form-control"
                                                   id="form_control_1">
                                            <div class="form-control-focus"></div>
                                        </div>
                                    </div>
                                    <div class="form-group form-md-line-input">
                                        <label for="inputEmail1" class="col-md-2 control-label">السعر </label>
                                        <div class="col-md-8">
                                            <input name="price" value="{{ $product->price }}" class="form-control"
                                                   id="form_control_1">
                                            <div class="form-control-focus"></div>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="form-actions">
                                <div class="row">
                                    <div class="col-md-12 col-md-offset-3">
                                        <button type="submit" class="btn green-haze">تعديل</button>

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