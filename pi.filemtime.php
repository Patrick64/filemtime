<?php
class Filemtime
{
    public $return_data = '';

    public function __construct()
    {
		$file = (ee()->TMPL->fetch_param('file') != '') ? ee()->TMPL->fetch_param('file') : FALSE ;
		$root_path = (ee()->TMPL->fetch_param('root_path') != '') ? ee()->TMPL->fetch_param('root_path') : $_SERVER['DOCUMENT_ROOT'] ;
		$time = filemtime($root_path.ee()->security->xss_clean(html_entity_decode($file)));
		
		
        $this->return_data = $time;
    }
}