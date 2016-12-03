<div class="row" style="text-align: center; margin-bottom: 20px">
    <div class="btn-group">
        <button class="btn btn-danger" data-toggle="tooltip" title="Ban">
            <i class="fa fa-ban"></i>
        </button>

        <button class="btn btn-default" data-toggle="tooltip" title="E-mail">
            <i class="fa fa-envelope"></i>
        </button>

        <form style="display: inline;" action="{{ url('users') }}" method="POST">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}

            <button class="btn btn-danger" style="border-left: 0" data-toggle="tooltip" title="Delete"> 
                <i class="fa fa-trash"></i>
            </button>
        </form>

    </div>
</div>
