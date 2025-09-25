<div>
    <h1>This is my Home page </h1>
    <a href="/about">About Page</a>

      <!-- get pervoius link matlab kiss linke se aye ho ess page pe  -->

  <h2> Last URl : {{ URL::previous() }}</h2>


  <a href="{{URL::to('about',['rahul'])}}">About Rahul</a>

  
</div>
