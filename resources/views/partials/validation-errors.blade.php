@if($errors->any())
 <ul>
 @foreach($errors->all() as $error)
 <li>{{$error}}</li>
 @endforeach
 @endif
 </ul>