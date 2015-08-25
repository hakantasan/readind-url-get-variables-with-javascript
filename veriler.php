<!DOCTYPE html>
<html lang="tr">
    <head>
        <meta charset="utf-8">
        <script>
            function GetUrlValue(VarSearch)
            {
                var SearchString = window.location.search.substring(1);
                var VariableArray = SearchString.split('&');
                for(var i = 0; i < VariableArray.length; i++){
                    var KeyValuePair = VariableArray[i].split('=');
                    if(KeyValuePair[0] == VarSearch){
                        return KeyValuePair[1];
                    }
                }
            }

            function birinci()
            {
                var ad=GetUrlValue('ad');
                alert(ad);
            }

            function ikinci()
            {
                var soyad=GetUrlValue('soyad');
                alert(soyad);
            }
        </script>
    </head>
    <body>
        <?php
            $ad = $_GET['ad'];
            $soyad = $_GET['soyad'];

            echo "<b>Adınız:</b> ",$ad,"<br>";
            echo "<b>Soyadınız:</b> ",$soyad,"<br>";
        ?>
        
        <br><br>
        <input type="button" value="İlk değeri al" onclick="birinci()">
        <br><br>
        <input type="button" value="İkinci değeri al" onclick="ikinci()">
    </body>
</html>
