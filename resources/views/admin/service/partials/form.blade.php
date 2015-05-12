<div class="form-group">
    {!! Form::label('img', 'Bild') !!}
    {!! Form::file('img',['class'=>'form-control']) !!}
   </div>

   <div class="form-group">
    {!! Form::label('title','Titel:') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
   </div>

   <div class="form-group">
    {!! Form::label('text','Text:') !!}
    {!! Form::textarea('text',null,['class'=>'form-control']) !!}
   </div>
    <div class="form-group">
       {!! Form::label('sub_list','Deltjänster') !!}
      {!! Form::select('sub_list[]',$subservices,null,['id'=>'sub_list','class'=>'form-control','multiple']) !!}
    </div>
   <div class="form-group">
    {!! Form::submit($submitButton,['class'=>'btn btn-primary']) !!}
   </div>
   @section('footer')
    <script type="text/javascript">
    console.log('df');
       $('#sub_list').select2({
        placeholder: 'Välj deltjänster'
       });
   </script>
   @endsection
