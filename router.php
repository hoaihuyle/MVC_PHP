<?php

class Router
{

    static public function parse($url, $request)
    {
        $url = trim($url);
        $explode_url = explode('/', $url);
        $parUrl = explode('?',$url);
        if(count($parUrl)>1)
        if(strpos($parUrl[1], '?') !== true && count($explode_url)==2) {
            $url=$parUrl[0];
        }

        //default index https://cit.cit/
        if ($url == "/"||$url == "/index")
        {
            $request->controller = "home";
            $request->action = "index";
            $request->params = [];
        }
        else
        {
            // https://cit.cit/{url} -> controller is url, action defaut index
            $explode_url = array_slice($explode_url, 1);
            if(!isset($explode_url[1])) {
                $request->controller =  $explode_url[0];
                $request->action = "index";
                $request->params = [];
                
            }else {
                //default is index can clear
                //https://cit.cit/{url}/action/parameter/ || https://cit.cit/{url}/parameter/
                $request->controller = $explode_url[0];
                if(is_numeric($explode_url[1])){
                    $request->action = "index";
                    $request->params = array_slice($explode_url, 1);
                }
                else{
                    
                    if (strpos($explode_url[1], '?') !== false) {
                        $paramStr = explode('?', $explode_url[1]);
                        $request->action = $paramStr[0];
                        $paramName = (explode('&',$paramStr[1]));
                        $params=[];
                        for ($i=0; $i<count($paramName); $i++) {
                            # code...
                            $params[$i]=(explode('=',$paramName[$i])[1]);
                            // echo '<br>';
                        }
                        $request->params = array_slice($params, 0);
                    }
                    else{
                        // https://cit.cit/{url}/action?
                        $request->action = $explode_url[1];
                        $request->params = array_slice($explode_url, 2);
                    }
                   
                }               
            }
        }

    }
}
?>