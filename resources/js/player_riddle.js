const PlayerRiddleFactory = (function () {
    return {
        construct: function (root) {
            // fills the node
            const template = $('#player-riddle-template');
            if (!template.exists())
                throw Error('player-riddle-template does not exist');
            template.clone().appendTo(root);
        }
    };
})();

class PlayerRiddle {
    constructor(root) {
        // assures that root node is quite correct
        if (!(root instanceof jQuery)) {
            if (typeof root !== 'string')
                throw 'Invalid parameter in constructor of TabList.';
            root = $(root);
        }
        this.root = root;

        // defines a unique id
        let id = this.root.attr('id');
        if ($(this.accordion_prefix + id).exists()) {
            let disamb = 1;
            id = id + '-' + disamb;
            while ($(this.accordion_prefix + id).exists()) {
                id = id + '-' + ++disamb;
            }
        }

        // saves id
        this.id = id;

        // constructs
        PlayerRiddleFactory.construct(root);
    }

    setAttributes(options) {
        if (options.title)
            this.setTitle(options.title);
        if (options.subtitle)
            this.setSubtitle(options.subtitle);
        if (options.description)
            this.setDescription(options.description);
        if (options.showTimer)
            this.showTimer(options.showTimer);
        if (options.showButtons)
            this.showButtons(options.showButtons);
    }

    setTitle(str) {
        this.root.find('.card-title').text(str);
    }

    setSubtitle(str) {
        this.root.find('.card-subtitle').text(str);
    }

    setDescription(str) {
        this.root.find('.card-text').text(str);
    }

    showButton(option, show = true) {
        if (show) {
            this.root.find('.' + option + '-button').show();
        } else {
            this.root.find('.' + option + '-button').hide();
        }
    }

    showButtons(options) {
        Object.keys(options).forEach((key) => {
            options[key] ? this.root.find('.' + key + '-button').show() : this.root.find('.' + key + '-button').hide();
        })
    }

    showTimer(show = true) {
        if (show) {
            this.root.find('.timer').show();
        } else {
            this.root.find('.timer').hide();
        }
    }
}

class PlayerRiddleGrid {
    constructor(root) {
        if (!(root instanceof jQuery)) {
            if (typeof root !== 'string')
                throw 'Invalid parameter in constructor of TabList.';
            root = $(root);
        }
        this.root = root;
        this.id = root.prop('id');
        this.addRow();
    }

    addRow() {
        const rowNumber = this.root.children().length + 1;
        const container = $('<div>', {class: 'container-fluid jumbotron player-riddle-row'});
        container.append($('<div>', {class: 'row justify-content-around'}));
        this.root.append(container);
    }

    addPlayerRiddle(rowNumber) {
        const row = this.root.find('.player-riddle-row:nth-child(' + rowNumber + ') .row').first();
        const playerRiddleNumber = row.children().length + 1;
        return new PlayerRiddle(row);
    }
}

exports.PlayerRiddle = PlayerRiddle;
exports.PlayerRiddleGrid = PlayerRiddleGrid;