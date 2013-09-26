App.AchievementsRoute = Ember.Route.extend({
  model: function() {
      var store = this.get('store');
      return store.find('achievement');
  }
});
