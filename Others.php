<?php
namespace indd01\Useful;
class Others
{
    /**
     * in_array and strstr combined
     *
     * @param $haystack
     * @param $needle
     * @return bool|int|string
     */
    private function _strstr_inarray($haystack, $needle)
    {
        if(!is_array($haystack)){
            return false;
        }
        foreach($haystack as $key => $element){
            if(strstr($element, $needle)){
                return $key;
            }
        }
    }
}