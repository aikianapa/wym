$('form[action=reg]').submit(function (ev) {
    let serialize = function (data) {
        let obj = {};

        for (let [key, value] of data) {
            if (obj[key] !== undefined) {
                if (!Array.isArray(obj[key])) {
                    obj[key] = [obj[key]];
                }
                obj[key].push(value);
            } else {
                obj[key] = value;
            }
        }
        return obj;
    }


    let error = false;
    ev.stopPropagation();
    ev.preventDefault();
    let form = this;
    let data = new FormData(form);
    data = serialize(data);
    setTimeout(function () {
        data = JSON.stringify(data)
        $.ajax({
            url: '/form/users/reg',
            type: 'POST',
            data: data,
            contentType: 'application/json',
            // processData: false,
            success: function (data) {
                let fb = $(form).parents('.fancybox-is-open').attr('id')
                if (fb > '') {
                    $.fancybox.close({
                        src: '#' + fb,
                    });
                }
                if (data.error == false) {
                    $('#modal-3').find('.msg').html(`<p>${data.msg}</p>`)
                    $.fancybox.open({
                        src: '#modal-3',
                        type: 'inline'
                    });
                    $(form)[0].reset();
                } else {
                    $('#modal-8').find('.msg').html(`<p>${data.msg}</p>`)
                    $.fancybox.open({
                        src: '#modal-8',
                        type: 'inline'
                    });
                    return false;       
                }
            },
            error: function (data) {
                if (error) {
                    $('#modal-8').find('.msg').html(`<p>Ошибка! Пользователь не зарегистрирован. Попробуйте повторить регистрацию чуть позже.</p>`)
                    $.fancybox.open({
                        src: '#modal-8',
                        type: 'inline'
                    });
                    return false;
                }
            }
        });
    }, 50)

    return false;
});