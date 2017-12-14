<?php

namespace App\Http\Controllers;
use Illuminate\Mail\Mailer;

class TestController extends Controller
{
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
    /**
     * 发送邮件
     */
    public function mail(){

        //$tag = $this->sendText();
        //$tag = $this->sendHtml();
        //TODO  $tag 判断发送是否成功，进行后续代码开发
        return view('mail',['title' => '你若盛开，清风自来','author' => '木心']);
    }

    /**
     * 发送纯文本 邮件
     */
    public function sendText(){
        //此处为文本内容
        $content = '从前的日色变得慢 车 马 邮件 都慢';
        $tag = $this->mailer
            ->raw($content,
                function ($message){
                    $emailData = [
                        'subject' => '这是邮件主题，希望您能支持！',//邮件主题
                        'to' => '930959695@qq.com',//邮件接收地址
                    ];
                    $message->subject($emailData['subject']);
                    $message->to($emailData['to']);
                });
        return $tag;
    }
    /**
     * 发送自定义网页
     */
    public function sendHtml(){
        $data = ['title' => '你若盛开，清风自来','author' => '木心'];
        $tag = $this->mailer
            ->send('mail',$data,
                function ($message){
                    $emailData = [
                        'subject' => 'Hello My Dear,let`s go！',//邮件主题
                        'to' => '930959695@qq.com',//邮件接收地址
                    ];
                    $message->subject($emailData['subject']);
                    $message->to($emailData['to']);
                });
        return $tag;
    }
}
