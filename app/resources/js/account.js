$(document).ready(function () {
    $('select[name="brand_id"]').on('change', function () {
        $.ajax({
            url: '/getModelsByBrand',
            type: 'get',
            data: 'brand_id=' + $('select[name="brand_id"]').val(),
            dataType: 'json',
            success: function (data) {
                html = '';
                for (n in data) {
                    html += '<option value="' + data[n].id + '">' + data[n].name + '</option>';
                }
                $('select[name="model_id"]').html(html);
            },
            error: function (xhr, status, error) {
                alert(xhr.responseText + '|\n' + status + '|\n' + error);
            }
        });
    });

    $('select[name="brand_id"]').change();

    $('select[name="region_id"]').change(function () {
        $.ajax({
            url: '/getCitiesByRegion',
            type: 'get',
            data: 'region_id=' + $('select[name="region_id"]').val(),
            dataType: 'json',
            success: function (data) {
                html = '';
                for (n in data) {
                    html += '<option value="' + data[n].id + '">' + data[n].name + '</option>';
                }
                $('select[name="city_id"]').html(html);
            },
            error: function (xhr, status, error) {
                alert(xhr.responseText + '|\n' + status + '|\n' + error);
            }
        });
    });

    $('select[name="region_id"]').change();

    $('#advert-load-image').fileuploader({
        changeInput: '<div class="fileuploader-input">' +
            '<div class="fileuploader-input-inner">' +
            '<h3 class="fileuploader-input-caption"><span>${captions.feedback}</span></h3>' +
            '<p>${captions.or}</p>' +
            '<div class="fileuploader-input-button"><span>${captions.button}</span></div>' +
            '</div>' +
            '</div>',
        theme: 'dragdrop',
        limit: 30,
        extensions: ['jpg', 'jpeg', 'png'],
        inputNameBrackets: false,
        upload: {
            url: '/advertImage',
            data: null,
            type: 'POST',
            enctype: 'multipart/form-data',
            start: true,
            beforeSend: function (item) {
                item.upload.headers = {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')};
                return true;
            },
            onSuccess: function (response, item) {
                // if success
                if (response.success) {
                    item.name = response.success;
                    $('form').append('<input type="hidden" name="advert_images[]" value="' + response.success + '">');
                    item.html.find('.column-title > div:first-child').text(response.success).attr('title', response.success);
                } else {
                    item.html.removeClass('upload-successful').addClass('upload-failed');
                    return this.onError ? this.onError(item) : null;
                }

                item.html.find('.fileuploader-action-remove').addClass('fileuploader-action-success');
                setTimeout(function () {
                    item.html.find('.progress-bar2').fadeOut(400);
                }, 400);
            },
            onError: function (item) {
                var progressBar = item.html.find('.progress-bar2');

                if (progressBar.length) {
                    progressBar.find('span').html(0 + "%");
                    progressBar.find('.fileuploader-progressbar .bar').width(0 + "%");
                    item.html.find('.progress-bar2').fadeOut(400);
                }

                item.upload.status != 'cancelled' && item.html.find('.fileuploader-action-retry').length == 0 ? item.html.find('.column-actions').prepend(
                    '<a class="fileuploader-action fileuploader-action-retry" title="Retry"><i></i></a>'
                ) : null;
            },
            onProgress: function (data, item) {
                var progressBar = item.html.find('.progress-bar2');

                if (progressBar.length > 0) {
                    progressBar.show();
                    progressBar.find('span').html(data.percentage + "%");
                    progressBar.find('.fileuploader-progressbar .bar').width(data.percentage + "%");
                }
            },
            onComplete: null,
        },
        onRemove: function (item) {
            $.post('./php/ajax_remove_file.php', {
                file: item.name
            });
        },
        captions: {
            feedback: 'Перетаскивайте фотографии прямо сюда',
            feedback2: 'Перетаскивайте фотографии прямо сюда',
            drop: 'Перетаскивайте фотографии прямо сюда',
            or: 'или',
            button: 'Выбрать фотографии',
        },
    });
});
