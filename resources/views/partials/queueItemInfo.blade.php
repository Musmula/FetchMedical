<ul class="list-group">
    <li class="list-group-item">Name: {{ $item->name }}</li>
    <li class="list-group-item">Type: {{ $item->type }}</li>
    <li class="list-group-item">Message:
        <p class="well">{{ $item->message }}</p>
    </li>
</ul>