<div class="dark:text-gray-200 text-gray-800 px-4 space-y-1">
    <div class="space-x-1">
        <x-button href="{{route('admin.solicitation.brainstorm.module.request.comments', $row->id)}}"  label="comments" teal/>
        <x-button href="{{route('admin.solicitation.brainstorm.module.request.files', $row->id)}}"  label="files" teal/>
        <x-button href="{{route('admin.solicitation.brainstorm.module.request.tasks', $row->id)}}"  label="tasks" teal/>
    </div>
    @if(isset($row->description))
        <div>Descrição: {{$row->description}}</div>
    @endif
</div>
