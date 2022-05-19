
<html>
    <head>
        <meta charset="utf-8">
        <title> Encrypt form data in PHP </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>

      
      <div class="container py-4" id="form-input">
            <div class="row">
                <div class="col-xl-6 col-lg-8 m-auto">
                    <form method="POST" name="form-saya" id="regForm" action="/home/checkdata">
                        <div class="card shadow">
                            <div class="card-header">
                                <h5 class="card-title font-weight-bold"> Login </h5>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" name="email" class="form-control" placeholder="Your email" required/>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Your Password" required/>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-success">Save </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
      </div>
     
        

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="/asset/cryptojs/dist/cryptojs-aes.min.js"></script>
        <script src="/asset/cryptojs/dist/cryptojs-aes-format.js"></script> 
    </body>
</html>