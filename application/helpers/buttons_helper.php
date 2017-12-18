<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');



/* EXAMPLES

    echo form_input(
        array("name" => "","class" => "","id" => "","type" => "","value" => "","style" => "","maxlength" => "")
    );
    
    echo form_open ('name', $attArray, $hiddenarray);

    echo form_label('message','forLabel');
    echo form_label('message', 'forLabel', $arrayAttributes);

    echo form_hidden('name', $array);
    echo form_hidden('name', ''value');

    echo form_input('name', $array);
    echo form_input('name', ''value');
    echo form_input('name', ''value', $javaScript);

    echo form_dropdown('name', $arrayOptions, 'selectedOption');
    echo form_dropdown('name', $arrayOptions, $arraySelectedOptions);
    echo form_dropdown('name', $arrayOptions, 'selectedOption', $JAVASCRIPT);

    echo form_fieldset('legend');
    echo form_fieldset('legend', $arrayAttributes);     $arrayAttributes = array( "id" => "", "class" => "");

    echo form_checkbox('name', 'value', TRUE/FALSE);
    echo form_checkbox('name', 'value', TRUE/FALSE, $JS);

    echo form_submit('name', 'value');

    echo form_button('name', 'content');
    echo form_button($arrayData);       $arrayData = array("name" => "", "id" => "", "value"=>"", "type"=>"", "content"=>"")
    echo form_button('name', 'content', $JAVASCRIPT);

*/


function labelInput($nomeLabel, $nome, $length, $type){
    echo form_label($nomeLabel, $nome);
    echo form_input(
        array(
            "name" => $nome,
            "class" => "form-control",
            "id" => $nome,
            "maxlength" => $length,
            "type" => $type,
            "value" => set_value($nome, "")
        )
    );
}

function labelPassword($nomeLabel, $nome, $length){
    echo form_label($nomeLabel, $nome);
    echo form_password(
        array(
            "name" => $nome,
            "class" => "form-control",
            "id" => $nome,
            "maxlength" => $length
        )
    );
}

function labelTextArea($nomeLabel, $nome){
    echo form_label($nomeLabel, $nome);
    echo form_textarea(
        array(
            "name" => $nome,
            "class" => "form-control",
            "id" => $nome,
            "value" => set_value($nome, "")
        )
    );
}

function buttonSubmit($content){
    echo form_button(
        array(
            "class" => "btn btn-primary",
            "content" => $content,
            "type" => "submit"
        )
    );
}


function labelHidden($nome, $valor){
    echo form_hidden($nome, $valor);
}

?>