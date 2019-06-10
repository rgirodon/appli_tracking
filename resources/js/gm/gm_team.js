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

const GMTeamFactory = (function () {
    const class_prefix = 'gm-team';
    const accordion_prefix = class_prefix + '-accordion-';
    const heading_prefix = class_prefix + '-heading-';
    const collapse_prefix = class_prefix + '-collapse-';

    return {
        construct: function (root, id) {
            this.accordionID = accordion_prefix + id;
            this.headingID = heading_prefix + id;
            this.collapseID = collapse_prefix + id;

            // fills the node
            const template = $('#gm-team-template');
            if (!template.exists())
                throw Error('gm-team-template does not exist');
            template.clone().appendTo(root);

            // adds ids
            $(root).find('.card').attr('id', this.accordionID);
            $(root).find('.card > .card-header').attr('id', this.headingID);
            $(root).find('.card > .collapse').attr('id', this.collapseID);

            // adds attributes
            $('#' + this.headingID).find('span').attr('data-target', '#' + this.collapseID)
                .attr('aria-expanded', 'false')
                .attr('aria-controls', this.collapseID);

            $('#' + this.collapseID).attr('aria-labelledby', this.headingID)
                .attr('data-parent', '#' + this.accordionID);

            // adds click listener to open
            $('#' + this.headingID).click(function () {
                $(this).parent().find('.collapse').collapse('toggle');
            });

            // adds animation on opening
            $('#' + this.accordionID).on('show.bs.collapse', function () {
                $(root).find(".card-header > i").addClass('active');
            }).on('hide.bs.collapse', function () {
                $(root).find(".card-header > i").removeClass('active');
            });

            return {
                accordion: this.accordionID,
                heading: this.headingID,
                collapse: this.collapseID
            }
        }
    };
})();

class GMTeam {
    constructor(root, id) {
        // assures that root node is quite correct
        if (!(root instanceof jQuery)) {
            if (typeof root !== 'string')
                throw 'Invalid parameter in constructor of TabList.';
            root = $(root);
        }
        this.root = root;

        // saves id
        this.id = id;

        // constructs and retrieves ids
        this.ids = GMTeamFactory.construct(root, id);
    }

    setAtributes(options) {
        if (options.teamName)
            this.setTeamName(options.teamName);
        if (options.riddleName)
            this.setRiddleName(options.riddleName);
        if (options.progress)
            this.setProgress(options.progress);
    }

    setTeamName(str) {
        this.root.find('.team-name').text(str);
    }

    setRiddleName(str) {
        this.root.find('.current-riddle').text(str);
    }

    setProgress(input) {
        let n;
        if ((typeof input) === 'string') {
            n = parseFloat(input.match(/(([0-9]*[.])?[0-9]+)/)[0]);
            if (!/%/.test(input)) {
                n *= 100;
            }
        } else {
            n = input;
        }
        n = Math.min(Math.max(n, 0), 100);
        this.root.find('.progress-bar').attr('style', 'width: ' + +n + '%').attr('aria-valuenow', n);
    }
}

class GMTeamList {
    constructor(root) {
        // assures that root node is quite correct
        if (!(root instanceof jQuery)) {
            if (typeof root !== 'string')
                throw 'Invalid parameter in constructor of TabList.';
            root = $(root);
        }
        this.root = root;

        this.gmTeams = [];
    }

    addGMTeam(id) {
        const newDiv = $('<div>', {id: id});
        this.root.append(newDiv);
        const gmTeam = new GMTeam(newDiv, id);
        this.gmTeams.push(gmTeam);
        return gmTeam;
    }

    updateTeams(teamJSON) {
        const names = teamJSON.riddle_names;
        const data = teamJSON.data;
        data.forEach((data) => {
            const team = data.team;
            const riddles = data.riddles;
            const gmteam = this.addGMTeam('gm-team-' + team.id);
            // todo à améliorer en prenant en compte les temps (pour l'instant on prend la dernière)
            const currentRiddle = riddles.pop();
            gmteam.setAtributes({
                teamName: team.name,
                riddleName: names[currentRiddle.id - 1],
                progress: 100 * (currentRiddle.id / 11)
            });
            // détail
            const list = gmteam.root.find('.card-body ul');
            riddles.forEach((riddle) => {
                const content = $('<li>');
                const start = new Date(riddle.start_date);
                const end = new Date(riddle.end_date);
                content.text(names[riddle.id - 1] + ' en ' + formatMS(end - start));
                list.append(content);
            });
        });
    }

    update() {
        $.ajax('riddleteam/list', {method: 'GET', success: (response) => this.updateTeams(response)});
    }
}

exports.GMTeam = GMTeam;
exports.GMTeamList = GMTeamList;