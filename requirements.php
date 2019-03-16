<?php

// Checks if the Pear and Pear Mail package is present or not.

if (!stream_resolve_include_path('System.php'))
{
    echo"PEAR not installed :(";
}
else
{
    echo"PEAR installed: ";
    echo stream_resolve_include_path('System.php');
}

if (!stream_resolve_include_path('Mail.php'))
{
    echo"\nPEAR::Mail not installed :(";
}
else
{
    echo"\nPEAR::Mail installed!: ";
    echo stream_resolve_include_path('Mail.php');
}

