(function () {

    var laroute = (function () {

        var routes = {

            absolute: false,
            rootUrl: 'http://localhost',
            routes : [{"host":null,"methods":["GET","HEAD"],"uri":"\/","name":null,"action":"Closure"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/v1\/admin\/categories","name":"api.v1.admin.categories.index","action":"App\Http\Controllers\API\Admin\CategoryAPIController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/v1\/admin\/categories\/create","name":"api.v1.admin.categories.create","action":"App\Http\Controllers\API\Admin\CategoryAPIController@create"},{"host":null,"methods":["POST"],"uri":"api\/v1\/admin\/categories","name":"api.v1.admin.categories.store","action":"App\Http\Controllers\API\Admin\CategoryAPIController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/v1\/admin\/categories\/{categories}","name":"api.v1.admin.categories.show","action":"App\Http\Controllers\API\Admin\CategoryAPIController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/v1\/admin\/categories\/{categories}\/edit","name":"api.v1.admin.categories.edit","action":"App\Http\Controllers\API\Admin\CategoryAPIController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"api\/v1\/admin\/categories\/{categories}","name":"api.v1.admin.categories.update","action":"App\Http\Controllers\API\Admin\CategoryAPIController@update"},{"host":null,"methods":["DELETE"],"uri":"api\/v1\/admin\/categories\/{categories}","name":"api.v1.admin.categories.destroy","action":"App\Http\Controllers\API\Admin\CategoryAPIController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/v1\/admin\/staticPages","name":"api.v1.admin.staticPages.index","action":"App\Http\Controllers\API\Admin\StaticPageAPIController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/v1\/admin\/staticPages\/create","name":"api.v1.admin.staticPages.create","action":"App\Http\Controllers\API\Admin\StaticPageAPIController@create"},{"host":null,"methods":["POST"],"uri":"api\/v1\/admin\/staticPages","name":"api.v1.admin.staticPages.store","action":"App\Http\Controllers\API\Admin\StaticPageAPIController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/v1\/admin\/staticPages\/{staticPages}","name":"api.v1.admin.staticPages.show","action":"App\Http\Controllers\API\Admin\StaticPageAPIController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"api\/v1\/admin\/staticPages\/{staticPages}\/edit","name":"api.v1.admin.staticPages.edit","action":"App\Http\Controllers\API\Admin\StaticPageAPIController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"api\/v1\/admin\/staticPages\/{staticPages}","name":"api.v1.admin.staticPages.update","action":"App\Http\Controllers\API\Admin\StaticPageAPIController@update"},{"host":null,"methods":["DELETE"],"uri":"api\/v1\/admin\/staticPages\/{staticPages}","name":"api.v1.admin.staticPages.destroy","action":"App\Http\Controllers\API\Admin\StaticPageAPIController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"auth\/{provider}","name":null,"action":"App\Http\Controllers\Auth\OauthController@authenticate"},{"host":null,"methods":["GET","HEAD"],"uri":"login","name":null,"action":"App\Http\Controllers\Auth\AuthController@getLogin"},{"host":null,"methods":["POST"],"uri":"login","name":null,"action":"App\Http\Controllers\Auth\AuthController@postLogin"},{"host":null,"methods":["GET","HEAD"],"uri":"logout","name":null,"action":"App\Http\Controllers\Auth\AuthController@getLogout"},{"host":null,"methods":["GET","HEAD"],"uri":"register","name":null,"action":"App\Http\Controllers\Auth\AuthController@getRegister"},{"host":null,"methods":["POST"],"uri":"register","name":null,"action":"App\Http\Controllers\Auth\AuthController@postRegister"},{"host":null,"methods":["GET","HEAD"],"uri":"password\/reset","name":null,"action":"App\Http\Controllers\Auth\PasswordController@getEmail"},{"host":null,"methods":["POST"],"uri":"password\/email","name":null,"action":"App\Http\Controllers\Auth\PasswordController@postEmail"},{"host":null,"methods":["GET","HEAD"],"uri":"password\/reset\/{token}","name":null,"action":"App\Http\Controllers\Auth\PasswordController@getReset"},{"host":null,"methods":["POST"],"uri":"password\/reset","name":null,"action":"App\Http\Controllers\Auth\PasswordController@postReset"},{"host":null,"methods":["GET","HEAD"],"uri":"home","name":null,"action":"App\Http\Controllers\HomeController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"page\/{staticPages}","name":"staticPages.view","action":"App\Http\Controllers\StaticPagesController@view"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/categories","name":"admin.categories.index","action":"App\Http\Controllers\Admin\CategoryController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/categories\/create","name":"admin.categories.create","action":"App\Http\Controllers\Admin\CategoryController@create"},{"host":null,"methods":["POST"],"uri":"admin\/categories","name":"admin.categories.store","action":"App\Http\Controllers\Admin\CategoryController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/categories\/{categories}","name":"admin.categories.show","action":"App\Http\Controllers\Admin\CategoryController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/categories\/{categories}\/edit","name":"admin.categories.edit","action":"App\Http\Controllers\Admin\CategoryController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"admin\/categories\/{categories}","name":"admin.categories.update","action":"App\Http\Controllers\Admin\CategoryController@update"},{"host":null,"methods":["DELETE"],"uri":"admin\/categories\/{categories}","name":"admin.categories.destroy","action":"App\Http\Controllers\Admin\CategoryController@destroy"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/staticPages","name":"admin.staticPages.index","action":"App\Http\Controllers\Admin\StaticPageController@index"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/staticPages\/create","name":"admin.staticPages.create","action":"App\Http\Controllers\Admin\StaticPageController@create"},{"host":null,"methods":["POST"],"uri":"admin\/staticPages","name":"admin.staticPages.store","action":"App\Http\Controllers\Admin\StaticPageController@store"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/staticPages\/{staticPages}","name":"admin.staticPages.show","action":"App\Http\Controllers\Admin\StaticPageController@show"},{"host":null,"methods":["GET","HEAD"],"uri":"admin\/staticPages\/{staticPages}\/edit","name":"admin.staticPages.edit","action":"App\Http\Controllers\Admin\StaticPageController@edit"},{"host":null,"methods":["PUT","PATCH"],"uri":"admin\/staticPages\/{staticPages}","name":"admin.staticPages.update","action":"App\Http\Controllers\Admin\StaticPageController@update"},{"host":null,"methods":["DELETE"],"uri":"admin\/staticPages\/{staticPages}","name":"admin.staticPages.destroy","action":"App\Http\Controllers\Admin\StaticPageController@destroy"}],
            prefix: '',

            route : function (name, parameters, route) {
                route = route || this.getByName(name);

                if ( ! route ) {
                    return undefined;
                }

                return this.toRoute(route, parameters);
            },

            url: function (url, parameters) {
                parameters = parameters || [];

                var uri = url + '/' + parameters.join('/');

                return this.getCorrectUrl(uri);
            },

            toRoute : function (route, parameters) {
                var uri = this.replaceNamedParameters(route.uri, parameters);
                var qs  = this.getRouteQueryString(parameters);

                return this.getCorrectUrl(uri + qs);
            },

            replaceNamedParameters : function (uri, parameters) {
                uri = uri.replace(/\{(.*?)\??\}/g, function(match, key) {
                    if (parameters.hasOwnProperty(key)) {
                        var value = parameters[key];
                        delete parameters[key];
                        return value;
                    } else {
                        return match;
                    }
                });

                // Strip out any optional parameters that were not given
                uri = uri.replace(/\/\{.*?\?\}/g, '');

                return uri;
            },

            getRouteQueryString : function (parameters) {
                var qs = [];
                for (var key in parameters) {
                    if (parameters.hasOwnProperty(key)) {
                        qs.push(key + '=' + parameters[key]);
                    }
                }

                if (qs.length < 1) {
                    return '';
                }

                return '?' + qs.join('&');
            },

            getByName : function (name) {
                for (var key in this.routes) {
                    if (this.routes.hasOwnProperty(key) && this.routes[key].name === name) {
                        return this.routes[key];
                    }
                }
            },

            getByAction : function(action) {
                for (var key in this.routes) {
                    if (this.routes.hasOwnProperty(key) && this.routes[key].action === action) {
                        return this.routes[key];
                    }
                }
            },

            getCorrectUrl: function (uri) {
                var url = this.prefix + '/' + uri.replace(/^\/?/, '');

                if(!this.absolute)
                    return url;

                return this.rootUrl.replace('/\/?$/', '') + url;
            }
        };

        var getLinkAttributes = function(attributes) {
            if ( ! attributes) {
                return '';
            }

            var attrs = [];
            for (var key in attributes) {
                if (attributes.hasOwnProperty(key)) {
                    attrs.push(key + '="' + attributes[key] + '"');
                }
            }

            return attrs.join(' ');
        };

        var getHtmlLink = function (url, title, attributes) {
            title      = title || url;
            attributes = getLinkAttributes(attributes);

            return '<a href="' + url + '" ' + attributes + '>' + title + '</a>';
        };

        return {
            // Generate a url for a given controller action.
            // laroute.action('HomeController@getIndex', [params = {}])
            action : function (name, parameters) {
                parameters = parameters || {};

                return routes.route(name, parameters, routes.getByAction(name));
            },

            // Generate a url for a given named route.
            // laroute.route('routeName', [params = {}])
            route : function (route, parameters) {
                parameters = parameters || {};

                return routes.route(route, parameters);
            },

            // Generate a fully qualified URL to the given path.
            // laroute.route('url', [params = {}])
            url : function (route, parameters) {
                parameters = parameters || {};

                return routes.url(route, parameters);
            },

            // Generate a html link to the given url.
            // laroute.link_to('foo/bar', [title = url], [attributes = {}])
            link_to : function (url, title, attributes) {
                url = this.url(url);

                return getHtmlLink(url, title, attributes);
            },

            // Generate a html link to the given route.
            // laroute.link_to_route('route.name', [title=url], [parameters = {}], [attributes = {}])
            link_to_route : function (route, title, parameters, attributes) {
                var url = this.route(route, parameters);

                return getHtmlLink(url, title, attributes);
            },

            // Generate a html link to the given controller action.
            // laroute.link_to_action('HomeController@getIndex', [title=url], [parameters = {}], [attributes = {}])
            link_to_action : function(action, title, parameters, attributes) {
                var url = this.action(action, parameters);

                return getHtmlLink(url, title, attributes);
            }

        };

    }).call(this);

    /**
     * Expose the class either via AMD, CommonJS or the global object
     */
    if (typeof define === 'function' && define.amd) {
        define(function () {
            return laroute;
        });
    }
    else if (typeof module === 'object' && module.exports){
        module.exports = laroute;
    }
    else {
        window.laroute = laroute;
    }

}).call(this);

