<div class="form-group">
    {!! Form::label('img', 'Bild') !!}
    {!! Form::file('img',['class'=>'form-control']) !!}
   </div>
   <div class="form-group">
    {!! Form::label('head-title','Svart Titel:') !!}
    {!! Form::text('head-title',null,['class'=>'form-control']) !!}
   </div>
    <div class="form-group">
        {!! Form::label('sub-title','Grå Titel:') !!}
        {!! Form::text('sub-title',null,['class'=>'form-control']) !!}
    </div>
   <div class="form-group">
    {!! Form::label('text','Text:') !!}
    {!! Form::textarea('text',null,['class'=>'form-control']) !!}
   </div>

   <div class="form-group">
    {!! Form::submit($submitButton,['class'=>'btn btn-primary']) !!}
   </div>