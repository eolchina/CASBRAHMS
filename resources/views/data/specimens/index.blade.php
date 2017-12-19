@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.specimens.title')</h3>
    <p>
        <a href="{{ route('data.specimens.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($specimens) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>

                        <th>@lang('global.specimens.fields.barcode')</th>
                        <th>@lang('global.specimens.fields.number')</th>
                        <th>@lang('global.specimens.fields.location')</th>
                        <th>&nbsp;</th>

                    </tr>
                </thead>

                <tbody>
                    @if (count($specimens) > 0)
                        @foreach ($specimens as $specimen)
                            <tr data-entry-id="{{ $specimen->id }}">
                                <td></td>

                                <td>{{ $specimen->barcode }}</td>
                                <td>{{ $specimen->number }}</td>
                                <td>{{ $specimen->location }} </td>
                                <td>
                                    <a href="{{ route('data.specimens.edit',[$specimen->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['data.specimens.destroy', $specimen->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                </td>

                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="9">@lang('global.app_no_entries_in_table')</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('javascript')
    <script>
        window.route_mass_crud_entries_destroy = '{{ route('data.specimens.mass_destroy') }}';
    </script>
@endsection
