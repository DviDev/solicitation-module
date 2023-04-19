<div class="dark:text-gray-200 text-gray-800 px-4 space-y-1">
    <div class="space-x-1">
        <x-button href="{{route('admin.solicitation.brainstorm.module.groups', $row->id)}}"  label="groups" teal/>
        <x-button href="{{route('admin.solicitation.brainstorm.module.requests', $row->id)}}"  label="requests" teal/>
        <x-button href="{{route('admin.solicitation.brainstorm.module.user-permissions', $row->id)}}"  label="user-permissions" teal/>
    </div>
    @if(isset($row->content))
        <div>Descrição: {{$row->content}}</div>
    @endif
</div>
