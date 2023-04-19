<div class="dark:text-gray-200 text-gray-800 px-4 space-y-1">
    <div class="space-x-1">
        <x-button href="{{route('admin.solicitation.brainstorm.module.group.permissions', $row->id)}}"  label="permissions" teal/>
        <x-button href="{{route('admin.solicitation.brainstorm.module.group.permission-users', $row->id)}}"  label="permission-users" teal/>
    </div>
    @if(isset($row->description))
        <div>Descrição: {{$row->description}}</div>
    @endif
</div>
