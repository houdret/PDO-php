<?php
namespace PDO;

class Form
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
     * @param $name
     * @return mixed
     */
    public function input($name){
        return $this->surround(
            '<label for="'.$name.'" >Votre Nom </label><input type="text" name="'.$name.'" value="'.$this->getValue($name).'">'
        );
    }

    /**
     * @return string choix de selection
     */
    public function select(){
        return $this->surround(
            '<label for="1" >Votre sélection </label>
                   <select aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                </select>'
        );
    }

    /**
     * @return string checkbox
     */
    public function checkbox(){
        return $this->surround(
            '<input type="checkbox" value="" id="">
                   <label for="" >Example </label>'
        );
    }

    /**
     * @return string commentaire
     */
    public function textarea(){
        return $this->surround(
            '<label for="" >Commentaire </label><textarea  id=""></textarea>'
        );
    }

    /**
     * @return string radio bouton
     */
    public function btnRadio(){
        return $this->surround(
            '<input type="radio" name="" id="">
                   <label for="" >Example </label>'
        );
    }
    /**
     * @return mixed
     */
    public function submit(){
        return $this->surround('<button type="submit" >Envoyer</button>');
    }

    /**
     * @param $action
     * @return string
     */
    public function create($action){
        return $this->surround(
            '<form method="" action="'.$action.'">'
        );
    }

    public function endForm(){
        return $this->surround(
            '</form">'
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