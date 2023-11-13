<div class="dark:text-gray-200 text-gray-800 px-4 space-y-1">
    <x-dvui::button.group class="text-sm border dark:border-gray-500 dark:text-gray-400 divide-x divide-gray-500">
        <x-dvui::link text="permissions"
                      url="{{route('admin.solicitation.brainstorm.module.group.permissions', $row->id)}}" teal
                      class="rounded-l-md px-2 py-1"/>
        <x-dvui::link text="permission-users"
                      url="{{route('admin.solicitation.brainstorm.module.group.permission-users', $row->id)}}" teal
                      class="rounded-r-md px-2 py-1"/>
    </x-dvui::button.group>
    @if(isset($row->description))
        <div>Descrição: {{$row->description}}</div>
    @endif
</div>
