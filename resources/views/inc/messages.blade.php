@if(count($errors) >0)
  @foreach($errors->all() as $error)
     <h3 class="alert alert-danger">{{$error}}</h3>
  @endforeach
@endif

@if(session()->has('success'))
   <h3 style="color:red;font-family:25px ">
   	      {{session()->get('success')}}
          {{session()->forget('success')}}
   </h3>

@endif
@if(session()->has('error'))
   <h3 style="color:red;font-family:25px ">
   	      {{session()->get('error')}}
          {{session()->forget('error')}}
   </h3>

@endif
