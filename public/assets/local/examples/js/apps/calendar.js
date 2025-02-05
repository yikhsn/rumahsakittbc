(function(global, factory) {
    if (typeof define === "function" && define.amd) {
        define('/apps/calendar', ['jquery'], factory);
    } else if (typeof exports !== "undefined") {
        factory(require('jquery'));
    } else {
        var mod = {
            exports: {}
        };
        factory(global.jQuery);
        global.appsCalendar = mod.exports;
    }
})(this, function(_jquery) {
    'use strict';

    var _jquery2 = babelHelpers.interopRequireDefault(_jquery);

    (0, _jquery2.default)(document).ready(function() {
        AppCalendar.run();
    });
});