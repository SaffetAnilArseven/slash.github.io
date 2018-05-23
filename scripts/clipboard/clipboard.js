var clipboard = new ClipboardJS('.btn', {
        text: function() {
            return '<link rel="stylesheet" href="https://saffetanilarseven.github.io/slash.github.io/css/slash.css">';
        }
    });

    clipboard.on('success', function(e) {
        console.log(e);
    });

    clipboard.on('error', function(e) {
        console.log(e);
    });