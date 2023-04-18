<!DOCTYPE html>
<?php
    print("<html>\n");
    print("<head>\n");
    print("<meta http-equiv='Content-Type' content='text/html;charset=utf-8' />
");
    print("\t<title>Deuxième PHP</title>\n");
    print("\t<link rel=\"stylesheet\" type=\"text/css\" href=\"../htm/css_bleu.htm\">\n");
    print("</head>\n");

    print("<body>\n");
    print("\t<center>\n");
    print("\t<font face=\"Comic sans MS\" color=\"darkblue\">");
    print("Date en bleu ");
    print(date('d M Y'));
    print("</font>\n");
    print("\t<hr />\n");
    print("\t<font face=\"tahoma\" color=\"red\">");
    print( "Heure en rouge ");
    print(date('h:i:s'));
    print("</font>\n");
    print("</body>\n");
    print("</html>");
?>