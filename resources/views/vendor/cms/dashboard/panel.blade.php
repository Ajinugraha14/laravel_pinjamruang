<li class="nav-item">
    <a class="nav-link" href="{{ URL::to('/') }}"><span class="fa fa-arrow-left"></span> kembali </a>
</li>

{!! ModuleService::menus() !!}

{!! Cms::packageMenus() !!}

@if (Route::get('admin/users'))
    <li class="sidebar-header"><span>{{Auth::user()->name}}</span></li>
@endif

@if (Auth::user()->hasrole('admin'))
    <li class="nav-item @if (Request::is('admin/dashboard') || Request::is('admin/dashboard/*')) active @endif">
        <a class="nav-link" href="{!! url('admin/dashboard') !!}"><span class="fa fa-fw fa-tachometer"></span> Dashboard</a>
    </li>
    @if (Route::get('admin/users'))
    <li class="nav-item @if (Request::is('admin/users') || Request::is('admin/users/*')) active @endif">
        <a class="nav-link" href="{!! url('admin/users') !!}"><span class="fa fa-fw fa-users"></span> Users</a>
    </li>

    @endif
    <li class="nav-item @if (Request::is('pinjams') || Request::is('pinjams/*')) active @endif">
        <a class="nav-link" href="{!! route('pinjams.index') !!}"><span class="fa fa-fw fa-book"></span> Peminjaman</a>
    </li>
@else
    <li class="nav-item @if (Request::is('dashboard') || Request::is('dashboard/*')) active @endif">
        <a class="nav-link" href="{!! url('dashboard') !!}"><span class="fa fa-fw fa-tachometer"></span> Dashboard</a>
    </li>
@endif

    
    <li class="nav-item @if (Request::is('ruangs') || Request::is('ruangs/*')) active @endif">
        <a class="nav-link" href="{!! route('ruangs.index') !!}"><span class="fa fa-fw fa-bookmark"></span> Ruangan</a>
    </li>


    <li class="nav-item @if (Request::is('user/pinjams') || Request::is('user/pinjams/*')) active @endif">
        <a class="nav-link" href="{!! url('user/pinjam') !!}"><span class="fa fa-fw fa-edit"></span> Pinjam</a>
    </li>
    
