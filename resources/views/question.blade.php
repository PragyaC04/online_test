<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sections</title>
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
 
<div class="container">
  
 {{--  <div class="card">
    <div class="card-header"><h4>Sections</h4></div>
    <div class="card-body">
    <a href="qview/{sid}"><p size=20px>Qualitative Analysis Section</p></a>
    <a href="aview/{sid}"><p size=20px>Analytical Analysis Section</p></a>
    <a href="cview/{sid}"><p size=20px>Creative Analysis Section</p></a>
    <a href="coview/{sid}"><p size=20px>Comprehension Section</p></a>

    </div> 
  </div>
    <div class="card-footer">          
        <button type="button" onclick="window.location='{{ url ("/new") }}'" class="btn btn-primary">Back</button>
    </div> --}}
  
<!---------------------------qualitative---------------------------------------------------->
<div class="container">
    
    <form action = "action('QualitativeController@edit',$sid,$qid)" method="POST" enctype="multipart/form-data">
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
            <button type="submit" name="submit" class="btn btn-primary">Edit data</button>
        <p class="right">Correct option is: {{$q->correct}}</p>  
    </div>
    <br>
    @endforeach 
    </form>
</div>


<!---------------------------analytical---------------------------------------------------->
<div class="container">
    
    <form action = "" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
     @foreach($analy as $q)
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
        <button type="button" onclick="window.location='{{ url ("/analytical") }}'" class="btn btn-primary">Edit</button>
        <p class="right">Correct option is: {{$q->correct}}</p>  
    </div>
    <br>
    @endforeach 
    </form>
</div>

<!---------------------------creative---------------------------------------------------->
<div class="container">
    <form action = "" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    @foreach($creat as $q)
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
            <input type="radio" name="opt" value="5"> {{ $q->option5}} <img src="{{ asset('uploads/option5/'.$q->option5img)}}"  alt=""> <br>
        </div> 
       
    </div>
    
    <div class="card-footer">
        <button type="button" onclick="window.location='{{ url ("/creative") }}'" class="btn btn-primary">Edit</button>
        <p class="right">Correct option is: {{$q->correct}}</p>  
    </div>
    <br>
    @endforeach 
    </form>
</div>


<!---------------------------comprehension---------------------------------------------------->
<div class="container">
    
    <form action = "" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    @foreach($comp as $q)
    <div class="card">
        <div class="card-header">
            Q{{$q->qid}}&nbsp;
            {{$q->para}}<br>
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
        <button type="button" onclick="window.location='{{ url ("/comprehension") }}'" class="btn btn-primary">Edit</button>
        <p class="right">Correct option is: {{$q->correct}}</p>  
    </div>
    <br>
    @endforeach 
    </form>
</div>
    <button type="button" onclick="window.location='{{ url ("/new") }}'" class="btn btn-primary">Back</button>



</div>

</body>
</html>

