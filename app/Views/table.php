
<html>
    <head>
        <meta charset="utf-8">
        <title> Encrypt form data in PHP </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
    
      <div class="container py-4" id="form-tampil" >
      <a href="/home/addfile"><button>create new data</button></a>
            <div class="row">
                <div class="col-xl-12 col-lg-8 m-auto">
                    <div class="row">
                      <div class="col-3">id</div>
                      <div class="col-3">nama</div>
                      <div class="col-3">email</div>
                      <div class="col-3">password</div>
                     <?php foreach ($data as $test) { ?>
                     <div class="col-3"><?php echo $test['id']; ?></div>
                     <div class="col-3"><?php echo $test['name']; ?></div>
                     <div class="col-3"><?php echo $test['email']; ?></div>
                     <div class="col-3"><?php echo $test['password']; ?></div>
                     <?php }  ?>
                   </div>
                </div>
            </div>
        </div>
      
     
        

        <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="/asset/cryptojs/dist/cryptojs-aes.min.js"></script>
        <script src="/asset/cryptojs/dist/cryptojs-aes-format.js"></script> 
    </body>
</html>