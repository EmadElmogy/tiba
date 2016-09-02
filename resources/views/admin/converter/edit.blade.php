@extends('layouts.admin')
@section('content')

						<!-- BEGIN PORTLET-->
						<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-reorder"></i>تعديل بيانات </div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body form">
								<!-- BEGIN FORM-->
                {!! Form::open(['method'=>'PATCH','route'=>['admin.converter.update',$converter->id],'files'=>'true']) !!}
								@if(Session::has('errors'))
								 <div class="row alert alert-danger">

										 @foreach(Session::get('errors')->all() as $error)
												 <div class="span6 m-wrap">
													{{$error}}
												 </div>
										 @endforeach

								 </div>
								@endif

                <div class="control-group">
                    <label class="control-label">Title <span class="required">*</span></label>
                    <div class="controls">
                      <input type="text" name="title_en" value="{{$converter->title_en}}" class="span6 m-wrap tooltips" data-trigger="hover" data-original-title="Title in English">
                    </div>
                  </div>

                  <div class="control-group">
                      <label class="control-label">العنوان <span class="required">*</span></label>
                      <div class="controls">
                        <input type="text" name="title_ar" value="{{$converter->title_ar}}" class="span6 m-wrap tooltips" data-trigger="hover" data-original-title="Title in Arabic">
                      </div>
                    </div>


                    <div class="control-group">
                      <label class="control-label">Description <span class="required">*</span></label>
                      <div class="controls">
                        <textarea class="span6 m-wrap" name="desc_en" rows="3">{{$converter->desc_en}}</textarea>
                      </div>
                    </div>

                    <div class="control-group">
                  <label class="control-label">وصف <span class="required">*</span></label>
                  <div class="controls">
                    <textarea class="span6 m-wrap" name="desc_ar" rows="3">{{$converter->desc_ar}}</textarea>
                  </div>
                </div>


                    <div class="form-actions">
                   <button type="submit" class="btn blue">تعديل</button>
                 </div>
									</div>
							{!! Form::close() !!}
								<!-- END FORM-->
							</div>
						</div>
						<!-- END PORTLET-->
@endsection
