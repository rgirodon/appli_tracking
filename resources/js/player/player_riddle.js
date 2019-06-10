const {Timer} = require('easytimer.js');

function formatMS(s) {
    function pad(n, z) {
        z = z || 2;
        return ('00' + n).slice(-z);
    }

    const ms = s % 1000;
    s = (s - ms) / 1000;
    const secs = s % 60;
    s = (s - secs) / 60;
    const mins = s % 60;
    const hrs = (s - mins) / 60;
    return pad(hrs) + ':' + pad(mins) + ':' + pad(secs) /*+ '.' + pad(ms, 3)*/;
}


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

        // timer
        this.timer = new Timer();
        this.timer.addEventListener('secondsUpdated', () => {
            this.root.find('.timer').text(this.timer.getTimeValues().toString(['minutes', 'seconds']));
        });

        // constructs
        this.root = PlayerRiddleFactory.construct(root, id);

        // start button
        this.root.find('.start-button').click(() => {
            this.showButtons({
                start: false,
                validate: true,
                cancel: true
            });
            this.showTimer();
            this.startTimerFromDate(Date.now());
            $.ajax('riddle/' + this.id + '/start');
        });

        //  validate button modifies the modal when clicking
        this.root.find('.validate-button').click(() => {
            const modal = $('#validation-modal');
            modal.find('.modal-title').text('Validez ' + root.find('.card-title').text() + '\u00A0:');
            const form = modal.find('form');
            form.on('submit', (e) => {
                e.preventDefault();
                if (form.find('#validation-modal-code').val()) {
                    $.ajax('validationEnigme/validationMdp/' + this.id, {
                        success: (data) => {
                            playerRiddleGrid.update();
                            alert('success'); // todo RÉPARER puis enlever ça
                        }
                    });
                }
            });
        });

        // cancel button
        this.root.find('.cancel-button').click(() => {
            this.showButtons({
                start: true,
                validate: false,
                cancel: false
            });
            this.timer.stop();
            this.showTimer(false);
            // todo ajax cancel
        })
    }

    setAttributes(options) {
        if (options.description)
            this.setDescription(options.description);
        if (options.id)
            this.setID(options.id);
        if (options.showButtons)
            this.showButtons(options.showButtons);
        if (options.showTimer)
            this.showTimer(options.showTimer);
        if (options.subtitle)
            this.setSubtitle(options.subtitle);
        if (options.title)
            this.setTitle(options.title);
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

    setID(id) {
        this.id = id;
        this.root.find('.player-riddle-card').last().attr('id', id);
    }

    setTimer(ms) {
        this.root.find('.timer').text(formatMS(ms));
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

    startTimerFromDate(date) {
        if (!(date instanceof Date))
            date = new Date(date);
        const ms = Date.now() - date.getTime();
        const sec = Math.floor(ms / 1000);
        this.timer.start({
            startValues: {
                seconds: sec
            }
        });
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

        this.playerRiddles = [];
        this.rowNumber = 0;
    }

    addRow() {
        const rowNumber = this.root.children().length + 1;
        const container = $('<div>', {class: 'container-fluid jumbotron player-riddle-row'});
        container.append($('<div>', {class: 'row justify-content-around'}));
        this.root.append(container);
        this.rowNumber++;
    }

    addPlayerRiddle(rowNumber, id) {
        const row = this.root.find('.player-riddle-row:nth-child(' + rowNumber + ') .row').first();
        const playerRiddleNumber = row.children().length + 1;
        const playerRiddle = new PlayerRiddle(row, id);
        this.playerRiddles.push(playerRiddle);
        return playerRiddle;
    }

    updateRiddles(riddleJSON) {
        const riddles = riddleJSON.riddles;
        riddles.forEach((riddle) => {
            let playerRiddle = this.playerRiddles.find((e) => {
                return e.id === riddle.id;
            });
            if (playerRiddle === undefined) {
                if (riddle.line > this.rowNumber)
                    this.addRow();
                playerRiddle = this.addPlayerRiddle(riddle.line);
            }
            playerRiddle.setAttributes({
                id: riddle.id,
                title: riddle.name,
                description: riddle.description,
                url: riddle.url
            });
            if (riddle.start_date) {
                if (riddle.end_date) {
                    const start = new Date(riddle.start_date);
                    const end = new Date(riddle.end_date);
                    playerRiddle.showButtons({
                        start: false
                    });
                    playerRiddle.setTimer(end - start);
                } else {
                    playerRiddle.startTimerFromDate(riddle.start_date);
                    playerRiddle.showButtons({start: false, validate: true, cancel: true});
                }
            }
        });
    };

    update() {
        $.ajax('riddle/list', {method: 'GET', success: (response) => this.updateRiddles(response)});
    }
}

exports.PlayerRiddle = PlayerRiddle;
exports.PlayerRiddleGrid = PlayerRiddleGrid;