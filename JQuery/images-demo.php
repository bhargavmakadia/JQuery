<html>
    <body>
        <script src="jquery-3.6.1.js" type="text/javascript"></script>
        <link href="dist/css/lightbox.css" rel="stylesheet" type="text/css"/>
        <script src="dist/js/lightbox.js" type="text/javascript"></script>
        <a href="1.jpg" data-lightbox="image-1" data-title="Bhargav Makadia">Image #1</a>
        <a href="2.jpg" data-lightbox="image-1" data-title="Bhargav Makadia">Image #2</a>
        
        <a href="1.jpg" data-lightbox="image-3" data-title="Bhargav Makadia"><img src="1.jpg" style="width:100px;"></a>
        <a href="2.jpg" data-lightbox="image-4" data-title="Bhargav Makadia"><img src="2.jpg" style="width:100px;"></a>
        <script>
            lightbox.option({
                'resizeDuration':1500,
                'wrapAround':true,
            })
        </script>
    </body>
</html>