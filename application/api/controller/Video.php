<?php
namespace app\api\controller;

use app\common\controller\Api;
use think\Db;

/**
 * 视频接口
 */
class Video extends Api
{
    protected $noNeedLogin = ['search'];
    protected $noNeedRight = '*';

    public function _initialize()
    {
        parent::_initialize();
    }

    /**
     * 视频列表
     * 
     * @param string $keyword 关键字
     */
    public function search(){
        $keyword = $this->request->request('keyword');
        $result = Db::query('select * from fa_videotest where videoname like ?',['%'.$keyword.'%']);
        $this->success(__('Logged in successful'), $result);
    }
}