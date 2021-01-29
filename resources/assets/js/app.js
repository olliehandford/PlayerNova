window.$ = window.jQuery = require('jquery')
require('fullpage.js')
let Bloodhound = require('bloodhound-js')
let typeahead = require('typeahead.js')
$(document).ready(function () {
    $('#playerNovaApp').fullpage({
        navigation: true,
        verticalCentered: false,
        resize: false,
        scrollBar: true,
        autoScrolling: false
    })
})
