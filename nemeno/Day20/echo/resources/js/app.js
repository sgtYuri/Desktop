"use strict";
import Echo from "laravel-echo"
window.Pusher = require('pusher-js');
var defaultlocation = window.location.hostname;
let token = document.querySelector('meta[name="csrf-token"]')
            .getAttribute('content');

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: 'b0c3809120c9421adba1', 
    wsHost: defaultlocation,
    wsPort: 6001,
    disableStats: true,
    csrfToken: token, 
    enabledTransports: ['ws'] 
});

