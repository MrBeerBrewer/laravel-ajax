@extends('layouts.app')

@section('title', 'SillyJax!')

@section('content')

  <div id="main">
    
    <form action="{{ url('silly') }}" method="POST">
        <input type="text" name="name" id="name" placeholder="Cual es tu nombre?">
        <input type="submit" value="JackItUp!">
      {{ csrf_field() }}
    </form>
    
    <script>
      $("#name").blur(function(){
        var name = $("#name").val();
        var token = $('#main > input[name="_token"]').val();
           
        $.ajax({
            type: "POST",
            url: "{{ url('silly') }}",
            //dataType: 'JSON',
            data: {name: name, _token: token},
            success: function (data, status) {
                 alert("Data: " + data + "\nStatus: " + status);
            },
            error: function (data) {
                alert('Error:', data);
            }
        });
                
      });
    </script>
    
   </div>

@endsection