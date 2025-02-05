(function(global, factory) {
    if (typeof define === "function" && define.amd) {
        define('/config/tour', ['Config'], factory);
    } else if (typeof exports !== "undefined") {
        factory(require('Config'));
    } else {
        var mod = {
            exports: {}
        };
        factory(global.Config);
        global.configTour = mod.exports;
    }
})(this, function(_Config) {
    'use strict';

    (0, _Config.set)('tour', {
        steps: [{
            element: "#toggleFullscreen",
            intro: "Full Screen <p class='content'>Click this button you can view the admin template in full screen</p>"
        }, {
            element: "#toggleChat",
            position: 'left',
            intro: "Quick Conversations <p class='content'>This is a sidebar dialog box for user conversations list, you can even create a quick conversation with other users</p>"
        }],
        skipLabel: "<i class='md-close'></i>",
        doneLabel: "<i class='md-close'></i>",
        nextLabel: "Next <i class='md-chevron-right'></i>",
        prevLabel: "<i class='md-chevron-left'></i>Prev",
        showBullets: false
    });
});