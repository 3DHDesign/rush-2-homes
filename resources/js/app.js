import Echo from "laravel-echo";

window.Echo = new Echo({
    broadcaster: "pusher",
    key: "8875bc413b06bc629d3a",
    cluster: "ap2",
    forceTLS: true,
});

var channel = Echo.channel("my-channel");
channel.listen(".my-event", function (data) {
    alert(JSON.stringify(data));
});
