function addTab(name) {
    $('#nav-tab').append('<a class="nav-item nav-link" id="nav-' + name + '-tab" data-toggle="tab" href="#nav-' + name + '" role="tab" aria-controls="nav-' + name + '" aria-selected="true">' + name + '</a>');
    $('#nav-tabContent').append('<div class="tab-pane " id="nav-' + name + '" role="tabpanel" aria-labelledby="nav-' + name + '-tab"></div>');
}

function showTab(n) {
    $('#nav-tab a:nth-child(' + n + ')').tab('show')
}

function tab(n) {
    return $('#nav-tab a:nth-child(' + n + ')');
}

function contentTab(n) {
    return $('#nav-tabContent div:nth-child(' + n + ')');
}

exports.addTab = addTab;
exports.showTab = showTab;
exports.tab = tab;
exports.contentTab = contentTab;