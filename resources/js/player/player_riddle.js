const PlayerRiddleFactory = (function () {
    return {
        construct: function (root, id) {
            // fills the node
            const template = $('#player-riddle-template');
            if (!template.exists())
                throw Error('player-riddle-template does not exist');
            template.clone().appendTo(root);
            const playerRiddleRoot = root.find('.player-riddle-card').last();
            playerRiddleRoot.attr('id', id);
            return playerRiddleRoot;
        }
    };
})();

class PlayerRiddle {
    constructor(root, id) {
        // assures that root node is quite correct
        if (!(root instanceof jQuery)) {
            if (typeof root !== 'string')
                throw 'Invalid parameter in constructor of TabList.';
            root = $(root);
        }

        // saves id
        this.id = id;

        // constructs
        this.root = PlayerRiddleFactory.construct(root, id);

        // start button
        this.root.find('.start-button').click(() => {
            this.showButtons({
                start: false,
                validate: true,
                cancel: true
            });
            // todo start chrono, ajax
        });

        //  validate button modifies the modal when clicking
        this.root.find('.validate-button').click(() => {
            const modal = $('#validation-modal');
            modal.find('.modal-title').text('Validez ' + root.find('.card-title').text() + '\u00A0:');
            const form = modal.find('form');
            const url_base = form.attr('action').match(/(.*\/)/g)[0];
            form.attr('action', url_base + this.id); // todo mettre le bon id dans l'action du form
        });

        // cancel button
        this.root.find('.cancel-button').click(() => {
            this.showButtons({
                start: true,
                validate: false,
                cancel: false
            });
            // todo reset timer, ajax
        })
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

    addPlayerRiddle(rowNumber, id) {
        const row = this.root.find('.player-riddle-row:nth-child(' + rowNumber + ') .row').first();
        const playerRiddleNumber = row.children().length + 1;
        return new PlayerRiddle(row, id);
    }
}

exports.PlayerRiddle = PlayerRiddle;
exports.PlayerRiddleGrid = PlayerRiddleGrid;