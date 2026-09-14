xoopseditor zapewnia kolektyw redaktorów dla XOOPS

instrukcja obsługi:

1 sprawdź pliki xoops_version.php w katalogu /xoopseditor/, aby upewnić się, że są nowsze od bieżących

2 prześlij /xoopseditor/ do /XOOPS/class/ => /XOOPS/class/xoopseditor/:
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/class/xoopseditor/fckeditor
  XOOPS/class/xoopseditor/koivi
  XOOPS/class/xoopseditor/textarea
  XOOPS/class/xoopseditor/tinymce

3 skonfiguruj preferencje, jeśli ma to zastosowanie
3.1 ./dhtmlext(wszyscy redaktorzy)/language/: utwórz plik języka lokalnego w oparciu o english.php
3.3 ./dhtmlext(wszyscy redaktorzy)/editor_registry.php: ustaw konfiguracje dla edytora: kolejność - kolejność wyświetlania w przypadku użycia wyboru edytora, 0 dla wyłączonego; nohtml - działa dla składni innej niż HTML
3.3 ./FCKeditor/module/: skopiuj pliki do folderów modułów w przypadku, gdy wymagane są specyficzne dla modułu uprawnienia do przesyłania, opcje przechowywania i edytora
3.3.1 ./FCKeditor/module/fckeditor.config.js: w przypadku opcji edytora zwykle nie trzeba ich zmieniać
3.3.2 ./FCKeditor/module/fckeditor.connector.php: aby określić folder do przeglądania plików (i przesyłania pamięci) => XOOPS/uploads/XOOPS_FCK_FOLDER/, folder należy utworzyć ręcznie
3.3.3 ./FCKeditor/module/fckeditor.upload.php: określ uprawnienia do przesyłania i przesyłanie pamięci
3.4 XOOPS/uploads/fckeditor/: aby utworzyć folder, jeśli włączony jest edytor FCKeditor, używany do przesyłania, z którego nie określono folderu przesyłania
3.5 ./tinymce/tinymce/jscripts/: pobierz pliki w lokalnym języku z http://tinymce.moxiecode.com/language.php

4 sprawdź nazwy plików: w przypadku systemu, w którym rozróżniana jest wielkość liter, upewnij się, że nazwy plików są dosłownie poprawne, tj. „FCKeditor” nie jest identyczny z „fckeditor”

5 sprawdź /xoopseditor/sampleform.inc.php, aby zapoznać się z przewodnikiem programowania
