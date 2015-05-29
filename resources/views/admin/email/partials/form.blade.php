<div id="email-form">
    <div class="form-group">
      {!! Form::label('title', 'Skriv ett meddelande') !!}
      {!! Form::text('title',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('text', 'Skriv ett meddelande') !!}
      {!! Form::textarea('text',null,['class'=>'form-control']) !!}
      {!! Form::submit($submitButton,['class'=>'btn btn-primary']) !!}
    </div>
</div>