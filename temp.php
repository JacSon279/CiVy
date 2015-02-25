<?php
echo "
<html>
        <link rel='stylesheet' href='uikit/uikit.docs.min.css' />
        <script src='uikit/jquery.js'></script>
        <script src='uikit/uikit.min.js'></script>
<head>
<style>
</style>
</head>
<body>

<!-- This is the anchor toggling the modal -->
<a href='#my-id' data-uk-modal>...</a>

<!-- This is the modal -->
<div id='my-id' class='uk-modal'>
    <div class='uk-modal-dialog uk-modal-dialog-lightbox'>
        <a href='' class='uk-close'></a>
        <img src='' alt=''>
    </div>
</div>


</body>
</html>
";

?>