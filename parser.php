<?php
   require_once 'ParserInterface.php';


   class Parser implements ParserInterface
    {
        public function process(string $url, string $tag):array
            {
               $str = file_get_contents($url);
               preg_match_all('#<'.$tag.'>(.+?)</'.$tag.'>#su', $str, $res);
               return $res;
            }
    }


$parser = new Parser();
//$result = $parser->process('https://www.site_address/', 'h3');
echo '<pre>';
print_r($result);