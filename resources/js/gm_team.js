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

        // constructs and retrieves ids
        this.ids = GMTeamFactory.construct(root, id);
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

exports.GMTeam = GMTeam;