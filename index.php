<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="tugas3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>3D Kalkulator</title>
</head>
<body>

  <div class="container-fluid">
      <div class="header text-center">
        3D Kalkulator
      </div>
    
      <div class="topnav" id="myTopnav">
        <a href="#home" class="active">Home</a>
        <a href="#silinderin">Silinder</a>
        <a href="#kerucutin">Kerucut</a>
        <a href="#bolain">Bola</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>

      <div class="container text-center">  
          <h2 id="name"></h2>
          <p>Masukkan sesuai bangun ruang yang ingin anda hitung</p>
          <div class="container">
            <div id="silinderin">
              <div class="row">
                  <div class="col-md-5">
                      <div class="kolom">
                        <img src="silinder.png" class="img-responsive" width="300px" height="300px">        
                      </div>
                  </div>
                  <div class="col-md-6">
                      <div class="kolom">
                        <h2>Silinder</h2>
                        <form>
                          <div class="form-group">
                            <label for="jari-jari">Masukkan jari-jari silinder (dalam meter)</label>
                            <input type="text" class="form-control" id="jari-jaris">
                          </div>
                          <div class="form-group">
                            <label for="tinggi">Masukkan tinggi silinder (dalam meter)</label>
                            <input type="text" class="form-control" id="tinggis">
                          </div>		
                          <button onclick="silinder()" type="button" class="btn btn-dark">Hitung</button>
                          <p id="results0"></p>
                          <p id="results1"></p>
                          <p id="results2"></p>
                        </form>               
                      </div>
                  </div>
              </div>
            </div>
            <div id="kerucutin">  
              <div class="row">
                <div class="col-md-5">
                    <div class="kolom">
                      <img src="kerucut.png" class="img-responsive" width="300px" height="300px">        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="kolom">
                      <h2>Kerucut</h2>
                      <form>
                        <div class="form-group">
                          <label for="jari-jari">Masukkan jari-jari kerucut (dalam meter)</label>
                          <input type="text" class="form-control" id="jari-jarik">
                        </div>
                        <div class="form-group">
                          <label for="garis">Masukkan garis pelukis kerucut (dalam meter)</label>
                          <input type="text" class="form-control" id="garisk">
                        </div>	
                        <div class="form-group">
                          <label for="tinggi">Masukkan tinggi kerucut (dalam meter)</label>
                          <input type="text" class="form-control" id="tinggik">
                        </div>	
                        <button onclick="kerucut()" type="button" class="btn btn-dark">Hitung</button>
                        <p id="resultk0"></p>
                        <p id="resultk1"></p>
                        <p id="resultk2"></p>
                      </form>               
                    </div>
                </div>       
              </div>
            </div>
            <div id="bolain">  
              <div class="row">
                <div class="col-md-5">
                    <div class="kolom">
                      <img src="bola.png" class="img-responsive" width="300px" height="300px">        
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="kolom">
                      <h2>Bola</h2>
                      <form>
                        <div class="form-group">
                          <label for="jari-jari">Masukkan jari-jari bola (dalam meter)</label>
                          <input type="text" class="form-control" id="jari-jarib">
                        </div>		
                        <button onclick="bola()" type="button" class="btn btn-dark">Hitung</button>
                        <p id="resultb0"></p>
                        <p id="resultb1"></p>
                        <p id="resultb2"></p>
                      </form>               
                    </div>
                </div>
              </div>
            </div>
          </div>     
            
      </div>

      <footer>
        <div class="foto">
            <a href="https://www.instagram.com/muhammad_rohfi/"><img src="ig.png" width="40px" height="40px"></a>
            <a href="https://www.youtube.com/channel/UC5k_fUSzxjwqAYi0LmFbIig"><img src="yt.png" width="40px" height="40px"></a>
            <a href="https://github.com/rohfi"><img src="gt.png" width="40px" height="40px"></a>
        </div>
      </footer> 
    </div>

  <script src="javascrip.js"></script>
  <script>
    window.nama()
  </script>
</body>
</html>
