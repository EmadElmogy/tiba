@extends('layouts.admin')
@section('content')
<a href="{{URL('admin/news/create')}}" class="btn green" style="margin-bottom:10px;">اضافة </a>
<div class="portlet box blue">
							<div class="portlet-title">
								<div class="caption"><i class="icon-cogs"></i>عرض البيانات</div>
								<div class="tools">
									<a href="javascript:;" class="collapse"></a>
									<a href="javascript:;" class="remove"></a>
								</div>
							</div>
							<div class="portlet-body flip-scroll">
								<table class="table-bordered table-striped table-condensed flip-content">
									<thead class="flip-content">
										<tr>
											<th>#</th>
                      <th>العنوان باللغه العربيه</th>
											<th>العنوان باللغه الانجليزيه</th>
                      <th>الوصف باللغه العربيه</th>
											<th>الوصف باللغه الانجليزيه</th>
											<th>
												التفاصيل باللغه العربيه

											</th>
											<th>
												التفاصيل باللغه الانجليزيه
											</th>
                      <th>صوره</th>
                      <th>
                        عمليات
                      </th>
										</tr>
									</thead>
									<tbody>
                    <?php $count=1; ?>
                    @foreach($newss as $news)
										  <?php
											 $arr=json_decode($news->images,true);
											?>
										<tr>
											<td>{{$count}}</td>
											<td>{{$news->title_ar}}</td>
											<td>{{$news->title_en}}</td>
											<td>{{$news->short_desc_ar}}</td>
											<td>{{$news->short_desc_en}}</td>
											<td>{{$news->details_ar}}</td>
											<td>{{$news->details_en}}</td>

                      <td>
												@if(array_key_exists(0,$arr))
                        <img src="{{URL('uploads/'.$arr[0])}}" alt="news" width="150px" height="150px" />
												@endif
                      </td>
                      <td><a href='{{URL("/admin/news/$news->id/edit")}}' class="btn purple" style="margin-bottom:2px;">تعديل</a>
                        {!! Form::open(['method' => 'DELETE', 'route'=>['admin.news.destroy', $news->id]]) !!}
                      {!! Form::submit('حذف', ['class' => 'btn red','onclick'=>'return confirm(".تأكيد الحذف ؟");']) !!}
                    {!! Form::close() !!}
										</tr>
                    <?php $count++; ?>
                    @endforeach
									</tbody>
								</table>
							</div>
						</div>
@endsection
