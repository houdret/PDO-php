<?php
namespace PDO;

class Html
{
    public $data;

    /**
     * @param $data
     */
    /**
     * @var string tag utilisé pour entouré les champs
     */
    public $surround = 'p';

    public function __construct($data = array())
    {
        $this->data = $data;
    }
    /**
     * @return string création d'un lien css
     */
    public function linkCss($css){
        return $this->surround(
            '<link href="'.$css.'" rel="stylesheet">'
        );
    }

    /**
     * @param $name
     * @param $titre
     * @return string
     */
    public function meta($name, $titre){
        return $this->surround(
            '<meta name="'.$name.'" content="'.$titre.'">'
        );
    }

    /**
     * @param $img
     * @param $desc
     * @return string
     */
    public function image($img, $desc){
        return $this->surround(
            '<img src="'.$img.'" alt="'.$desc.'" />'
        );
    }

    /**
     * @param $href vers un lien
     * @return string
     */
    public function lien($href){
        return $this->surround(
            '<a href="'.$href.'"></a>'
        );
    }

    /**
     * @param $script vers script
     * @return string
     */
    public function script($script){
        return $this->surround(
            '<script src="'.$script.'"></script>'
        );
    }
    /**
     * @param $html string code html entouré
     * @return string
     */
    protected function surround($html){
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    /**
     * @param $index
     * @return mixed|null
     */
    protected  function getValue($index){
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

}