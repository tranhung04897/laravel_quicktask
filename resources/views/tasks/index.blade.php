
@extends('layouts.apptask')

@section('content')

    @include('common.errorstask')
    <div class="panel-body">
        {!! Form::open(['method' => 'POST', 'route' =>'tasks.store']) !!}

            <div class="form-group">
                {!! Form::label('task-name', trans('task.lb-task-name'), ['class' => 'col-sm-3 control-label']) !!}

                <div class="col-sm-6">
                    {!! Form::text('name', '', ['class' => 'form-control ']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    {!! Form::submit(trans('task.btn-add-task'), ['class' => 'btn btn-default']) !!}
                </div>
            </div>
        {!! Form::close() !!}
    </div>
    @if (count($tasks) > config('setting.defaultTask'))
        <div class="panel panel-default">
            <div class="panel-heading">
                @lang('task.current-task')
            </div>

            <div class="panel-body">
                <table class="table table-striped task-table">

                    <thead>
                        <th>@lang('task.index-th-task')</th>
                        <th>&nbsp;</th>
                    </thead>

                    <tbody>
                        @foreach ($tasks as $task)
                            {!! Form::open(['method' => 'DELETE', 'route' => ['tasks.destroy', $task->id]]) !!}                            
                                <tr>
                                    <td class="table-text">
                                        <div>{{ $task->name }}</div>
                                    </td>

                                    <td>
                                        {!! Form::submit(trans('task.btn-del'), ['class' => 'btn btn-danger']) !!}
                                   </td>
                                </tr>
                            {!! Form::close() !!}    
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
