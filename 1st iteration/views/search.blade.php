
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Advanced Search</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" media="screen" href="https://fontlibrary.org/face/penna" type="text/css"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
    .form-group{
        margin:10px;
        padding:10px;
        }
 p,h1,h2,h3,h4,div,button,input { 
   font-family: 'PennaRegular'; 
   font-weight: bold; 
   font-style: normal; 
   font-size:40px;
}
</style>
<body>

<form action="/search" method="get">
{{ csrf_field() }}
<div class="container">
<div class="jumbotron">
    <center><h1 style="align:center">Book Details</h1> 
    <p><b>Advanced Search</b></p>
    </center>     
</div>
  <div class="form-group">
      <label class="control-label col-sm-2" for="title">Title:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" style="font-size:30px;" id="title" placeholder="Title" name="title">
      </div>
    </div>
    <br/>
    <div class="form-group">
      <label class="control-label col-sm-2" for="author">Author:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control"style="font-size:30px;" id="author" placeholder="Author" name="author">
      </div>
    </div>
    <br/>
    <div class="form-group">
      <label class="control-label col-sm-2" for="publisher">Publisher:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" style="font-size:30px;"id="author" placeholder="Publisher" name="publisher">
      </div>
    </div>
    <br/>
    <div class="form-group">
      <label class="control-label col-sm-2" for="language">Language:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="language" style="font-size:30px;" placeholder="Language" name="language">
      </div>
    </div>
	<br/>
    <div class="form-group">
      <label class="control-label col-sm-2" for="translation">Translation:</label>
      <div class="col-sm-10">          
        <input type="text" class="form-control" id="translation" style="font-size:30px;" placeholder="Translation Title" name="translation">
      </div>
    </div>
    <br/>
    <div class="form-group">
      <label class="control-label col-sm-2" for="genre">Genre:</label>
      <div class="col-sm-10">          
        <input type="text" style="font-size:30px;" class="form-control" id="genre" placeholder="Genre" name="genre">
      </div>
    </div>
    <br/>
    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default"><b>Submit</b></button>
      </div>
    </div>
	</div>
   </form>


</body>
</html>

