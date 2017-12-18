<!-- the fourth dashboard group -->

<li class="treeview">
    <a href="#">
        <i class="fa fa-pie-chart"></i>
        <span>Visualization</span>
        <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">

        <li class="{{ $request->segment(2) == 'abilities' ? 'active active-sub' : '' }}">
            <a href="{{ route('admin.abilities.index') }}">
                <i class="fa fa-briefcase"></i>
                <span class="title">
                    @lang('global.abilities.title')
                </span>
            </a>
        </li>
        <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
            <a href="{{ route('admin.roles.index') }}">
                <i class="fa fa-briefcase"></i>
                <span class="title">
                    @lang('global.roles.title')
                </span>
            </a>
        </li>
        <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
            <a href="{{ route('admin.users.index') }}">
                <i class="fa fa-user"></i>
                <span class="title">
                    @lang('global.users.title')
                </span>
            </a>
        </li>
    </ul>
</li>
