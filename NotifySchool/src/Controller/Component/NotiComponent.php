<?php
namespace App\Controller\Component;
use Cake\Controller\Component;

class NotiComponent extends Component {
    public $a=array('estado'=>false,'datos'=>null,'titulo'=>null,'msg'=>null,'tipomsg'=>'blackgloss');
    
    public function success($msg,$estado,$data) {
        $a['datos']=$data;
        $a['titulo']='Correcto!';
        $a['msg']=['ok'=>$msg];
        $a['estado']=$estado;
        $a['tipomsg']='success';
        
        return $a;
    }
    
    public function error($msg,$data)
    {
        $a['titulo']='Error!';
        $a['msg']=['error'=>$msg];
        $a['tipomsg']='danger';
        $a['datos']=$data;
        
        return $a;
    }
    public function warning($errores,$data)
    {
        foreach ($errores as $indice => $subarray) {
            $a['msg'] = $subarray;
        }
        $a['tipomsg']='warning';
        $a['titulo']='Advertencia!';
        $a['datos']=$data;
        return $a;
    }
    public function warningsimple($msg,$data)
    {
        $a['titulo']='Advertencia!';
        $a['msg']=['warning'=>$msg];
        $a['tipomsg']='warning';
        $a['datos']=$data;
        
        return $a;
    }
    
    
    
}
