@extends('backend/layouts/default')

{{-- Page title --}}
@section('title')
prescription Records
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="page-header">
	<h3>

		<div class="pull-right">
			<a href="{{ URL::to('admin/prescriptions/create') }}" class="btn btn-small btn-info"><i class="icon-plus-sign icon-white"></i>New prescription</a>
		</div>
	</h3>
</div>

{{ $prescriptions->links() }}
<div id="printableArea">

<table class="table table-bordered table-hover" style="background:white">
	<thead>
		<tr>
			<th class="span2">Patient ID</th>
			<th class="span2">name</th>
			<th class="span2">instructions</th>
			<th class="span2">dose</th>
			
			<th class="span2">time</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($prescriptions as $prescription)
		<tr>
			
			<td>{{ $prescription->user->id }}</td>
			<td>{{ $prescription->user->first_name }} {{ $prescription->user->last_name }}</td>
			<td>{{ $prescription->instructions }}</td>
			<td>{{ $prescription->dose }}</td>
			
			<td>{{ $prescription->created_at->diffForHumans() }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
{{ $prescriptions->links() }}
@stop
