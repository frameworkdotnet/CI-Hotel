<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_kelas
 *
 * @author Syiewa
 */
class M_news extends MY_Model {

    //put your code here
    public function __construct() {
        parent::__construct();
        parent::set_tabel('post_article', 'post_id');
    }
}

?>
