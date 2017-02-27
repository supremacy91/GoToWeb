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
    <button type="button" class="btn btn-primary btn-lg myButton" >
        <div class="col-sm-10"><a href="" id="thumb-logo" data-toggle="image" class="img-thumbnail" ></a>
            <input type="hidden" name="config_logo" value="<?php echo $config_logo; ?>" id="input-logo"/>
        </div>
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
    <button type="button" class="btn btn-primary btn-lg myButton">Redact something</button>


</div>



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