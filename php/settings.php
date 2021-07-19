<?php 

    function getSiteName() {
        $site = $_SERVER['QUERY_STRING'];
        if(empty($site)) {
            return "Startseite";
        } else if($site == "site=about") {
            return "Über uns";
        } else if($site == "site=products") {
            return "Unsere Produkte";
        } else {
            return "Startseite";
        }
    }

    function getTargetInclude() {
        $site = $_SERVER['QUERY_STRING'];
        if(empty($site)) {
            return "main";
        } else if($site == "site=about") {
            return "about";
        } else if($site == "site=products") {
            return "products";
        } else {
            return "main";
        }
    }
?>