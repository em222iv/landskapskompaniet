@extends('......app')
@section('content')
    <section>
     <div id="table-row" class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
          <div class="table-responsive">
            <table class="table table-striped">
                @foreach ($emails as $email)
                     <tbody>
                        <tr>
                            <td>
                                <div class="contain-text">
                                <h4>
                                    {{$email->email}}
                                </h4>
                                </div>
                            </td>
                            <td>
                               {!! Form::open(array('url' => 'admin/email/' . $email->id, 'class' => 'pull-right')) !!}
                                 {!! Form::hidden('_method', 'DELETE')!!}
                                 {!! Form::submit('Ta bort', array('class' => 'btn btn-warning')) !!}
                               {!! Form::close() !!}
                            </td>
                        </tr>
                   </tbody>
                @endforeach
          </table>
          {!! $emails->render() !!}
          </div>
        </div>
     </div>
    </section>
@stop
  @section('footer')
    <script type="text/javascript">
       $('#email_list').select2({
        placeholder: 'Välj adresser'
       });
   </script>
   @endsection