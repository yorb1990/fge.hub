<!doctype html>
<head>
  <title>Cliente 2</title>
</head>
<body>
    <script type="text/javascript" src="{{ asset('fge_tok-hub/js/LSCD/client.js') }}"></script>
    <script type="text/javascript" src="{{ asset('fge_tok-hub/js/LSCD/es6-promise.auto.min.js') }}"></script>
  <script type="text/javascript">
    var storage = new CrossStorageClient('{{env("URL_FGE-HUBS")}}'+'/fge_tok/hub');

    storage.onConnect()
    .then(function() {
      return storage.get('token');
    }).then(function(res) {
      console.log(LZString.decompress(res));
      console.log(res); 
    })['catch'](function(err) {
      console.log(err);
    });
  </script>
  <script type="text/javascript" src="{{ asset('fge_tok-hub/js/LSCD/lz-string.min.js') }}"></script>
</body>
</html>
