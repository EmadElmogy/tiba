@extends('layouts.admin')
@section('content')
<a href="{{URL('admin/partner/create')}}" class="btn green" style="margin-bottom:10px;">اضافة </a>
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
                      <!-- <th>العنوان باللغه العربيه</th>
											<th>العنوان باللغه الانجليزيه</th>
                      <th>الوصف باللغه العربيه</th>
											<th>الوصف باللغه الانجليزيه</th> -->
                      <th>صوره</th>
                      <th>
                        عمليات
                      </th>
										</tr>
									</thead>
									<tbody>
                    <?php $count=1; ?>
                    @foreach($partners as $partner)
										<tr>
											<td>{{$count}}</td>
											<!-- <td>{{$partner->title_ar}}</td>
											<td>{{$partner->title_en}}</td>
											<td>{{$partner->desc_ar}}</td>
											<td>{{$partner->desc_en}}</td> -->
                      <td>
                        <img src="{{URL($partner->image)}}" alt="partner" width="100px" height="100px" />
                      </td>
                      <td><a href='{{URL("/admin/partner/$partner->id/edit")}}' class="btn purple" style="margin-bottom:2px;">تعديل</a>
                        {!! Form::open(['method' => 'DELETE', 'route'=>['admin.partner.destroy', $partner->id]]) !!}
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
