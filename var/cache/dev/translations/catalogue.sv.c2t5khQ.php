<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('sv', array (
  'validators' => 
  array (
    'This value should be false.' => 'Värdet ska vara falskt.',
    'This value should be true.' => 'Värdet ska vara sant.',
    'This value should be of type {{ type }}.' => 'Värdet ska vara av typen {{ type }}.',
    'This value should be blank.' => 'Värdet ska vara tomt.',
    'The value you selected is not a valid choice.' => 'Värdet ska vara ett av de givna valen.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Du måste välja minst {{ limit }} val.|Du måste välja minst {{ limit }} val.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Du kan som mest välja {{ limit }} val.|Du kan som mest välja {{ limit }} val.',
    'One or more of the given values is invalid.' => 'Ett eller fler av de angivna värdena är ogiltigt.',
    'This field was not expected.' => 'Det här fältet förväntades inte.',
    'This field is missing.' => 'Det här fältet saknas.',
    'This value is not a valid date.' => 'Värdet är inte ett giltigt datum.',
    'This value is not a valid datetime.' => 'Värdet är inte ett giltigt datum med tid.',
    'This value is not a valid email address.' => 'Värdet är inte en giltig e-postadress.',
    'The file could not be found.' => 'Filen kunde inte hittas.',
    'The file is not readable.' => 'Filen är inte läsbar.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen är för stor ({{ size }} {{ suffix }}). Största tillåtna storlek är {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Filens MIME-typ ({{ type }}) är ogiltig. De tillåtna typerna är {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Värdet ska vara {{ limit }} eller mindre.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Värdet är för långt. Det ska ha {{ limit }} tecken eller färre.|Värdet är för långt. Det ska ha {{ limit }} tecken eller färre.',
    'This value should be {{ limit }} or more.' => 'Värdet ska vara {{ limit }} eller mer.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Värdet är för kort. Det ska ha {{ limit }} tecken eller mer.|Värdet är för kort. Det ska ha {{ limit }} tecken eller mer.',
    'This value should not be blank.' => 'Värdet kan inte vara tomt.',
    'This value should not be null.' => 'Värdet kan inte vara null.',
    'This value should be null.' => 'Värdet ska vara null.',
    'This value is not valid.' => 'Värdet är inte giltigt.',
    'This value is not a valid time.' => 'Värdet är inte en giltig tid.',
    'This value is not a valid URL.' => 'Värdet är inte en giltig URL.',
    'The two values should be equal.' => 'De två värdena måste vara lika.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Filen är för stor. Tillåten maximal storlek är {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Filen är för stor.',
    'The file could not be uploaded.' => 'Filen kunde inte laddas upp.',
    'This value should be a valid number.' => 'Värdet ska vara ett giltigt nummer.',
    'This file is not a valid image.' => 'Filen är ingen giltig bild.',
    'This is not a valid IP address.' => 'Det här är inte en giltig IP-adress.',
    'This value is not a valid language.' => 'Värdet är inte ett giltigt språk.',
    'This value is not a valid locale.' => 'Värdet är inte en giltig plats.',
    'This value is not a valid country.' => 'Värdet är inte ett giltigt land.',
    'This value is already used.' => 'Värdet används redan.',
    'The size of the image could not be detected.' => 'Det gick inte att fastställa storleken på bilden.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Bildens bredd är för stor ({{ width }}px). Tillåten maximal bredd är {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Bildens bredd är för liten ({{ width }}px). Minsta förväntade bredd är {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Bildens höjd är för stor ({{ height }}px). Tillåten maximal bredd är {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Bildens höjd är för liten ({{ height }}px). Minsta förväntade höjd är {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Värdet ska vara användarens nuvarande lösenord.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Värdet ska ha exakt {{ limit }} tecken.|Värdet ska ha exakt {{ limit }} tecken.',
    'The file was only partially uploaded.' => 'Filen laddades bara upp delvis.',
    'No file was uploaded.' => 'Ingen fil laddades upp.',
    'No temporary folder was configured in php.ini.' => 'Det finns ingen temporär mapp konfigurerad i php.ini.',
    'Cannot write temporary file to disk.' => 'Kan inte skriva temporär fil till disken.',
    'A PHP extension caused the upload to fail.' => 'En PHP extension gjorde att uppladdningen misslyckades.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Den här samlingen ska innehålla {{ limit }} element eller mer.|Den här samlingen ska innehålla {{ limit }} element eller mer.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Den här samlingen ska innehålla {{ limit }} element eller mindre.|Den här samlingen ska innehålla {{ limit }} element eller mindre.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Den här samlingen ska innehålla exakt {{ limit }} element.|Den här samlingen ska innehålla exakt {{ limit }} element.',
    'Invalid card number.' => 'Ogiltigt kortnummer.',
    'Unsupported card type or invalid card number.' => 'Okänd korttyp eller ogiltigt kortnummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Det här är inte en giltig International Bank Account Number (IBANK).',
    'This value is not a valid ISBN-10.' => 'Värdet är inte en giltig ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Värdet är inte en giltig ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Värdet är varken en giltig ISBN-10 eller en giltig ISBN-13.',
    'This value is not a valid ISSN.' => 'Värdet är inte en giltig ISSN.',
    'This value is not a valid currency.' => 'Värdet är inte en giltig valuta.',
    'This value should be equal to {{ compared_value }}.' => 'Värdet ska vara detsamma som {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Värdet ska vara större än {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Värdet ska bara större än eller detsamma som {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Värdet ska vara identiskt till {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Värdet ska vara mindre än {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Värdet ska vara mindre än eller detsamma som {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Värdet ska inte vara detsamma som {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Värdet ska inte vara identiskt med {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Förhållandet mellan bildens bredd och höjd är för stort ({{ ratio }}). Högsta tillåtna förhållande är {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Förhållandet mellan bildens bredd och höjd är för litet ({{ ratio }}). Minsta tillåtna förhållande är {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Bilden är kvadratisk ({{ width }}x{{ height }}px). Kvadratiska bilder tillåts inte.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Bilden är landskapsorienterad ({{ width }}x{{ height }}px). Landskapsorienterade bilder tillåts inte.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Bilden är porträttsorienterad ({{ width }}x{{ height }}px). Porträttsorienterade bilder tillåts inte.',
    'An empty file is not allowed.' => 'En tom fil är inte tillåten.',
    'The host could not be resolved.' => 'Värddatorn kunde inte hittas.',
    'This value does not match the expected {{ charset }} charset.' => 'Detta värde har inte den förväntade teckenkodningen {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Detta är inte en giltig BIC-kod.',
    'Error' => 'Fel',
    'This is not a valid UUID.' => 'Detta är inte ett giltigt UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Detta värde ska vara en multipel av {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Denna BIC-koden är inte associerad med IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'Detta värde ska vara giltig JSON.',
    'This form should not contain extra fields.' => 'Formuläret kan inte innehålla extra fält.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Den uppladdade filen var för stor. Försök ladda upp en mindre fil.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'CSRF-elementet är inte giltigt. Försök att skicka formuläret igen.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Ett autentiseringsfel har inträffat.',
    'Authentication credentials could not be found.' => 'Uppgifterna för autentisering kunde inte hittas.',
    'Authentication request could not be processed due to a system problem.' => 'Autentiseringen kunde inte genomföras på grund av systemfel.',
    'Invalid credentials.' => 'Felaktiga uppgifter.',
    'Cookie has already been used by someone else.' => 'Cookien har redan använts av någon annan.',
    'Not privileged to request the resource.' => 'Saknar rättigheter för resursen.',
    'Invalid CSRF token.' => 'Ogiltig CSRF-token.',
    'Digest nonce has expired.' => 'Förfallen digest nonce.',
    'No authentication provider found to support the authentication token.' => 'Ingen leverantör för autentisering hittades för angiven autentiseringstoken.',
    'No session available, it either timed out or cookies are not enabled.' => 'Ingen session finns tillgänglig, antingen har den förfallit eller är cookies inte aktiverat.',
    'No token could be found.' => 'Ingen token kunde hittas.',
    'Username could not be found.' => 'Användarnamnet kunde inte hittas.',
    'Account has expired.' => 'Kontot har förfallit.',
    'Credentials have expired.' => 'Uppgifterna har förfallit.',
    'Account is disabled.' => 'Kontot är inaktiverat.',
    'Account is locked.' => 'Kontot är låst.',
  ),
));

$cataloguePl = new MessageCatalogue('pl', array (
  'validators' => 
  array (
    'This value should be false.' => 'Ta wartość powinna być fałszem.',
    'This value should be true.' => 'Ta wartość powinna być prawdą.',
    'This value should be of type {{ type }}.' => 'Ta wartość powinna być typu {{ type }}.',
    'This value should be blank.' => 'Ta wartość powinna być pusta.',
    'The value you selected is not a valid choice.' => 'Ta wartość powinna być jedną z podanych opcji.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Powinieneś wybrać co najmniej {{ limit }} opcję.|Powinieneś wybrać co najmniej {{ limit }} opcje.|Powinieneś wybrać co najmniej {{ limit }} opcji.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Powinieneś wybrać maksymalnie {{ limit }} opcję.|Powinieneś wybrać maksymalnie {{ limit }} opcje.|Powinieneś wybrać maksymalnie {{ limit }} opcji.',
    'One or more of the given values is invalid.' => 'Jedna lub więcej z podanych wartości jest nieprawidłowa.',
    'This field was not expected.' => 'Tego pola się nie spodziewano.',
    'This field is missing.' => 'Tego pola brakuje.',
    'This value is not a valid date.' => 'Ta wartość nie jest prawidłową datą.',
    'This value is not a valid datetime.' => 'Ta wartość nie jest prawidłową datą i czasem.',
    'This value is not a valid email address.' => 'Ta wartość nie jest prawidłowym adresem email.',
    'The file could not be found.' => 'Plik nie mógł zostać odnaleziony.',
    'The file is not readable.' => 'Nie można odczytać pliku.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Plik jest za duży ({{ size }} {{ suffix }}). Maksymalny dozwolony rozmiar to {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Nieprawidłowy typ mime pliku ({{ type }}). Dozwolone typy mime to {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Ta wartość powinna wynosić {{ limit }} lub mniej.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Ta wartość jest zbyt długa. Powinna mieć {{ limit }} lub mniej znaków.|Ta wartość jest zbyt długa. Powinna mieć {{ limit }} lub mniej znaków.|Ta wartość jest zbyt długa. Powinna mieć {{ limit }} lub mniej znaków.',
    'This value should be {{ limit }} or more.' => 'Ta wartość powinna wynosić {{ limit }} lub więcej.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Ta wartość jest zbyt krótka. Powinna mieć {{ limit }} lub więcej znaków.|Ta wartość jest zbyt krótka. Powinna mieć {{ limit }} lub więcej znaków.|Ta wartość jest zbyt krótka. Powinna mieć {{ limit }} lub więcej znaków.',
    'This value should not be blank.' => 'Ta wartość nie powinna być pusta.',
    'This value should not be null.' => 'Ta wartość nie powinna być nullem.',
    'This value should be null.' => 'Ta wartość powinna być nullem.',
    'This value is not valid.' => 'Ta wartość jest nieprawidłowa.',
    'This value is not a valid time.' => 'Ta wartość nie jest prawidłowym czasem.',
    'This value is not a valid URL.' => 'Ta wartość nie jest prawidłowym adresem URL.',
    'The two values should be equal.' => 'Obie wartości powinny być równe.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Plik jest za duży. Maksymalny dozwolony rozmiar to {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Plik jest za duży.',
    'The file could not be uploaded.' => 'Plik nie mógł być wgrany.',
    'This value should be a valid number.' => 'Ta wartość powinna być prawidłową liczbą.',
    'This file is not a valid image.' => 'Ten plik nie jest obrazem.',
    'This is not a valid IP address.' => 'To nie jest prawidłowy adres IP.',
    'This value is not a valid language.' => 'Ta wartość nie jest prawidłowym językiem.',
    'This value is not a valid locale.' => 'Ta wartość nie jest prawidłową lokalizacją.',
    'This value is not a valid country.' => 'Ta wartość nie jest prawidłową nazwą kraju.',
    'This value is already used.' => 'Ta wartość jest już wykorzystywana.',
    'The size of the image could not be detected.' => 'Nie można wykryć rozmiaru obrazka.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Szerokość obrazka jest zbyt duża ({{ width }}px). Maksymalna dopuszczalna szerokość to {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Szerokość obrazka jest zbyt mała ({{ width }}px). Oczekiwana minimalna szerokość to {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Wysokość obrazka jest zbyt duża ({{ height }}px). Maksymalna dopuszczalna wysokość to {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Wysokość obrazka jest zbyt mała ({{ height }}px). Oczekiwana minimalna wysokość to {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Ta wartość powinna być aktualnym hasłem użytkownika.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Ta wartość powinna mieć dokładnie {{ limit }} znak.|Ta wartość powinna mieć dokładnie {{ limit }} znaki.|Ta wartość powinna mieć dokładnie {{ limit }} znaków.',
    'The file was only partially uploaded.' => 'Plik został wgrany tylko częściowo.',
    'No file was uploaded.' => 'Żaden plik nie został wgrany.',
    'No temporary folder was configured in php.ini.' => 'Nie skonfigurowano folderu tymczasowego w php.ini, lub skonfigurowany folder nie istnieje.',
    'Cannot write temporary file to disk.' => 'Nie można zapisać pliku tymczasowego na dysku.',
    'A PHP extension caused the upload to fail.' => 'Rozszerzenie PHP spowodowało błąd podczas wgrywania.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Ten zbiór powinien zawierać {{ limit }} lub więcej elementów.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Ten zbiór powinien zawierać {{ limit }} lub mniej elementów.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Ten zbiór powinien zawierać dokładnie {{ limit }} element.|Ten zbiór powinien zawierać dokładnie {{ limit }} elementy.|Ten zbiór powinien zawierać dokładnie {{ limit }} elementów.',
    'Invalid card number.' => 'Nieprawidłowy numer karty.',
    'Unsupported card type or invalid card number.' => 'Nieobsługiwany rodzaj karty lub nieprawidłowy numer karty.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Nieprawidłowy międzynarodowy numer rachunku bankowego (IBAN).',
    'This value is not a valid ISBN-10.' => 'Ta wartość nie jest prawidłowym numerem ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Ta wartość nie jest prawidłowym numerem ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Ta wartość nie jest prawidłowym numerem ISBN-10 ani ISBN-13.',
    'This value is not a valid ISSN.' => 'Ta wartość nie jest prawidłowym numerem ISSN.',
    'This value is not a valid currency.' => 'Ta wartość nie jest prawidłową walutą.',
    'This value should be equal to {{ compared_value }}.' => 'Ta wartość powinna być równa {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Ta wartość powinna być większa niż {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Ta wartość powinna być większa bądź równa {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ta wartość powinna być identycznego typu {{ compared_value_type }} oraz wartości {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Ta wartość powinna być mniejsza niż {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Ta wartość powinna być mniejsza bądź równa {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ta wartość nie powinna być równa {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ta wartość nie powinna być identycznego typu {{ compared_value_type }} oraz wartości {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Proporcje obrazu są zbyt duże ({{ ratio }}). Maksymalne proporcje to {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Proporcje obrazu są zbyt małe ({{ ratio }}). Minimalne proporcje to {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Obraz jest kwadratem ({{ width }}x{{ height }}px). Kwadratowe obrazy nie są akceptowane.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Obraz jest panoramiczny ({{ width }}x{{ height }}px). Panoramiczne zdjęcia nie są akceptowane.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Obraz jest portretowy ({{ width }}x{{ height }}px). Portretowe zdjęcia nie są akceptowane.',
    'An empty file is not allowed.' => 'Plik nie może być pusty.',
    'The host could not be resolved.' => 'Nazwa hosta nie została rozpoznana.',
    'This value does not match the expected {{ charset }} charset.' => 'Ta wartość nie pasuje do oczekiwanego zestawu znaków {{ charset }}.',
    'This is not a valid Business Identifier Code (BIC).' => 'Ta wartość nie jest poprawnym kodem BIC (Business Identifier Code).',
    'Error' => 'Błąd',
    'This is not a valid UUID.' => 'To nie jest poprawne UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'Ta wartość powinna być wielokrotnością {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Ten kod BIC (Business Identifier Code) nie jest powiązany z międzynarodowym numerem rachunku bankowego (IBAN) {{ iban }}.',
    'This form should not contain extra fields.' => 'Ten formularz nie powinien zawierać dodatkowych pól.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Wgrany plik był za duży. Proszę spróbować wgrać mniejszy plik.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Token CSRF jest nieprawidłowy. Proszę spróbować wysłać formularz ponownie.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Wystąpił błąd uwierzytelniania.',
    'Authentication credentials could not be found.' => 'Dane uwierzytelniania nie zostały znalezione.',
    'Authentication request could not be processed due to a system problem.' => 'Żądanie uwierzytelniania nie mogło zostać pomyślnie zakończone z powodu problemu z systemem.',
    'Invalid credentials.' => 'Nieprawidłowe dane.',
    'Cookie has already been used by someone else.' => 'To ciasteczko jest używane przez kogoś innego.',
    'Not privileged to request the resource.' => 'Brak uprawnień dla żądania wskazanego zasobu.',
    'Invalid CSRF token.' => 'Nieprawidłowy token CSRF.',
    'Digest nonce has expired.' => 'Kod dostępu wygasł.',
    'No authentication provider found to support the authentication token.' => 'Nie znaleziono mechanizmu uwierzytelniania zdolnego do obsługi przesłanego tokenu.',
    'No session available, it either timed out or cookies are not enabled.' => 'Brak danych sesji, sesja wygasła lub ciasteczka nie są włączone.',
    'No token could be found.' => 'Nie znaleziono tokenu.',
    'Username could not be found.' => 'Użytkownik o podanej nazwie nie istnieje.',
    'Account has expired.' => 'Konto wygasło.',
    'Credentials have expired.' => 'Dane uwierzytelniania wygasły.',
    'Account is disabled.' => 'Konto jest wyłączone.',
    'Account is locked.' => 'Konto jest zablokowane.',
  ),
));
$catalogue->addFallbackCatalogue($cataloguePl);

return $catalogue;
