@extends('layout.backend')
@section('content')
<div class="panel-heading mb-2">
    @if(Session::has('sport_delete'))
    <div class="alert alert-primary alert-dismissible">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <strong>Primary!</strong> {!! session('sport_delete') !!} 
    </div>
    @endif
    <h1>Sport List</h1>
    <a class="btn btn-primary" href="{{route('sport.create')}}">Add</a>
</div>
@if (count($sports) > 0)
<table class="table table-bordered">
<thead>
<th>ID</th>
<th>Name</th>
<th>Datetime</th>
<th>Picture</th>
<th>Duration</th>
<th>Delete</th>
</thead>
<tbody>
@foreach ($sports as $sport)
<tr>
<td>
{!! $sport->id !!}
</td>
<td>
{!! $sport->name !!}
</td>
<td>
{!! $sport->datetime!!}
</td>
<td>
    @if($sport->picture == '') <p>No picture</p>
    @else  <div>{!! Html::image('/img/'.$sport->picture, $sport->name, array('width'=>'60')) !!}</div>
    @endif
</td>
<td>
{!! $sport->duration!!}
</td>
<td>
{!! Form::open(array('url'=>'sport/'. $sport->id, 'method'=>'DELETE')) !!}
{!! csrf_field() !!}
{!! method_field('DELETE') !!}
<button class="btn btn-danger">Delete</button>
{!! Form::close() !!}
</td>
</tr>
@endforeach
</tbody>
</table>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
    $(".delete").click(function() {
        var form = $(this).closest('form');
        $('<div></div>').appendTo('body')
            .html('<div><h6> Are you sure ?</h6></div>')
            .dialog({
                modal: true,
                title: 'Delete message',
                zIndex: 10000,
                autoOpen: true,
                width: 'auto',
                resizable: false,
                buttons: {
                    Yes: function() {
                        $(this).dialog('close');
                        form.submit();
                    },
                    No: function() {
                        $(this).dialog("close");
                        return false;
                    }
                },
                close: function(sport, ui) {
                    $(this).remove();
                }
            });
        return false;
    });
</script>
</div>
@endif
@endsection