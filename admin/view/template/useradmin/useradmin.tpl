<?php echo $header; ?>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>


<style>
    body {
        background-color: lightgrey;
    }
    .myButton {
        width: 300px;
        height: 90px;
        margin: 30px;
        padding: 0;
    }
</style>


<div class="container" style="margin: 30px;">
    <h1>You can redact your options here</h1>
    <button type="button" class="btn btn-primary btn-lg myButton" ><div style="margin-top: 30px;">Логотип</div>
        <div style="width: 100%; height: 100%;  position: relative; top: -54px;"><a href="" id="thumb-logo" data-toggle="image" class="img-thumbnail" style="width: 100%; height: 100%; opacity: 0;"></a></div>
    </button>
    <button type="button" class="btn btn-primary btn-lg myButton">
        <div style="width: 100%; height: 100%;  position: relative; top: -54px;"><a href="index.php?route=useradmin/slider" style="width: 100%; height: 100%;   ">asdasdasdsad</a>
    </button>
    <button type="button" class="btn btn-primary btn-lg myButton">Redact something</button>
    <button type="button" class="btn btn-primary btn-lg myButton">Redact something</button>
    <button type="button" class="btn btn-primary btn-lg myButton">Redact something</button>
    <button type="button" class="btn btn-primary btn-lg myButton">Redact something</button>
    <button type="button" class="btn btn-primary btn-lg myButton">Redact something</button>
    <button type="button" class="btn btn-primary btn-lg myButton">Redact something</button>
    <button type="button" class="btn btn-primary btn-lg myButton">Redact something</button>
    <button type="button" class="btn btn-primary btn-lg myButton">Redact something</button>
    <button type="button" class="btn btn-primary btn-lg myButton">Redact something</button>
    <button type="button" class="btn btn-primary btn-lg myButton">Redact something</button>


</div>


<div id="content">
    <div class="page-header">
        <div class="container-fluid">
            <div class="pull-right">
                <button type="submit" form="form-latest" data-toggle="tooltip" title="<?php echo $button_save; ?>" class="btn btn-primary"><i class="fa fa-save"></i></button>
                <a href="<?php echo $cancel; ?>" data-toggle="tooltip" title="<?php echo $button_cancel; ?>" class="btn btn-default"><i class="fa fa-reply"></i></a></div>
            <h1><?php echo $heading_title; ?></h1>
            <ul class="breadcrumb">
                <?php foreach ($breadcrumbs as $breadcrumb) { ?>
                <li><a href="<?php echo $breadcrumb['href']; ?>"><?php echo $breadcrumb['text']; ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="container-fluid">
        <?php if ($error_warning) { ?>
        <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> <?php echo $error_warning; ?>
            <button type="button" class="close" data-dismiss="alert">&times;</button>
        </div>
        <?php } ?>
        <div class="box ">
            <div class="rev_content content">
                <!-- content here -->
                <?php echo $rev_content; ?>
            </div>
        </div>
    </div>
</div>
<style type="text/css">
    .rev_content .content.wrap {
        margin: 0px 0px 0 0px;
    }
</style>
<script type="text/javascript">
    jQuery(document).ready(function($){
        $(this.body).addClass('rev_backoffice wp-core-ui');
    });
</script>

<script type="text/javascript"><!--
    $('select[name=\'config_theme\']').on('change', function() {
        $.ajax({
            url: 'index.php?route=setting/setting/theme&token=<?php echo $token; ?>&theme=' + this.value,
            dataType: 'html',
            beforeSend: function() {
                $('select[name=\'config_theme\']').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');
            },
            complete: function() {
                $('.fa-spin').remove();
            },
            success: function(html) {
                $('#theme').attr('src', html);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    });

    $('select[name=\'config_theme\']').trigger('change');
    //--></script>
<script type="text/javascript"><!--
    $('select[name=\'config_country_id\']').on('change', function() {
        $.ajax({
            url: 'index.php?route=localisation/country/country&token=<?php echo $token; ?>&country_id=' + this.value,
            dataType: 'json',
            beforeSend: function() {
                $('select[name=\'config_country_id\']').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');
            },
            complete: function() {
                $('.fa-spin').remove();
            },
            success: function(json) {
                html = '<option value=""><?php echo $text_select; ?></option>';

                if (json['zone'] && json['zone'] != '') {
                    for (i = 0; i < json['zone'].length; i++) {
                        html += '<option value="' + json['zone'][i]['zone_id'] + '"';

                        if (json['zone'][i]['zone_id'] == '<?php echo $config_zone_id; ?>') {
                            html += ' selected="selected"';
                        }

                        html += '>' + json['zone'][i]['name'] + '</option>';
                    }
                } else {
                    html += '<option value="0" selected="selected"><?php echo $text_none; ?></option>';
                }

                $('select[name=\'config_zone_id\']').html(html);

                $('#button-save').prop('disabled', false);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
            }
        });
    });

    $('select[name=\'config_country_id\']').trigger('change');

    $('#store-language a:first').tab('show');
    $('#content-language a:first').tab('show');
    //--></script>

<?php echo $footer; ?>