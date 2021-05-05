<?php
include 'header.php';
$check_about = $db->prepare("SELECT * FROM about_me");
$check_about->execute();
$control_about = $check_about->rowCount();
$fetch_about = $db->prepare("SELECT * FROM about_me WHERE about_id=1");
$fetch_about->execute();
$fetch = $fetch_about->fetch(PDO::FETCH_ASSOC);
?>

<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Hakkımda Sayfası</h3>
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
      <div class="x_panel">
        <div class="x_content">
          <?php if (@$_GET['insert_a'] == 'ok') { ?>
            <div class="alert alert-success alert-dismissible fade in" role="alert">
              <strong>Başarılı</strong> Veriler başarıyla eklendi.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
            </div>
          <?php } elseif (@$_GET['insert_a'] == 'no') { ?>
            <div class="alert alert-danger alert-dismissible fade in" role="alert">
              <strong>Hata</strong> Bir sorunla karşılaşıldı.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
            </div>
          <?php } elseif (@$_GET['update_a'] == 'ok') { ?>
            <div class="alert alert-success alert-dismissible fade in" role="alert">
              <strong>Başarılı</strong> Veriler başarıyla güncellendi.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
            </div>
          <?php } elseif (@$_GET['update_a'] == 'no') { ?>
            <div class="alert alert-danger alert-dismissible fade in" role="alert">
              <strong>Hata</strong> Bir sorunla karşılaşıldı.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
              </button>
            </div>
          <?php } ?>
          <form class="form-horizontal form-label-left" action="process.php" method="POST">

            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Sayfa Başlığı
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="about_title" value="<?php echo $fetch['about_title'] ?>" required="required" type="text">
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Biyografi
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <textarea id="textarea" required="required" name="content" class="form-control col-md-7 col-xs-12" rows='5'><?php echo $fetch['content'] ?></textarea>
              </div>
            </div>
            <div class="item form-group">
              <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Cv
              </label>
              <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="file" name="cv" required="required" class="form-control col-md-7 col-xs-12">
              </div>
            </div>
            <div class="form-group">
              <div class="col-md-6 col-md-offset-3">
                <button type="reset" class="btn btn-primary">Temizle</button>
                <?php
                if ($control_about == 1) { ?>
                  <button type="submit" class="btn btn-success" name="update_about">Güncelle</button>
                <?php } else { ?>
                  <button type="submit" class="btn btn-warning" name="insert_about">Ekle</button>
                <?php } ?>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- /page content -->

<?php
include 'footer.php';
?>