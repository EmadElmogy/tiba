@extends('layouts.admin')
@section('content')
<a href="{{URL('admin/about/create')}}" class="btn green" style="margin-bottom:10px;">اضافة </a>
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
											<th>
												Hint باللغه العربيه
											</th>
											<th>
												Hint باللغة الانجليزيه
											</th>
                      <th>الوصف باللغه العربيه</th>
											<th>الوصف باللغه الانجليزيه</th>
                      <th>صوره</th>
                      <th>
                        عمليات
                      </th>
										</tr>
									</thead>
									<tbody>
                    <?php $count=1; ?>
                    @foreach($abouts as $about)
										<tr>
											<td>{{$count}}</td>
											<td>{{$about->title_ar}}</td>
											<td>{{$about->title_en}}</td>
											<td>{{$about->hint_ar}}</td>
											<td>{{$about->hint_en}}</td>
											<td>{{$about->desc_ar}}</td>
											<td>{{$about->desc_en}}</td>
                      <td>
                        <img src="{{URL($about->image)}}" alt="slider" width="100px" height="100px" />
                      </td>
                      <td><a href='{{URL("/admin/about/$about->id/edit")}}' class="btn purple" style="margin-bottom:2px;">تعديل</a>
                        {!! Form::open(['method' => 'DELETE', 'route'=>['admin.about.destroy', $about->id]]) !!}
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
