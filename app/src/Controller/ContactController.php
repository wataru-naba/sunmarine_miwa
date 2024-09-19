<?php

namespace App\Controller;


use App\Controller\AppController;
use App\Form\ContactForm;

class ContactController extends AppController
{


    public function index()
    {

        //フォームクラスを生成
        $contact = new ContactForm();
        $this->set('contact', $contact);
        switch ($this->request->getData('confirm')) {
            //確認画面へ
            case 'confirm':
                $this->render('confirm');
                break;
            //送信処理へ
            case 'send':
                //フォームクラスから送信を実行.
                if ($contact->execute($this->request->getData())) {
                    $this->render('send');
                } else {
                    print_r($this->request->getData());
                    $this->Flash->error(__('エラーが発生しました。'));
                }
                break;
        }


    }



}