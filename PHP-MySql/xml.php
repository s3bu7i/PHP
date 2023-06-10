<?php
header("Content-Type:text/html;charset=utf-8");

/*
TAPŞIRIQ 1
- Başlanğıc teqlərin emalı funksiyasını yazın
- Bağlanan teqlərin emalı funksiyasını yazın
- Mətn məlumatlarının emalı funksiyasını yazın
- Parseri yaradın
- Emal funksiyalarını başlanğıc və bağlanan teqlərdə qeydiyyata salın
- Emal funksiyasını mətn məlumatlarında qeydiyyata salın
*/

// Başlangıç etiketlerinin işlenmesi için fonksiyon
function startElement($parser, $name, $attrs)
{
    // Başlangıç etiketini işleyin
}

// Bitiş etiketlerinin işlenmesi için fonksiyon
function endElement($parser, $name)
{
    // Bitiş etiketini işleyin
}

// Metin içeriğinin işlenmesi için fonksiyon
function characterData($parser, $data)
{
    // Metin içeriğini işleyin
}

// Parserı oluşturun
$parser = xml_parser_create();

// Emal fonksiyonlarını başlangıç ve bitiş etiketlerinde kaydedin
xml_set_element_handler($parser, "startElement", "endElement");

// Emal fonksiyonunu metin içeriğinde kaydedin
xml_set_character_data_handler($parser, "characterData");
?>

<html>

<head>
    <title>Kataloq</title>
</head>

<body>
    <h1>Kitabların kataloqu</h1>
    <table border="1" width="100%">
        <tr>
            <th>Müəllif</th>
            <th>Adı</th>
            <th>İli</th>
            <th>Qiyməti, AZN</th>
        </tr>
        <?php
    /*
    TAPŞIRIQ 2
    - Parseri xoda salın
    */
    ?>
    </table>
</body>

</html>

<?php
header("Content-Type:text/html;charset=utf-8");

/*
TAPŞIRIQ 1
- DOM obyekti yaradın
- XML sənədi obyektə yükləyin
- Başlanğıc elementi alın
*/

// DOM obyektini yaratmaq
$dom = new DOMDocument();

// XML sənədini yükləmək
$dom->load("kitablar.xml"); // XML sənədiyin adını uyğun dəyişin

// Başlanğıc elementini alın
$root = $dom->documentElement;
?>

<html>

<head>
    <title>Kataloq</title>
</head>

<body>
    <h1>Kitabların kataloqu</h1>
    <table border="1" width="100%">
        <tr>
            <th>Müəllif</th>
            <th>Adı</th>
            <th>İli</th>
            <th>Qiyməti, AZN</th>
        </tr>
        <?php
    /*
    TAPŞIRIQ 2
    - Cədvəli lazımi məlumatlarla doldurun
    */
    ?>
    </table>
</body>

</html>


<?php
// XML obyektin yaradılması
$xml = new DOMDocument();

// XML sənədin yüklənməsi
$xml->load('input.xml');

// XSL obyektin yaradılması
$xsl = new DOMDocument();

// XSL sənədin yüklənməsi
$xsl->load('stylesheet.xsl');

// XSLT parserin yaradılması
$processor = new XSLTProcessor();

// XSL obyektin yüklənməsi
$processor->importStylesheet($xsl);

// Parsinq
$result = $processor->transformToXML($xml);

// İşlənmiş XML çıxışını ekrana çıxardın
echo $result;
?>