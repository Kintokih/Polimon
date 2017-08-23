<?php
/**
 * Created by PhpStorm.
 * User: Kinto
 * Date: 23/08/2017
 * Time: 17:39
 */

class indexController{

    public function indexAction($args){


        $article = new articles();
        $article->setId(1);
        $article->setTitle("Mon titre 2");
        $article->setContent("Description de ma page");
        $article->save();



        $v = new view();
        $v->setView("indexIndex");
        $v->assign("pseudo", "yves");

    }

    public function testAction($args){
        echo "Bonjour2";
    }

}