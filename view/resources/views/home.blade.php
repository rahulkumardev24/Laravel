<!-- here we call message componets -->
<x-message-banner msg="User Login Successfully" class="success" />

<br><br><br>

<x-message-banner msg="This is Error meaage" class="error" />

<br><br><br>
<x-message-banner msg="This is warning message " class="warning" />


<!-- Here we include header  -->
@include('common.header')
<h1>Home Page </h1>

<!-- Here we include inner file And Data also pass -->

@include('common.inner' , ['page' => "Data is received"])

<!-- Craete style  -->

<style>
    .success {
        background-color: lightgreen;
        color: green;
        padding: 3px 10px;
        border-radius: 2px;
        margin: 10px;
        display: inline;
    }


    .error {
        background-color: red;
        color: white;
        padding: 3px 10px;
        border-radius: 2px;
        margin: 10px;
        display: inline;
    }
        .warning {
        background-color: orange;
        color: white;
        padding: 3px 10px;
        border-radius: 2px;
        margin: 10px;
        display: inline;
    }
</style>