<div class="andjica">

<img src="{{asset('/')}}images/logo2.png" width="120" class="img-fluid">

<p>Name:{{$data['name']}}<br> 
Email: {{$data['email']}}<br> 
Subject: {{$data['subject']}}</p>
<hr>
<div class="card">
    <h4>Message from user</h4>
    <p>{{$data['message']}}</p>
</div>
<div class="bottom"></div>

</div>




<Style>
.andjica {
width: 70%;
margin: 0px auto;
padding-top: 50px;
padding-bottom: 50px;
padding-right: 30px;
padding-left: 30px;
background: whitesmoke;
border-width: 10px;
border: 10px solid #207dff ;
border-left-color: whitesmoke;
border-right-color: whitesmoke;
}
.andjica p
{
font-family: cursive;
color: darkviolet;
}
.andjica h4
{
color:silver;
font-family: cursive;
}
.card{
background-color: whitesmoke;
}
.card p 
{
font-size: 16px;
color: darkslateblue
}

</style>
