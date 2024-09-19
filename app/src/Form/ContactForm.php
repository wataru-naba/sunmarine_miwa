<?php
namespace App\Form;

use Cake\Form\Form;
use Cake\Form\Schema;
use Cake\Validation\Validator;
use Cake\Mailer\Email;
use Cake\Core\Configure;


class ContactForm extends Form{

    protected function _buildSchema(Schema $schema): Schema
    {
        return $schema->addField('name', 'string')
                ->addField('furigana', ['type' => 'string'])
                ->addField('email', ['type' => 'string'])
                ->addField('tel', ['type' => 'string'])
                ->addField('info', ['type' => 'textarea']);
    }

    // バリデーション内容を定義する
    protected function _buildValidator(Validator $validator)
    {
        return $validator->add('email', 'format', [
                'rule' => 'email',
                'message' => 'メールアドレスを入力してください。',
            ]);
    }

    // バリデーション後に実行したい処理を記述する
	protected function _execute(array $data): bool

	{
		
		Configure::load('company');

		$body = $data['name1'].'様'."<br/>";

		$body .='この度はお問い合わせありがとうございます。'."<br/>".'下記の内容でのお問い合わせを行いました'."<br/><br/>";
		$body .= '━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━'."<br/>";
		$body .= '■ お問い合わせ内容 ■'."<br/>";
		$body .= '───────────────────────────────────'."<br/>";
        $body .= 'お問い合わせ種別：'.$data['category']."<br/>";
		$body .= '氏名：'.$data['name1'].' '.$data['name2']."<br/>";;
		$body .= 'メールアドレス：'.$data['email']."<br/>";
		$body .= '電話番号：'.$data['tel']."<br/><br/>";
		$body .= '---お問い合わせ内容---'."<br/>";
		$body .= nl2br($data['info']);


		$body .="<br/><br/><br/><br/>";

		$body .='******************************************'."<br/>".
			Configure::read('name')."<br/>".
			Configure::read('address')."<br/>".
			'Tel:'.Configure::read('tel')."<br/>".
			'E-mail :'.Configure::read('email')."<br/>".
			'HP :'.Configure::read('hp')."<br/>".
			'******************************************';


		// メールを送信する
		$email = new Email('default');
		$email->setEmailFormat('both')
        		->setFrom(Configure::read('email'),Configure::read('name'))
        		->setTo($data['email'])
        		->setSubject('お問い合わせメール-控え- '.Configure::read('name'))
        		->send($body);

		$email = new Email('default');
		$email->setEmailFormat('both')
        		->setFrom(Configure::read('email'),Configure::read('name'))
        		->setTo(Configure::read('email'))
        		->setBcc('wataru@hyuga.jp')
        		->setSubject($data['name1'].'様よりお問い合わせメールが届いています | '.Configure::read('name'))
        		->send($body);

		return true;	
}
}