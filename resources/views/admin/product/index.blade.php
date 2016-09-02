@extends('layouts.admin')
@section('content')
<a href="{{URL('admin/product/create')}}" class="btn green" style="margin-bottom:10px;">اضافة </a>
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
                      <th>صوره</th>
											<th>ملفات</th>
                      <th>
                        عمليات
                      </th>
										</tr>
									</thead>
									<tbody>
                    <?php $count=1;  ?>
                    @foreach($products as $product)
										<?php $arr_files=json_decode($product->attached_files,true); ?>
										<?php
										 $arr=json_decode($product->image,true);
										?>
										<tr>
											<td>{{$count}}</td>
											<td>{{$product->title_ar}}</td>
											<td>{{$product->title_en}}</td>
											<td>{{$product->desc_ar}}</td>
											<td>{{$product->desc_en}}</td>
                      <td>
												@if(array_key_exists(0,$arr))
												<img src="{{URL('uploads/'.$arr[0])}}" alt="product" width="150px" height="150px" />
												@endif
											 </td>
											<td>
												<a href="{{URL('uploads/'.$arr_files[0])}}" class="btn green" download>Download 1 <i class="m-icon-swapdown m-icon-white"></i></a><br><br>
												@if(array_key_exists(1,$arr_files))
												<a href="{{URL('uploads/'.$arr_files[1])}}" class="btn black" download>Download 2 <i class="m-icon-swapdown m-icon-white"></i></a><br><br>
												@endif
												@if(array_key_exists(2,$arr_files))
												<a href="{{URL('uploads/'.$arr_files[2])}}" class="btn icn-only blue" download>Download 3 <i class="m-icon-swapdown m-icon-white"></i></a>
												@endif
											</td>
                      <td><a href='{{URL("/admin/product/$product->id/edit")}}' class="btn purple" style="margin-bottom:2px;">تعديل</a>
                        {!! Form::open(['method' => 'DELETE', 'route'=>['admin.product.destroy', $product->id]]) !!}
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
