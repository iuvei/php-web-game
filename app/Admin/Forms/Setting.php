<?php

namespace App\Admin\Forms;

use App\Models\Lottery;
use Dcat\Admin\Widgets\Form;

class Setting extends Form
{
    /**
     * Handle the form request.
     *
     * @param array $input
     *
     * @return mixed
     */
    public function handle(array $input)
    {
        // dump($input);

        // return $this->response()->error('Your error message.');

        return $this
            ->response()
            ->success('Processed successfully.')
            ->refresh();
    }

    /**
     * Build a form here.
     */
    public function form()
    {
        $this->tab('基本配置', function () {
            $this->select('maintain', '网站维护')->options([1 => '开启', 2 => '关闭'])->default(2)->required();
            $this->editor('maintain_tips', '维护提示')->required();
            $this->text('service', '客服地址')->required()->rules('url');
            $this->text('cdn', 'CDN域名')->required()->rules('url');
        });
        $this->tab('直播配置', function () {
            $this->select('speak_limit', '发言等级限制')->default(2)->required();
            $this->editor('user_list_time', '列表请求')->help('用户列表请求间隔(秒)')->required();
            $this->text('chatserver', '聊天服务器带端口')->required()->rules('url');
            $this->text('live_notice', '聊天公告')->required();
            $this->multipleSelect('live_game', '录播彩种')->options(Lottery::Status()->get()->pluck('title', 'id'))->required();
        });


        $this->tab('视频配置', function () {
            $this->text('free_look_limit', '每日免费观影次数')->required();
        });

        $this->tab('三方游戏配置', function () {
            $this->text('agent_domain', '域名')->required();
            $this->text('agent_account', '代理账号')->required();
            $this->text('agent_key', '密钥')->required();
            $this->text('agent_money', '转入最小金额')->default(0)->required();
        });

        $this->tab('App管理', function () {
            $this->select('is_update', '强制更新')->options([1 => '开启', 2 => '关闭'])->default(2)->required();
            $this->text('web_download', '安卓|苹果下载页')->required();
            $this->text('versions', '安卓|苹果版本号')->required();
            $this->text('download', '安卓|苹果下载链接')->required();
            $this->text('apk_desc', '安卓|苹果更新说明')->required();
            $this->text('share', '安卓|苹果分享链接')->required();
            $this->select('is_notice', '公告')->options([1 => '开启', 2 => '关闭'])->default(1)->required();
            $this->editor('notice', '公告内容')->required();
        });
        $this->tab('短信配置', function () {
            $this->select('is_ip', '验证码IP限制')->options([1 => '开启', 2 => '关闭'])->default(1)->required();
            $this->text('limit_ip', '验证码IP限制次数')->default(5)->help('同一IP每天可以发送验证码的最大次数')->required();
            $this->select('operator', '运营商')->options([1 => '腾讯'])->default(1)->when(1, function (Form $form) {
                $this->text('SecretId', 'SecretId')->help('个人信息，访问管理，访问秘钥，API秘钥管理')->required();
                $this->text('SecretKey', 'SecretKey')->help('个人信息，访问管理，访问秘钥，API秘钥管理')->required();
                $this->text('SmsSdkAppId', 'SmsSdkAppId')->help('短信 SdkAppId，在 短信控制台 添加应用后生成的实际 SdkAppId，示例如1400006666。')->required();
                $this->text('TemplateId', 'TemplateId')->help('模板 ID，必须填写已审核通过的模板 ID。模板 ID 可登录 短信控制台 查看，若向境外手机号发送短信，仅支持使用国际/港澳台短信模板。')->required();
                $this->text('SignName', 'SignName')->help('短信签名内容，使用 UTF-8 编码，必须填写已审核通过的签名，例如：腾讯云，签名信息可登录 短信控制台 查看。 注：国内短信为必填参数。')->required();
                $this->text('TemplateParamSet', 'SignName')->help('短信签名内容，使用 UTF-8 编码，必须填写已审核通过的签名，例如：腾讯云，签名信息可登录 短信控制台 查看。 注：国内短信为必填参数。')->required();
            });
        });

        $this->tab('直播助手', function () {
            $this->select('zb_is_update', '强制更新')->options([1 => '开启', 2 => '关闭'])->default(2)->required();
            $this->text('zb_web_download', '安卓|苹果下载页')->required();
            $this->text('zb_versions', '安卓|苹果版本号')->required();
            $this->text('zb_download', '安卓|苹果下载链接')->required();
            $this->text('zb_apk_desc', '安卓|苹果更新说明')->required();
            $this->text('zb_share', '安卓|苹果分享链接')->required();
            $this->select('zb_is_notice', '公告')->options([1 => '开启', 2 => '关闭'])->default(1)->required();
            $this->editor('zb_notice', '公告内容')->required();
        });
        $this->tab('统计配置', function () {
            $this->text('ym_apiKey', '友盟OpenApi-apiKey')->required();
            $this->text('ym_apiSecurity', '友盟OpenApi-apiSecurity')->required();
            $this->text('apk_appkey', 'Android应用-appkey')->required();
            $this->text('ipa_appkey', '友盟IOS应用-appkey')->required();
        });
        $this->tab('社区管理', function () {
            $this->text('telegram', '电报')->required();
            $this->text('Potato', '土豆')->required();
        });
        $this->tab('代理加盟', function () {
            $this->text('qq', 'QQ')->required();
            $this->text('wechat', '微信')->required();
            $this->text('agent_telegram', 'Telegram')->required();
        });


    }

    /**
     * The data of the form.
     *
     * @return array
     */
    public function default()
    {
        return [
            'name' => 'John Doe',
            'email' => 'John.Doe@gmail.com',
        ];
    }
}
