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
											<th>الاسم</th>
											<th>البريد الالكترونى</th>
											<th>الرساله</th>
                      <th>ملحقات الرساله</th>
                      <th>
                        عمليات
                      </th>
										</tr>
									</thead>
									<tbody>
                    <?php $count=1; ?>
                    @foreach($contacts as $contact)
										<tr>
											<td>{{$count}}</td>
											<td>{{$contact->name}}</td>
											<td>{{$contact->email}}</td>
											<td>{{$contact->message}}</td>
                      <td>
												@if($contact->uploads != null)
												<a href="{{URL($contact->uploads)}}" class="btn green" download>Download file<i class="m-icon-swapdown m-icon-white"></i></a>
												@endif
												</td>
                      <td>
                        {!! Form::open(['method' => 'DELETE', 'route'=>['admin.contact.destroy', $contact->id]]) !!}
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
