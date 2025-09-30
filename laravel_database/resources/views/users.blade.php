<div>
 <h1>Users Data List</h1>
<!-- {{ print_r($myUsers)}} -->

<table border="1">
    <tr>

    <td>Name</td>
    <td>Email</td>
    <td>Phome</td>


    
</tr>

@foreach($myUsers as $user)
<tr>
    <td>{{$user->name}}</td>
    <td>{{$user->email}}</td>
    <td>{{$user->phone}}</td>
</tr>
@endforeach
</table>
</div>
