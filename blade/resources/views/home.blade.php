<h1>This is Home Page </h1>
<h2> Name : {{$myName}}</h2>
<h2>Random Numer : {{rand(1,100)}}</h2>

<h2>{{$users[0]}}</h2>
<h2>{{$users[1]}}</h2>
<h2>{{$users[2]}}</h2>

<h1>Conditions Statement</h1>


@if($myName == "Rahul")
<h2> I am Flutter Developer </h2>
@elseif ($myName == "Satish") 
<h2> Web Developer </h2>
@else
<h2> UI and Ux Developer </h2>

@endif

<h1>For Loop</h1>

@for($i= 0 ; $i<= 10; $i++)
    <p>{{$i}}</p>
    @endfor

    <h1>For Each Loop</h1>
    <h1>Array Print using For each Loop</h1>
    @foreach($users as $user)
    <h3>{{$user}}</h3>
    @endforeach