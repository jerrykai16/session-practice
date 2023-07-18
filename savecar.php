<?php
        session_start();        
        $Name = $_SESSION["NameArr"] ;
        $Name[] = $_SESSION["Name"];
        $_SESSION["NameArr"] = $Name;

        $Price = $_SESSION["PriceArr"] ;
        $Price[] = $_SESSION["Price"];
        $_SESSION["PriceArr"] = $Price;
        
        $Id = $_SESSION["IdArr"] ;
        $Id[] = $_SESSION["Id"];
        $_SESSION["IdArr"] = $Id;

        $id = $_SESSION["Id"];
        switch (substr($id,0,2)){
                case "bo":
                header("Location: book.html");
                break;
                case "cd":
                header("Location: cd.html");
                break;
        }
        
