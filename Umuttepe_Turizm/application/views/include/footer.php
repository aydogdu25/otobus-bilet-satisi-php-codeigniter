<div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Adres</h4>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Kabaoğlu, İzmit/KOCAELİ</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+0212 345 6789</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@umuttepeturizm.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Navigasyon</h4>
                <a class="btn btn-link" href="biletAra">Bilet Ara</a>
                <a class="btn btn-link" href="biletSor">Bilet Sorgula</a>
                <?php
                if (isset ($_SESSION["login"])) {
                    echo '<a class="btn btn-link" href="profil">Hesabım</a>';
                } else {
                    echo '<a class="btn btn-link" href="giris">Giriş</a>';
                    echo '<a class="btn btn-link" href="kayit">Kayıt Ol</a>';
                }
                ?>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy;Umuttepe Turizm, Tüm Hakları Saklıdır.
                </div>
            </div>
        </div>
    </div>
</div>

</script>
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
<script
    src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/frontend/lib/wow/wow.min.js"></script>
<script src="assets/frontend/lib/easing/easing.min.js"></script>
<script src="assets/frontend/lib/waypoints/waypoints.min.js"></script>
<script src="assets/frontend/lib/counterup/counterup.min.js"></script>
<script src="assets/frontend/lib/owlcarousel/owl.carousel.min.js"></script>
<script src="assets/frontend/lib/tempusdominus/js/moment.min.js"></script>
<script src="assets/frontend/lib/tempusdominus/js/moment-timezone.min.js"></script>
<script src="assets/frontend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
<script src="assets/frontend/js/main.js"></script>
<script src="assets/frontend/js/sehir.js"></script>

</body>

</html>