<!-- the collection data management dashboard group -->
<li class="treeview">
    <a href="#">
        <i class="fa fa-edit"></i>
        <span>Data Management</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">

        <li class="{{ $request->segment(2) == 'herbariums' ? 'active active-sub' : '' }}">
            <a href="{{ route('data.herbariums.index') }}">
                <i class="fa fa-briefcase"></i>
                <span class="title">
                    @lang('global.herbariums.title')
                </span>
            </a>
        </li>
        <li class="{{ $request->segment(2) == 'collectors' ? 'active active-sub' : '' }}">
            <a href="{{ route('data.collectors.index') }}">
                <i class="fa fa-briefcase"></i>
                <span class="title">
                    @lang('global.collectors.title')
                </span>
            </a>
        </li>
        <li class="{{ $request->segment(2) == 'collections' ? 'active active-sub' : '' }}">
            <a href="{{ route('data.collections.index') }}">
                <i class="fa fa-user"></i>
                <span class="title">
                    @lang('global.collections.title')
                </span>
            </a>
        </li>
        <li class="{{ $request->segment(2) == 'specimens' ? 'active active-sub' : '' }}">
            <a href="{{ route('data.specimens.index') }}">
                <i class="fa fa-user"></i>
                <span class="title">
                    @lang('global.specimens.title')
                </span>
            </a>
        </li>
    </ul>
</li>
