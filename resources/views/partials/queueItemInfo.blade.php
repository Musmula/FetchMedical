<ul class="list-group">
    <li class="list-group-item">Name: {{ $item->name }}</li>
    <li class="list-group-item">Type: {{ $item->type }}</li>
    <li class="list-group-item">Message:
        <textarea readonly rows="7" style="width: 100%; resize: vertical;" class="well">{{ $item->message }}</textarea>
    </li>
    <li class="list-group-item">Users name: {{ $pet->user->name }}</li>
    <li class="list-group-item">Users email: {{ $pet->user->email }}</li>
</ul>

@if($pet->user != Auth::user())
    <div class="panel-body">
        <div class="btn-group" style="text-align: center;">

            <button class="btn btn-danger" 
                onclick="document.getElementById('drop_user').submit()" >
                <i class="fa fa-btn fa-trash"></i>
                Delete pet
            </button>

            <button class="btn btn-danger"
                onclick="document.getElementById('ban_user').submit()" >
                <i class="fa fa-btn fa-ban"></i>
                Ban user
            </button>

        </div>
    </div>

    <form id="drop_user" action="{{ url('/pets/' . $pet->id) }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('DELETE') }}
    </form>

    <form id="ban_user" action="{{ url('/user/' . $pet->user->id . '/ban') }}" method="POST">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
    </form>
@endif