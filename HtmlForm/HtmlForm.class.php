<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HtmlForm
 *
 * @author Vinayak
 */
class HtmlForm {
    //put your code here

    private $clsLabel;
    private $clsText;
    private $clsButton;
    private $clsCheckBox;
    private $pathStyleSheet;

    function SetclsLabel($label)
    {
        $this->clsLabel=$label;
    }
    function SetclsText($text)
    {
        $this->clsText=$text;
    }
    function SetclsButton($button)
    {
        $this->clsButton=$button;
    }
    function SetclsCheckBox($checkbox)
    {
        $this->clsCheckBox=$checkbox;
    }
    function SetpathStyleSheet($pathstylesheet)
    {
        $this->pathStyleSheet=$pathstylesheet;
    }


}
?>
