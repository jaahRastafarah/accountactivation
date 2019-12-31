@section('scripts')

@if(session()->has('success'))


  <script>

        swal("One More Step", "{!! session()->get('success') !!}", "success")

  </script>
   


 @endif


@if(session()->has('error'))


     <div class="alert alert-danger">

        {!! session()->get('error') !!}


    </div> 
 <!-- <script>
            swal({
            title: "You are not active",
            text: "Want the code again, if yes, click ok",
            type: "error",
            showCancelButton: true,
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
            },
            function(){
            setTimeout(function(){
                swal("Ajax request finished!");
            }, 2000);
            }, "error");

  </script>  -->



@endif

@stop