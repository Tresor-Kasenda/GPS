@props([
    'dropdown_name',
    'name'
])
<li>
    <a data-bs-toggle="modal" href="#{{$dropdown_name}}">
        <span>{{ $name }}</span>
    </a>
</li>