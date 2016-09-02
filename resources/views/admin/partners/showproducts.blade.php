@extends('layouts.admin')
@section('content')
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif
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
                      <th>الاسم باللغه العربيه</th>
											<th>الاسم باللغه الانجليزيه</th>
                      <th>صوره</th>
                      <th>
                        عمليات
                      </th>
										</tr>
									</thead>
									<tbody>
                    <?php $count=1; ?>
                    @foreach($products as $product)
										<tr>
											<td>{{$count}}</td>
											<td>{{$product->title_ar}}</td>
											<td>{{$product->title_en}}</td>
                      <td>
                        <img src="{{URL($product->image)}}" alt="product" width="100px" height="100px" />
                      </td>
                      <td>
                        <a href='{{URL("/admin/partner/addProduct/$product->partner_id")}}' class="btn green" style="margin-bottom:2px;">اضافة </a>
                        <a href='{{URL("/admin/partner/deleteProduct/$product->id")}}' onclick='return confirm(".تأكيد الحذف ؟");' class="btn red" style="margin-bottom:2px;">حذف</a>

										</tr>
                    <?php $count++; ?>
                    @endforeach
									</tbody>
								</table>
							</div>
						</div>
@endsection
