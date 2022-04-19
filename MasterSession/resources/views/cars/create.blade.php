<!doctype html>
<html lang="en">
  <head>
    <title>Product</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body style="background-color: #191414;color:#ffffff">

  <div class="container">

        <div class="text-center"> 
                <h1 class="display-3 mt-2">Pak <strong style="color:#1ed760">Wheels</strong></h1>
        </div>
<div class="mt-5">

    <div class="float-right mb-3">
            <a href="{{ route("cars.index") }}" style="background-color: #1db954;"  class="btn btn-primary ">Back To Home</a>
    </div>
    
                  <form action="{{ route('cars.store') }}" method="post">


                   @csrf

                  <div class="form-group">
                    <label for="">Name</label>
                    <input type="text"
                      class="form-control" name="Name" >
                  </div>
                  <div class="form-group">
                    <label for="">Brand</label>
                    <input type="text"
                      class="form-control" name="Brand" >
                  </div>
                  <div class="form-group">
                    <label for="">Price</label>
                    <input type="text"
                      class="form-control" name="Price" >
                  </div>
                  <div class="form-group">
                    <label for="">Model</label>
                    <input type="text"
                      class="form-control" name="Model" >
                  </div>

                  <input type="submit" value="Submit" name="submit" class="btn btn-success mt-3" >

                  </form>
                 


</div>


      



  </div>

      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>