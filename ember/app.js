App = Ember.Application.create({
  LOG_TRANSITIONS: true
});

App.ApplicationAdapter = DS.RESTAdapter.extend({
  namespace: 'api',
  host: 'http://localhost/embel/public'
});

var attr = DS.attr;

Ember.Handlebars.registerBoundHelper('date', 
    function(date) {
        return moment(date).format('DD/MM/YYYY');
    }
);