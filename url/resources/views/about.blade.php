<div>
    <h1>This is my about page</h1>
<h3>
    {{ URL::current() }}</h3>

    
  <h3>  {{ URL::full() }}</h3>
  <h3>  {{ URL()->current() }}</h3>

  <!-- get pervoius link matlab kiss linke se aye ho ess page pe  -->

  <h2> Last Url : {{ URL::previous() }}</h2>

  <a href="{{URL::to('home')}}">Home</a>
  <br>
  <a href="/home">Home</a>
  



</div>
