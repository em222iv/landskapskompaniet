<div class="form-group">
    {!! Form::label('img', 'Bild') !!}
    {!! Form::file('img',['class'=>'form-control']) !!}
   </div>
   <div class="form-group">
    {!! Form::label('head-title','Svart Titel:') !!}
    {!! Form::text('head-title',null,['class'=>'form-control']) !!}
   </div>
   <div class="form-group">
    {!! Form::label('text','Text:') !!}
    {!! Form::textarea('text',null,['class'=>'form-control']) !!}
   </div>
  <div class="form-group">
      {!! Form::label('service_list','Tjänster') !!}
     {!! Form::select('service_list[]',$services,null,['id'=>'service_list','class'=>'form-control','multiple']) !!}
   </div>
   <div class="form-group">
    {!! Form::submit($submitButton,['class'=>'btn btn-primary']) !!}
   </div>
  @section('footer')
   <script type="text/javascript">
   console.log('df');
      $('#service_list').select2({
       placeholder: 'Välj tjänster'
      });
  </script>
  @endsection
