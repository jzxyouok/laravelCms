@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-2 col-sm-8">
			<div class="panel panel-default">
			    <div class="panel-heading">
			        新建任务
			    </div>
				<!-- Bootstrap Boilerplate... -->
				<div class="panel-body">
					<!-- Display Validation Errors... -->
					@include('common.errors')

					<!-- New Task Form -->
					<form action="/task" method="POST" class="form-horizontal">
						{{ csrf_field() }}

						<!-- Task Name -->
						<div class="form-group">
							<label for="name" class="col-sm-3 control-label">Task</label>
							<div class="col-sm-6">
				                <input type="text" name="name" id="task-name" class="form-control">
				            </div>
						</div>
						<!-- Task Content -->
						<div class="form-group">
							<label for="content" class="col-sm-3 control-label">Content</label>
							<div class="col-sm-6">
								<textarea name="content" id="task-content" class="form-control"></textarea>
				            </div>
						</div>
						<!-- Add Task Button -->
				            <div class="form-group">
				                <div class="col-sm-offset-3 col-sm-6">
				                    <button type="submit" class="btn btn-default">
				                        <i class="fa fa-plus"></i> Add Task
				                    </button>
				                </div>
				            </div>
					</form>
				</div>
			</div>
		
	<!-- Current Tasks -->
	@if (count($tasks) > 0)
		<div class="panel panel-default">
			<div class="panel-heading">
				当前任务列表
			</div>
			<div class="panel-body">
				<table class="table table-striped task-table">
					<!-- Table Headings -->
					<thead>
						<th class="col-sm-3">Task</th>
						<th class="col-sm-4">Content</th>
						<th class="col-sm-1">操作</th>
					</thead>
					<!-- Table Body -->
					<tbody>
					@foreach ($tasks as $task)
						<tr>
							<!-- Task Name -->
							<td class="table-text">
								<div>{{ $task->name }}</div>
							</td>
							<!-- Task Content -->
							<td class="table-text">
								<div>{{ $task->content }}</div>
							</td>
							<!-- Delete Button -->
							<td>
								<form action="/task/{{ $task->id }}" method="POST">
								{{ csrf_field() }}
								{{ method_field('DELETE') }}
								<button type="submit" class="btn btn-danger"><i class="fa fa-btn fa-trash"></i>删除任务</button>
								</form>
							</td>
						</tr>
					@endforeach
					</tbody>
				</table>
				
			</div>
		</div>
	@endif
	</div>
	</div>
@endsection