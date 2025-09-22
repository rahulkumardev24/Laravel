<!-- Here we call message components -->
<x-message-banner msg="User about Successfully" class="success" />


<!-- Here we include header -->
@include('common.header')
<h1>About Page </h1>

<h2> User Name : {{$userName}}</h2>
<!-- Here we include inner File And Data is also pass -->

<!-- @includeIf('common.inner' , ['page' => "Hi I am Flutter Developer"]) -->
@include('common.inner' , ['page' => "Hi I am Flutter Developer"])



<style>
    .success {
        background-color: lightgreen;
        color: green;
        padding: 3px 10px;
        border-radius: 2px;
        margin: 10px;
    }

    .error {
        background-color: red;
        color: white;
        padding: 3px 10px;
        border-radius: 2px;
        margin: 10px;
    }
</style>