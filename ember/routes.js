App.Router.map(function() {
    this.route("index", { path: "/" });
    this.resource("achievements", function() {
        this.route("new");
    });
});