<!doctype html>
<head>
  <title>cliente 1</title>
</head>
<body>
  <script type="text/javascript" src="{{ asset('fge_tok-hub/js/LSCD/client.js') }}"></script>
  <script type="text/javascript" src="{{ asset('fge_tok-hub/js/LSCD/es6-promise.auto.min.js') }}"></script>
  <script type="text/javascript">
    var storage = new CrossStorageClient('{{env("URL_FGE-HUBS")}}'+'/fge_tok/hub');

    var setKeys = function () {
      return storage.set('key1', 'foo').then(function() {
        return storage.set('key2', 'bar');
      });
    };

    storage.onConnect()
    .then(setKeys)
    .then(function() {
      return storage.get('key1');
    }).then(function(res) {
      console.log(res); // 'foo'
    })['catch'](function(err) {
      console.log("cdfkpíkcpo");
      console.log(err);
    });
  </script>
</body>
</html>
