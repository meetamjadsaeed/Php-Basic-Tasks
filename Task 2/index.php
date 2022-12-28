<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body id="body">


<div class="container">
  <h1>WEB MID TASK</h1>
  <form role="form" id="contactForm" class="contact-form" data-toggle="validator" class="shake">
    <div class="alert alert-danger display-error" style="display: none">
    </div>
    <div class="form-group">
      <div class="controls">
        <input type="password" id="name" class="form-control" placeholder="Input Password">
      </div>
    </div>
    
    <button type="submit" id="submit" class="btn btn-success"><i class="fa fa-check"></i> Submit</button>
  </form>
</div>


</body>


<script type="text/javascript">
  $(document).ready(function() {


      $('#submit').click(function(e){
        e.preventDefault();


        var name = $("#name").val();
        


        $.ajax({
            type: "POST",
            url: "/formProcess.php",
            dataType: "json",
            data: {name:name},
            success : function(data){
                if (data.code == "200"){
                    alert("Success: " +data.msg);
                } else {
                    $(".display-error").html("<ul>"+data.msg+"</ul>");
                    $(".display-error").css("display","block");
                }
            }
        });


      });
  });
</script>
</html>