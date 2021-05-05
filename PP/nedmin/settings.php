<?php
include 'header.php';
$check_settings = $db->prepare("SELECT * FROM site_settings");
$check_settings->execute();
$control_settings = $check_settings->rowCount();

$fetch_settings = $db->prepare("SELECT * FROM site_settings WHERE settings_id=1");
$fetch_settings->execute();
$fetch = $fetch_settings->fetch(PDO::FETCH_ASSOC);
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Ayarlar Sayfası</h3>
      </div>
    </div>
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <div class="clearfix"></div>
          </div>
          <?php if (@$_GET['insert_set'] == 'ok') { ?>
            <div class="alert alert-success alert-dismissible fade in" role="alert">
              <strong>Başarılı</strong> Veriler başarıyla eklendi.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
            </div>
          <?php } elseif (@$_GET['insert_set'] == 'no') { ?>
            <div class="alert alert-danger alert-dismissible fade in" role="alert">
              <strong>Hata</strong> Bir sorunla karşılaşıldı.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
            </div>
          <?php } elseif (@$_GET['update_set'] == 'ok') { ?>
            <div class="alert alert-success alert-dismissible fade in" role="alert">
              <strong>Başarılı</strong> Veriler başarıyla güncellendi.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
            </div>
          <?php } elseif (@$_GET['update_set'] == 'no') { ?>
            <div class="alert alert-danger alert-dismissible fade in" role="alert">
              <strong>Hata</strong> Bir sorunla karşılaşıldı.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
            </div>
          <?php } ?>
          <form class="form-horizontal form-label-left" action="process.php" method="POST">
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Sayfa Başlığı
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="site_title" value="<?php echo $fetch['site_title'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">İsim
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="namee" value="<?php echo $fetch['namee'] ?>" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Şifre
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="password" name="password" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12">Şifre Tekrarı
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="password" name="password2" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
                <button type="submit" class="btn btn-primary">Temizle</button>
                <?php if ($control_settings == 1) { ?>
                  <button type="submit" class="btn btn-success" name="update_settings">Güncelle</button>
                <?php } else { ?>
                  <button type="submit" class="btn btn-warning" name="insert_settings">Ekle</button>
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