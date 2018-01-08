<?php

namespace App\Http\Controllers\Api;
use Illuminate\Mail\Mailer;
use App\Http\Controllers\Controller;
use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    private $mailer;

    public function __construct(Mailer $mailer)
    {
        $this->mailer = $mailer;
    }
    /**
     * 发送邮件
     */
    public function send(Request $request){
        $emailData = $request->toArray();
        $type = $request->input('type');
        $viewData = ['title' => '你若盛开，清风自来','author' => '木心'];
        if ($type == 'text'){
            $tag = $this->sendText($emailData);
        }else{
            $tag = $this->sendHtml('home.index.mail',$viewData,$emailData);
        }
        //TODO  $tag 判断发送是否成功，进行后续代码开发
        return showMsg($tag,'发送成功');
    }

    /**
     * 测试邮件发送案例
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function testSend(){
        $viewData = ['title' => '你若盛开，清风自来','author' => '木心'];
        $emailData = [
            'content' => '从前的日色变得慢 车 马 邮件 都慢',
            'subject' => '这是邮件主题，希望您能支持！',//邮件主题
            'addr' => '930959695@qq.com',//邮件接收地址
        ];
        //$tag = $this->sendText($emailData);
        //$tag = $this->sendHtml('mail',$viewData,$emailData);
        return view('mail',['title' => '你若盛开，清风自来','author' => '木心']);
    }

    /**
     * 发送纯文本 邮件
     * @param $emailData 邮件数据
     */
    public function sendText($emailData){
        //此处为文本内容
        $tag = $this->mailer
            ->raw($emailData['content'],
                function ($message)use ($emailData){
                    $message->subject($emailData['subject']);
                    $message->to($emailData['addr']);
                });
        return $tag;
    }

    /**
     * 发送自定义网页
     * @param $emailData 邮件数据
     * @param $viewPage html视图
     * @param $viewData html传输数据
     */
    public function sendHtml($viewPage,$viewData,$emailData){
        $tag = $this->mailer
            ->send($viewPage,$viewData,
                function ($message) use ($emailData){
                    $message->subject($emailData['subject']);
                    $message->to($emailData['addr']);
                });
        return $tag;
    }
}
