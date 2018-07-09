<!doctype html>
<head>
  <title>Cross Storage Hub</title>
</head>
<body>
    <script type="text/javascript" src="{{ asset('fge_tok-hub/js/LSCD/client.js') }}"></script>
    <script type="text/javascript" src="{{ asset('fge_tok-hub/js/LSCD/es6-promise.auto.min.js') }}"></script>
  <script type="text/javascript">
    var storage = new CrossStorageClient('{{env("URL_FGE-HUBS")}}'+'/fge_tok/hub');

    storage.onConnect()
    .then(function() {
      return storage.get('key1', 'key2');
    }).then(function(res) {
      console.log(res); 
    })['catch'](function(err) {
      console.log(err);
    });
  </script>
</body>
</html>
