const $ = require('jquery');

class MessageForm {
    constructor(param) {
        if (param instanceof MessageForm)
            return param;
        if (typeof param === 'string')
            param = document.querySelector(param);
        if (param instanceof HTMLElement) {
            param = {
                element: param,
            }
        }
        this.form = param.element;

        this.setup();
    }

    setup() {
        console.log(this.form);
        this.form.addEventListener('submit', e => {
            e.preventDefault();

            $.ajax(this.form.action, {
                method: this.form.method || 'post',
                dataType: 'json',
                data: $(this.form).serialize(),
                error: (jqXHR, textStatus, errorThrown) => {
                    console.error(textStatus || errorThrown);
                    console.error(jqXHR);
                },
                success: (data, textStatus, jqXHR) => {
                    if (this.handler)
                        this.handler(data);
                }
            });

        });
    }
}


exports.MessageForm = MessageForm;