$('form[action=quotes]').submit(function (ev) {

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
        let attaches = $(form).find('input[name][type=file]');
        let reader = new FileReader();
        $.each(attaches, function () {
            let file = $(this)[0].files[0];
            if (file) {
                let that = this;
                reader.readAsDataURL(file);
                reader.onload = function () {
                    data[that.name] = reader.result.toString(); //base64encoded string 
                };
            }
        });
        setTimeout(function () {
            let flds = {};
            $(form).find(':input[name][placeholder]').each(function(){
                let name = $(this).attr('name');
                let phdr = $(this).attr('placeholder');
                (name > '' && phdr > '') ? flds[name] = phdr : null;
            })
            data.flds = flds
            data = JSON.stringify(data)
            $.ajax({
                url: '/form/quotes/submit',
                type: 'POST',
                data: data,
                contentType: 'application/json',
                // processData: false,
                success: function (data) {
                    let fb = $(form).parents('.fancybox-is-open').attr('id')
                    if (fb>'') {
                        $.fancybox.close({
                            src: '#'+fb,
                        });
                    }
                    if (data.error == false) {
                        $.fancybox.open({
                            src: '#modal-3',
                            type: 'inline'
                        });
                        $(form)[0].reset();
                    } else {
                        $.fancybox.open({
                            src: '#modal-8',
                            type: 'inline'
                        });
                        return false;
                    }
                },
                error: function (data) {
                    if (error) {
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
