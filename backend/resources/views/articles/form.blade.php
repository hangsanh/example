<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>

             
            {!! Form::text('title', null, array('placeholder' => 'Title','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description</strong>

            
           {!! Form::textarea('description', null, array('placeholder' => 'description','class' => 'form-control','style'=>'height:100px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>time start:</strong>
             
           {!! Form::textarea('time_start', null, array('placeholder' => 'time start','class' => 'form-control','style'=>'height:100px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>deadline time:</strong>
            
          {!! Form::textarea('deadline_time', null, array('placeholder' => 'deadline time','class' => 'form-control','style'=>'height:100px')) !!}
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Limit people:</strong>
            
          {!! Form::textarea('limit_people', null, array('placeholder' => 'Limit people','class' => 'form-control','style'=>'height:100px')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>