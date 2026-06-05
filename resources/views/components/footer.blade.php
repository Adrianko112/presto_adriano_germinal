<footer class="text-center text-lg-start bg-dark text-white mt-auto border-top border-secondary">
  <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom border-secondary container">
    <div class="me-5 d-none d-lg-block text-white-50">
      <span>Connettiti con noi sui nostri canali social:</span>
    </div>
    <div>
      <a href="#" class="me-4 text-warning">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="#" class="me-4 text-warning">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="#" class="me-4 text-warning">
        <i class="fab fa-google"></i>
      </a>
      <a href="#" class="me-4 text-warning">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="#" class="me-4 text-warning">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="#" class="me-4 text-warning">
        <i class="fab fa-github"></i>
      </a>
    </div>
  </section>

  <section class="">
    <div class="container text-center text-md-start mt-5">
      <div class="row mt-3">
        
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4 text-warning">
            <i class="fas fa-rocket me-3"></i>Presto.it
          </h6>
          <p class="text-white-50">
            La piattaforma di annunci più veloce d'Italia. Vendi l'usato in pochi clic, trova occasioni imperdibili ogni giorno in totale sicurezza.
          </p>
        </div>

        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4 text-warning">
            Categorie
          </h6>
          <p><a href="#" class="text-white text-decoration-none opacity-75 text-opacity-100-hover">Elettronica</a></p>
          <p><a href="#" class="text-white text-decoration-none opacity-75 text-opacity-100-hover">Motori</a></p>
          <p><a href="#" class="text-white text-decoration-none opacity-75 text-opacity-100-hover">Abbigliamento</a></p>
          <p><a href="#" class="text-white text-decoration-none opacity-75 text-opacity-100-hover">Casa e Giardino</a></p>
        </div>

        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <h6 class="text-uppercase fw-bold mb-4 text-warning">
            Link Utili
          </h6>
          <p><a href="#" class="text-white text-decoration-none opacity-75 text-opacity-100-hover">Centro Assistenza</a></p>
          <p><a href="#" class="text-white text-decoration-none opacity-75 text-opacity-100-hover">Regole di Pubblicazione</a></p>
          <p><a href="#" class="text-white text-decoration-none opacity-75 text-opacity-100-hover">Sicurezza</a></p>
          <p><a href="#" class="text-white text-decoration-none opacity-75 text-opacity-100-hover">Lavora con noi</a></p>
        </div>

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 text-white">
          @if(!Auth::check() || !Auth::user()->is_revisor)
            <h6 class="text-uppercase fw-bold mb-4 text-warning">Lavora con noi</h6>
            <div class="bg-black bg-opacity-40 p-3 rounded-3 border border-secondary shadow-sm text-center text-md-start">
              <p class="small text-white-50 mb-3">
                Vuoi guadagnare aiutando la community a mantenere la piattaforma sicura? Diventa un nostro revisore!
              </p>
              <a href="{{ route('become.revisor') }}" class="btn btn-warning btn-sm w-100 fw-bold text-dark shadow-sm text-uppercase py-2">
                <i class="fas fa-user-check me-2"></i>Diventa Revisore
              </a>
            </div>
          @else
            <h6 class="text-uppercase fw-bold mb-4 text-warning">Contatti</h6>
            <p><i class="fas fa-home me-3 text-warning"></i> Roma, RM 00100, IT</p>
            <p><i class="fas fa-envelope me-3 text-warning"></i> info@presto.it</p>
            <p><i class="fas fa-phone me-3 text-warning"></i> + 39 06 123 4567</p>
          @endif
        </div>

      </div>
    </div>
  </section>

  <div class="text-center p-4 text-white-50 border-top border-secondary" style="background-color: rgba(0, 0, 0, 0.3);">
    © {{ date('Y') }} Copyright:
    <a class="text-warning fw-bold text-decoration-none" href="#">Presto.it S.r.l.</a>
  </div>
</footer>