<?php
include 'header.php';
$check_contact = $db->prepare("SELECT * FROM contact");
$check_contact->execute();
$control_contact = $check_contact->rowCount();
$fetch_contact = $db->prepare("SELECT * FROM contact WHERE contact_id=1");
$fetch_contact->execute();
$fetch = $fetch_contact->fetch(PDO::FETCH_ASSOC);
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>İletişim Sayfası</h3>
      </div>


    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <div class="clearfix"></div>
          </div>

          <?php if (@$_GET['insert_c'] == 'ok') { ?>
            <div class="alert alert-success alert-dismissible fade in" role="alert">
              <strong>Başarılı!</strong> Veriler başarıyla eklendi.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
            </div>
          <?php } elseif (@$_GET['insert_c'] == 'no') { ?>
            <div class="alert alert-danger alert-dismissible fade in" role="alert">
              <strong>Hata!</strong> Bir sorunla karşılaşıldı.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
            </div>
          <?php } elseif (@$_GET['update_c'] == 'ok') { ?>
            <div class="alert alert-success alert-dismissible fade in" role="alert">
              <strong>Başarılı!</strong> Veriler başarıyla güncellendi.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
            </div>
          <?php } elseif (@$_GET['update_c'] == 'no') { ?>
            <div class="alert alert-danger alert-dismissible fade in" role="alert">
              <strong>Hata!</strong> Bir sorunla karşılaşıldı.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
            </div>
          <?php } ?>
          <form class="form-horizontal form-label-left" action="process.php" method="POST">
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Sayfa başlığı
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12"  value="<?php echo $fetch['content'] ?>" name="content" required="required" type="text">
              </div>
            </div>
            </br>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Konum
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="locationn" value="<?php echo $fetch['locationn'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Telefon
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="tel" name="gsm" value="<?php echo $fetch['gsm'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Email
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="email" name="email" value="<?php echo $fetch['email'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            </br>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Facebook
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="facebook" value="<?php echo $fetch['facebook'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Twitter
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="twitter" value="<?php echo $fetch['twitter'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Instagram
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="instagram" value="<?php echo $fetch['instagram'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Linkedin
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="linkedin" value="<?php echo $fetch['linkedin'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
                <button type="submit" class="btn btn-primary">Temizle</button>
                <?php
                if ($control_contact == 1) { ?>
                  <button type="submit" class="btn btn-success" name="update_contact">Güncelle</button>
                <?php } else { ?>
                  <button type="submit" class="btn btn-warning" name="insert_contact">Ekle</button>
                <?php } ?>
              </div>
            </div>

        </div>


        </form>

      </div>
    </div>
  </div>
</div>
</div>
<!-- /page content -->

<?php
include 'footer.php';
?>