<!---
Backend & Frontend Developer : Abdullah GÖKSAL
abdullahgoksal@outlook.com
0546 500 70 16
-->
<!DOCTYPE html>
<html lang="tr">
<head>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saç Ekim Merkezi</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top" style="z-index: 2;">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">Saçekim Merkezi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" href="javascript:void(0)">Anasayfa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Hakkımızda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">İletişim</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="sol-iletisim d-flex align-items-start flex-column bd-highlight">
    <div class="whatsapp" id="wp-link">
        <img id="whatsapp-image" type="button" onclick="goster()" src="./images/whatsapp.svg" height="40px" width="40px"/>
            <span id="whatsapp-span" class="fs-5 fw-bold text-white mt-2 gizle">&nbsp Whatsapp iletişim</span>
        </div>
        
    <div class="phone" id="phone">
        <img id="phone-image" type="button" onclick="phonegoster()" src="./images/phone.png" height="40px" width="40px"/>
        <span id="phone-span" class="phone-desc fs-5 fw-bold text-white mt-2 gizle">&nbsp Telefon ile ara</span>
    </div>

        <div class="form" id="form">
            <img id="form-image" type="button" onclick="formgoster()" src="./images/form.png" height="40px" width="40px"/>
            <div id="form-span" class="gizle">
                <form action="" method="post">
                    <h5>Hızlı İrtibat</h5>
                    <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">AdSoyad</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                      </div>
                      <div class="input-group input-group-sm mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-sm">Tel No</span>
                        <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm">
                      </div>
                    <div class="mb-3">
                        <button class="btn btn-sm text-black form-control btn-warning">Gönder</button>
                    </div>
                </form>
            </div>
        </div>
</div>


<section class="ust-header">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./images/hospital.jpg" class="d-block w-100" height="500px" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>First slide label</h5>
              <p>Some representative placeholder content for the first slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./images/hospital.jpg" class="d-block w-100"  height="500px" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Second slide label</h5>
              <p>Some representative placeholder content for the second slide.</p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="./images/hospital.jpg" class="d-block w-100"  height="500px" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <h5>Third slide label</h5>
              <p>Some representative placeholder content for the third slide.</p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>    
</section>
