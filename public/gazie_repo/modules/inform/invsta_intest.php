<?php
/*
 -----------------------------------------------------------------------
                         GAzie - Gestione Azienda
    Copyright (C) 2004-2022 - Antonio De Vincentiis Montesilvano (PE)
                          (http://www.devincentiis.it)
                      <http://gazie.sourceforge.net>
 -----------------------------------------------------------------------
    Questo programma e` free software;   e` lecito redistribuirlo  e/o
    modificarlo secondo i  termini della Licenza Pubblica Generica GNU
    come e` pubblicata dalla Free Software Foundation; o la versione 2
    della licenza o (a propria scelta) una versione successiva.

    Questo programma  e` distribuito nella speranza  che sia utile, ma
    SENZA   ALCUNA GARANZIA; senza  neppure  la  garanzia implicita di
    NEGOZIABILITA` o di  APPLICABILITA` PER UN  PARTICOLARE SCOPO.  Si
    veda la Licenza Pubblica Generica GNU per avere maggiori dettagli.

    Ognuno dovrebbe avere   ricevuto una copia  della Licenza Pubblica
    Generica GNU insieme a   questo programma; in caso  contrario,  si
    scriva   alla   Free  Software Foundation, 51 Franklin Street,
    Fifth Floor Boston, MA 02110-1335 USA Stati Uniti.
 -----------------------------------------------------------------------
*/
require("../../library/include/datlib.inc.php");

$admin_aziend=checkAdmin();

if (isset($_SESSION['print_request'])){
        echo "<HTML><HEAD><TITLE>Wait for PDF</TITLE>\n";
        echo "<script type=\"text/javascript\">\n";
        echo "setTimeout(\"window.location='stampa_intest.php'\",1000)\n";
        echo "</script></HEAD>\n<BODY><DIV align=\"center\">Wait for PDF</DIV><DIV align=\"center\">Aspetta il PDF</DIV></BODY></HTML>";
} else {
    header("Location: select_intest.php");
    exit;
}
?>