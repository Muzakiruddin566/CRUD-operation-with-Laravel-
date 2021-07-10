<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="webfonts/all.css">

</head>
<style>
    .button{
        background: green;
        color: white;
        padding-right:20px;
        padding-left:20px;
    }

    .head{
        text-align: center;
        color: white;
        background: #192f59;
    }

    .head-1{
        border-left: 1px solid white;
        border-right: 1px solid white;
    }

    p{
        color: white;
    }

    #h2{

        background-color: #192f59;
        color: white;
        border-radius: 5px;
        text-align: center;
    }

    #icon-1{
        position: absolute;
        top: 108px;
        margin-left: 10px;


    }
    input{
        width:10px;
    }
    #icon-2{
        position: absolute;
        top: 185px;
        margin-left: 10px;
    }

    #icon-3{
        position: absolute;
        top: 248px;
        margin-left: 10px;
    }

    #icon-4{
        position: absolute;
        top: 310px;
        margin-left: 10px;

    }

    #icon-5{
        position: absolute;
        top: 372px;
        margin-left: 10px;

    }

    .button-1{
        border-radius: 50px;
        padding-left: 90px;
        padding-right: 90px;
        padding-top: 10px;
        padding-bottom: 10px;
        margin-left: 90px;
        margin-bottom: 30px;
    }
    #p-2{
        text-align: center;
        color: black;
    }

    .back-1{
        background-color: #F4F6F6;
        border-radius: 50px;
        margin-left: 21px;
        width: 85%;
    }
    .form-1{
        background: #F4F6F6;
    }
    .form-1-1{
        background-color: white;
        border-radius: 10px;
        margin-bottom: 20px;
        margin-top: 20px;
    }
    .data{
        color: white;
        text-decoration: none;
    }
    .data:hover{
        text-decoration: none;
        color: white;
    }
    a,{
        color: grey;
        text-decoration: none;
    }
    .pic{
        width: auto;
        height: 150px;
    }

    .fotter-1{
        background-color: #192f59;

    }

    #form-bottom{
        border-radius: 50px;
    }

    .form-2{
        position: absolute;
        right: 30px;
        top: 185px;
    }

    .ancor{
        color: white;
        text-decoration: none;
    }

    .ancor-1{
        margin-left: 100px;
        color: white;

    }
    h4{
        color: white;
    }

    .fotter-2{
        margin-left: 120px;

    }
    .icon-6{
        position: absolute;
        left: 90px;
        color: white;
    }

    .head-2{
        position: absolute;
        left: 22px;
        top: 5px;
    }

    .font-1{
        position: absolute;
        border-top-left-radius: 50px;
        border-bottom-left-radius: 50px;
        background-color: #192f59;
        color: white;
        padding-left: 10px;
        padding-right: 10px;
        padding-bottom: 10px;
        padding-top: 12px;
        top: -6px;
        left:  -10px;
    }

</style>
<body>



<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 head">
            <h1>Sign UP</h1>
            <p>Welcome to Laravel CRUD</p>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row d-flex justify-content-center  form-1">

        <div class="col-md-4 form-1-1">
            <div  id="h2" class="mt-4 pt-2 pb-2">
                <h2>SIGN UP</h2>
            </div>
            <div class="form text">
                <form class="was-validated" method="post" action="{{ route('form1') }}">
                    @csrf
                    <div class="form-group">
                        <div id="icon-1">
                            <i class="fa fa-user font-1"></i>
                        </div>
                        <input type="text" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Name" class="form-control mt-3 back-1" name="Name" id="name" required=""><br>
                        <div id="icon-2">
                            <i class="fa fa-envelope font-1"></i>
                        </div>
                        <input type="Email" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Enter Email" class="form-control mt-3 back-1" name="Email" id="Email" required=""><br>
                        <div id="icon-3">
                            <i class=" fa fa-phone font-1"></i>
                        </div>
                        <input type="Number" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Phone Number" class="form-control back-1" name="number" id="number" required=""><br>
                        <div id="icon-4">
                            <i class=" fa fa-lock font-1"></i>
                        </div>
                        <input type="Password" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Password" class="form-control back-1" name="Password" id="Password" required="" ><br>
                    </div>
                    <p id="p-2">If alredeay have an account?Please <a href="#">Login</a></p>
                    <button type="submit" class="btn btn-success button-1" value="submit"><b><a href="{{route('form1')}}"></a>Submit</b></button>

                </form>
                <button class="btn btn-success button-1"><b><a href="{{route('seedata')}}" class="data">See Data</a></b></button>
            </div>



        </div>


    </div>




</div>



</body>
</html>
