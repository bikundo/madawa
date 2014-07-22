@extends('backend/layouts/default')

{{-- Page title --}}
@section('title')
Drug Records
@parent
@stop

{{-- Page content --}}
@section('content')
<div class="page-header">
	<h3>

		<div class="pull-right">
			<a href="{{ URL::to('admin/drugs/create') }}" class="btn btn-small btn-info"><i class="icon-plus-sign icon-white"></i>Add New Drug to System</a>
		</div>
	</h3>
</div>

{{ $drugs->links() }}
<div id="printableArea">
<table class="table table-bordered  table-hover" >
	<thead>
		<tr>
			<th class="span2">name</th>
			<th class="span2">description</th>
			<th class="span2">reccomended dose</th>
			<th class="span2">Doses remaining</th>
			<th class="span2">Date updated</th>
			<th class="hidden-print">Actions</th>
		</tr>
	</thead>
	<tbody>
		@foreach ($drugs as $drug)
		<tr>
			
			<td>{{ $drug->name }}</td>
			<td>{{ $drug->description }}</td>
			<td>{{ $drug->dosage }}</td>
			<td>{{ $drug->ammount }}</td>
			<td>{{ $drug->updated_at->format('M jS, Y') }}</td>

			<td class="hidden-print">
				<a href="{{ route('update/drug', $drug->id) }}" class="btn btn-mini btn-primary">@lang('button.edit')</a>
			{{ Form::open(array('route' => array('admin.drugs.destroy', $drug->id), 'method' => 'delete')) }}
        <button type="submit" href="{{ URL::route('admin.drugs.destroy', $drug->id) }}" class="btn btn-danger btn-mini">Delete</button>
    {{ Form::close() }}</td>
		</tr>
		@endforeach
	</tbody>
</table>
</div>
{{ $drugs->links() }}
@stop
