<?php
    require __DIR__.'/include/header.php';
    $_request_method = strtoupper($_SERVER['REQUEST_METHOD']);
    if($_request_method === 'GET')
    {
        require __DIR__.'/include/form.php';  
    }elseif($_request_method === 'POST')
    {
        require __DIR__.'/include/process.php';
    }
    
        require __DIR__.'/include/footer.php';
    
?>