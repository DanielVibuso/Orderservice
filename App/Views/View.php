<?php

namespace App\Views;
/** * Comentário de cabeçalho de arquivos * Esta classe de upload de fotos *
 * * @author Daniel Vilela <daniel_2bueno@hotmail.com>
 * * @version 0.1
 * * @copyright proprietary.
 * * @access public
 * * @package App
 * * @subpackage Views
 * * @example Classe uploadGenilhu.
 * */
class View {

    /** *
     * * Variável recebe o objeto smarty para manipular template.
     * * @access private
     * * @name $view */
    private \Smarty_GuestBook $view;

    public function __construct(){
       $this->view = new \Smarty_GuestBook();
       $this->view->left_delimiter = '<!--{';
       $this->view->right_delimiter = '}-->';
    }

    /**
     * * Função para passar dados para o front html
     * * @access public
     * * @param String $dataName que é o nome pelo qual o dado será acessado no front(template)
     * * @param array $dataValue que são os valores
     * * @return void
     * */
    public function addDataToView(string $dataName, array $dataValue): void{
        $this->view->assign($dataName, $dataValue);
    }


     /**
     * * método para exibir template
     * * @access public
     * * @param String $template que é o nome do template que será exibido
     * * @param array $dataValue que são os valores
     * * @return void
     * */
    public function showView(string $template): void{
        $this->view->display($template);
    }

}