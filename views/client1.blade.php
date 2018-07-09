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
      var token=LZString.compress('abcdefghijklmnopkrstuvwxyz+=/.0123456789.abcdefghijklmnopkrstuvwxyz+=/'); 
      return storage.set('token', token);
    };

    storage.onConnect()
    .then(setKeys)
    .then(function() {
      return storage.get('token');
    }).then(function(res) {
      console.log(LZString.decompress(res));
      console.log(res); 
    })['catch'](function(err) {
      console.log(err);
    });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lz-string/1.4.4/lz-string.min.js"></script>
</body>
</html>
