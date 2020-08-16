<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Search</title>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        $( function() {

            $("#search").autocomplete({
                source: function( request, response ) {
                    $.ajax({
                        url: "/api/v1/search/"+request.term,
                        success: function( data ) {
                            response( data );
                        }
                    });
                },
                minLength: 1
            });

        });
    </script>
</head>
<body>

<div class="ui-widget">
    <label for="search">Enter Your Search Term </label>
    <input id="search">
</div>

</body>
</html>