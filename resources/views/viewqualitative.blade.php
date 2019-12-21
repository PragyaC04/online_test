

<!------------------------------------------------------------------------------------------->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Qualitative</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  <style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
  color: white;
}
li a:hover{
    color:white;
}

.active {
  background-color: #4CAF50;
}

.right{
    text-align:right;
}
</style>
</head>
<body>
 
 {{-- <div>
    <ul>
    <li><a href="new">Home</a></li>
    <li><a class="active" href="#">Qualitative Analysis</a></li>
    <li><a href="aview">Analytical Analysis</a></li>
    <li><a href="cview">Creative Analysis</a></li>
    <li><a href="coview">Comprehension</a></li>
    </ul>
</div> --}}
<div class="container">
    
    <form action = "" method="POST" enctype="multipart/form-data">
    {{-- <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <input type="hidden" name="hid1" value="{{$q->qid}}">
        <input type="hidden" name="hid2" value="{{$q->setid}}"> 
        --}}
    @foreach($qual as $q)
    <div class="card">
        <div class="card-header">
            Q{{$q->qid}}&nbsp;
            {{$q->question}}
            <img src="{{ asset('uploads/questions/'.$q->questionimg)}}"  alt="">
            <p class="right">{{$q->marks}}</p>
        </div>
        
        
        <div class="card-body">
            <input type="radio" name="opt" value="1"> {{ $q->option1}} <img src="{{ asset('uploads/option1/'.$q->option1img)}}"  alt=""> <br>
            <input type="radio" name="opt" value="2"> {{ $q->option2}} <img src="{{ asset('uploads/option2/'.$q->option2img)}}"  alt=""> <br>
            <input type="radio" name="opt" value="3"> {{ $q->option3}} <img src="{{ asset('uploads/option3/'.$q->option3img)}}"  alt=""> <br>
            <input type="radio" name="opt" value="4"> {{ $q->option4}} <img src="{{ asset('uploads/option4/'.$q->option4img)}}"  alt=""> <br>
        </div> 
       
    </div>
    
    <div class="card-footer">
        <button type="button" onclick="window.location='{{ url ("/question") }}'" class="btn btn-primary">Edit</button>
        <p class="right">Correct option is: {{$q->correct}}</p>  
    </div>
    <br>
    @endforeach 
    <button type="button" onclick="window.location='{{ url ("/question") }}'" class="btn btn-primary">Back</button>
    </form>
</div>

</body>
</html>


