class MessageTemplate {
    constructor(param) {
        if (param instanceof MessageTemplate)
            return param;
        if (typeof param === 'string')
            param = document.querySelector(param);
        if (param instanceof HTMLElement) {
            param = {
                element: param,
            }
        }
        this.template = param.element;
        this.nameSelector = param.nameSelector || '.name';
        this.dateSelector = param.dateSelector || '.date';
        this.contentSelector = param.contentSelector || '.content';
    }

    createMessage(message) {
        const element = document.importNode(this.template.content, true);
        element.querySelector(this.nameSelector).textContent = message.author;
        element.querySelector(this.dateSelector).textContent = message.date;
        element.querySelector(this.contentSelector).textContent = message.content;
        // TODO Align left or right
        return element;
    }
}

exports.MessageTemplate = MessageTemplate;