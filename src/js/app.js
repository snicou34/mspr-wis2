try {
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
} catch {
    console.error('BUG');
}


require('bootstrap');
require('./sticky');
require('./scrollreveal');