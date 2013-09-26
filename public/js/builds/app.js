App = Ember.Application.create({
  LOG_TRANSITIONS: true
});

App.ApplicationAdapter = DS.RESTAdapter.extend({
  namespace: 'api',
  host: 'http://localhost/embel/public'
});

var attr = DS.attr;;App.Achievement = DS.Model.extend({
  title: DS.attr('string'),
  achievedAt: DS.attr('date')
});
  ;App.Router.map(function() {
    this.route("index", { path: "/" });
    this.route("achievements");
});;App.AchievementsRoute = Ember.Route.extend({
  model: function() {
      var store = this.get('store');
      return store.find('achievement');
  }
});
