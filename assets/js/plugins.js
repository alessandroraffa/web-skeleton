// Avoid `console` errors in browsers that lack a console.
(function() {
  var method;
  var noop = function() {
  };
  var methods = [
    'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
    'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
    'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
    'timeStamp', 'trace', 'warn'
  ];
  var length = methods.length;
  var console = (window.console = window.console || {});

  while (length--) {
    method = methods[length];

    // Only stub undefined methods.
    if (!console[method]) {
      console[method] = noop;
    }
  }
}());

// Place any jQuery/helper plugins in here.

// open external link on a new window
(function() {
  $("a").each(function() {
    var sameDomainReg = new RegExp("/" + location.host + "/");
    if (!sameDomainReg.test(this.href)) {
      $(this).click(function(event) {
        event.preventDefault();
        event.stopPropagation();
        window.open(this.href, "_blank");
      });
    }
  });
}());