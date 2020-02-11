<h1>Hello from View</h1>
<?php 
print_r($data);
?>
<br>
{{$data['name']}}
<br><br>

<div>
@if($data['name']=='abc')
Hello, this is me
@elseif($data['name']=='abcd')
Hello, this is my friend
@else
Hello, new user
@endif
</div>

<div>
@foreach($data as $i)
<li>{{$i}}</li>
@endforeach
</div>
<br><br>

<div>
@foreach($data as $i)
<li>{!!$i!!}</li>
@endforeach
</div>