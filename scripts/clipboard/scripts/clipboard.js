    var clipboard = new ClipboardJS('.btn', {
        text: function() {
            return 'to be or not to be';
        }
    });

    clipboard.on('success', function(e) {
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });