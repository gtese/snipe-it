<div id="assigned_user" class="form-group{{ $errors->has($fieldname) ? ' has-error' : '' }}">

    {{ Form::label($fieldname, $translated_name, array('class' => 'col-md-3 control-label')) }}

    <div class="col-md-7 required">
        <select class="js-data-ajax" data-endpoint="users" name="{{ $fieldname }}" style="width: 100%" id="assigned_user_select">
        </select>
    </div>

    <div class="col-md-1 col-sm-1 text-left">
        @can('create', \App\Models\User::class)
            <a href='{{ route('modal.user') }}' data-toggle="modal"  data-target="#createModal" data-dependency="user" data-select='assigned_user_select' class="btn btn-sm btn-default">New</a>
        @endcan
    </div>

    {!! $errors->first($fieldname, '<div class="col-md-8 col-md-offset-3"><span class="alert-msg"><i class="fa fa-times"></i> :message</span></div>') !!}

</div>