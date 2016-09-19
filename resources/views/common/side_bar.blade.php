<div class="panel panel-primary">
    <div class="panel-heading">
        <h3 class="panel-title"><i class="fa fa-dashboard"></i> Admin</h3>
    </div>
    <div class="panel-body">
        <div class="list-group">
            <a href="{{ url('/colleges') }}" class="list-group-item">Colleges</a>
            <a href="{{ url('/schools') }}" class="list-group-item">Schools</a>
            <a href="{{ url('/departments') }}" class="list-group-item">Departments</a>
            <a href="{{ url('/programs') }}" class="list-group-item">Programs</a>
            <a href="{{ url('/courses') }}" class="list-group-item">Courses</a>
            <a href="{{ url('/roles') }}" class="list-group-item @if(Request::is('roles')) active @endif">Roles</a>
            <a href="{{ url('/permissions') }}" class="list-group-item @if(Request::is('permissions')) active @endif">Permissions</a>
            <a href="{{ url('/users') }}" class="list-group-item @if(Request::is('users')) active @endif">Users</a>
        </div>
    </div>
</div>
