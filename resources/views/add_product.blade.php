@extends('layouts.app')
@section('content')
<div class="container">
<form method="get" action="{{route('product.create')}}">
	<div class="row">
		<div class="col-md-5">
			<div class="form-group">
		<input class="form-control" name="title" placeholder="Product Name">
		</div>
		<div class="form-group">
			<textarea class="form-control" name="description" >Product description</textarea>
			<button type="submit" name="submit"> submit</button>
		</div>
		</div>
	</div>
</form>
</div>
@endsection