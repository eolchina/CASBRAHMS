@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.collections.title')</h3>
    <p>
        <a href="{{ route('data.collections.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped {{ count($collections) > 0 ? 'datatable' : '' }} dt-select">
                <thead>
                    <tr>
                        <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>

                        <th>@lang('global.collections.fields.number')</th>
                        <th>@lang('global.collections.fields.location')</th>
                        <!-- <th>@lang('global.collections.fields.roles')</th> -->
                        <th>&nbsp;</th>

                    </tr>
                </thead>

                <tbody>
                    @if (count($collections) > 0)
                        @foreach ($collections as $collection)
                            <tr data-entry-id="{{ $collection->id }}">
                                <td></td>

                                <td>{{ $collection->name }}</td>
                                <td>{{ $collection->institute }}</td>
                                <!-- <td>
                                    @foreach ($user->roles->pluck('name') as $role)
                                        <span class="label label-info label-many">{{ $role }}</span>
                                    @endforeach -->
                                </td>
                                <td>
                                    <a href="{{ route('data.collections.edit',[$user->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['data.collections.destroy', $collector->id])) !!}
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
        window.route_mass_crud_entries_destroy = '{{ route('data.collections.mass_destroy') }}';
    </script>
@endsection
