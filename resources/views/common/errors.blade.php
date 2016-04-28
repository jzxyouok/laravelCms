
@if (count($errors) > 0)
	<!-- Form error List -->
	<div class="alert alert-danger">
		<strong>Whoops!出现错误啦!</strong>
		
		<br>

		<ul>
		@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
		@endforeach
		</ul>
	</div>
@endif