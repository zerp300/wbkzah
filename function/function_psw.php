<?php

function hasher ($password)
    {   $htmlsp=htmlspecialchars($password);
        $encode=base64_encode($htmlsp);
        $hash=password_hash($encode,PASSWORD_DEFAULT);
        return $hash;
    }

?>