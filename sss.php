
<section id="iletisim" class="form-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
              <!--
                Accordion Menu
              -->
              <div class="alert fw-bold text-uppercase bg-warning text-white">Sıkça Sorulan Sorular</div>
              <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Saç Ekimi Nasıl Yapılır?
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the first item's accordion body.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      Sakal Ekimi Nasıl Yapılır?
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the second item's accordion body. Let's imagine this being filled with some actual content.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      Kaş Ekimi Nasıl Yapılır?
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Placeholder content for this accordion, which is intended to demonstrate the <code>.accordion-flush</code> class. This is the third item's accordion body. Nothing more exciting happening here in terms of content, but just filling up the space to make it look, at least at first glance, a bit more representative of how this would look in a real-world application.</div>
                  </div>
                </div>
              </div>

              <!--
                Accardion Menu
              -->
            </div>
            <div class="col-md-4">
                <div class="form-alani bg-light">
                    <div class="mb-3">
                        <h4>Bizimle iletişime geçin!</h4>
                    </div>
                <form action="gonder.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Ad Soyad</label>
                        <input type="text" id="username" name="nameSurname" class="form-control" placeholder="Ad - Soyad bilgisi">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">E-Posta</label>
                        <input type="email" id="email" name="email" class="form-control" placeholder="E-Posta adresi">
                    </div>
                    <div class="mb-3">
                        <label for="telno" class="form-label">Telefon Numarası</label>
                        <input type="text" id="telno" name="telno" class="form-control" placeholder="Cep telefonu numarası">
                    </div>
                    <div class="mb-3">
                        <label for="aciklama" class="form-label">Mesajınız</label>
                        <textarea type="text" id="aciklama" name="aciklama" rows="5" class="form-control" placeholder="Mesajınız..."></textarea>
                    </div>
                    <div class="mb-3">
                    <button style="letter-spacing:1px;" type="submit" class="btn btn-primary fw-bold text-uppercase form-control"><i class="fas fa-paper-plane"></i> Gönder</button>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
    
</section>