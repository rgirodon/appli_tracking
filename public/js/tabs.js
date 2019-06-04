function addTab(name) {
    $('#nav-tab').append('<a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-' + name + '" role="tab" aria-controls="nav-home" aria-selected="true">' + name + '</a>\n');
    $('#nav-tabContent').append('<div class="tab-pane " id="nav-' + name + '" role="tabpanel" aria-labelledby="nav-contact-tab">Lorem ipsum 3</div>')
}

function showTab(n) {
    $('#nav-tab a:nth-child(1)').tab('show')
}