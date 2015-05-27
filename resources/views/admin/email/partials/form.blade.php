
        <div class="form-group">
          {!! Form::label('text', 'Skriv ett meddelande') !!}
          {!! Form::textarea('text',null,['class'=>'form-control']) !!}
          {!! Form::submit($submitButton,['class'=>'btn btn-primary']) !!}
       </div>
