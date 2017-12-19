@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.herbariums.title')</h3>
    <p>
        <a href="{{ route('data.herbariums.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($herbariums) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>

                        <th>@lang('global.herbariums.fields.code')</th>
                        <th>@lang('global.herbariums.fields.name')</th>
                        <th>@lang('global.herbariums.fields.curator')</th>
                        <th>@lang('global.herbariums.fields.email')</th>
                        <th>&nbsp;</th>

                    </tr>
                </thead>

                <tbody>
                    @if (count($herbariums) > 0)
                        @foreach ($herbariums as $herbarium)
                            <tr data-entry-id="{{ $herbarium->id }}">
                                <td></td>

                                <td>{{ $herbarium->code }}</td>
                                <td>{{ $herbarium->name }}</td>
                                <td>{{ $herbarium->curator }}</td>
                                <td>{{ $herbarium->email }}</td>

                                <td>
                                    <a href="{{ route('data.herbariums.edit',[$herbarium->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['data.herbariums.destroy', $herbarium->id])) !!}
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
        window.route_mass_crud_entries_destroy = '{{ route('data.herbariums.mass_destroy') }}';
    </script>
@endsection
