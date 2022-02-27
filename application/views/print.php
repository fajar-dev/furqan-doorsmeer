<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <title>Document</title>
</head>
<body>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-5">
      <div class="card">
        <h1 class="text-center mb-5">Doorsmeer</h1>
        <div class="table-responsive">
          <table class="table">
            <tbody>
              <tr>
                <td class="py-3 text-center">Nama : <?php echo htmlentities($data->nama, ENT_QUOTES, 'UTF-8');?></td>
              </tr>
            </tbody>
          </table>
          <hr>
        </div>
        <div class="row mt-5 text-center">
          <div class="col-12 pb-5">
            <p>Kode Antrian</p>
            <h1 class="font-weight"><?php echo htmlentities($data->kode, ENT_QUOTES, 'UTF-8');?></h1>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
      window.onload = function() { window.print(); window.close();}
 </script>
</body>
</html>