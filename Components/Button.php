<?php

namespace Components;

class Button extends Component
{
    private $text;
    private $url;
    private $class;

    function __construct(string $text, string $url,string ... $class)
    {   
        if(isset($class)){
            foreach ($class as $c){
                $this->class .= " $c";
            }
        }else{
            $this->class="";
        }
        
        $this->text = $text;
        $this->url = $url;
        $this->render();
    }
    function render()
    {
?>
        <a href="<?php echo URL_HOST . $this->url; ?>" class="shadow-sm btn btn-info<?php echo $this->class;?>">
            <?php echo $this->text; ?>
        </a>
<?php



    }
}
