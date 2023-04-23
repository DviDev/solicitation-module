<div class="dark:text-gray-200 text-gray-800 px-4 space-y-1">
    <div class="space-x-1">
        <x-dvui::link text="groups" url="{{route('admin.solicitation.brainstorm.module.groups', $row->id)}}" teal class="rounded-l-md px-2 py-1"/>
        <x-dvui::link text="requests" url="{{route('admin.solicitation.brainstorm.module.requests', $row->id)}}" teal class="px-2 py-1"/>
        <x-dvui::link text="user-permissions" url="{{route('admin.solicitation.brainstorm.module.user-permissions', $row->id)}}" teal class="rounded-r-md px-2 py-1"/>
    </div>
    @if(isset($row->content))
        <div>Descrição: {{$row->content}}</div>
    @endif
</div>
