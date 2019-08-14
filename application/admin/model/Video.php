<?php

namespace app\admin\model;

use think\Model;
use traits\model\SoftDelete;

class Video extends Model
{

    use SoftDelete;

    

    // 表名
    protected $name = 'video';
    
    // 自动写入时间戳字段
    protected $autoWriteTimestamp = 'int';

    // 定义时间戳字段名
    protected $createTime = 'createtime';
    protected $updateTime = 'updatetime';
    protected $deleteTime = 'deletetime';

    // 追加属性
    protected $append = [
        'video_region_text',
        'video_type_text',
        'video_index_text',
        'refreshtime_text',
        'status_text'
    ];
    

    protected static function init()
    {
        self::afterInsert(function ($row) {
            $pk = $row->getPk();
            $row->getQuery()->where($pk, $row[$pk])->update(['weigh' => $row[$pk]]);
        });
    }

    
    public function getVideoRegionList()
    {
        return ['jp' => __('Video_region jp'), 'tw' => __('Video_region tw'), 'cn' => __('Video_region cn'), 'gb' => __('Video_region gb'), 'us' => __('Video_region us'), 'eu' => __('Video_region eu'), 'fr' => __('Video_region fr'), 'ca' => __('Video_region ca'), 'hk' => __('Video_region hk'), 'kr' => __('Video_region kr'), 'it' => __('Video_region it'), 'ru' => __('Video_region ru'), 'es' => __('Video_region es'), 'pl' => __('Video_region pl'), 'gr' => __('Video_region gr'), 'ie' => __('Video_region ie'), 'de' => __('Video_region de'), 'ar' => __('Video_region ar'), 'cz' => __('Video_region cz'), 'se' => __('Video_region se'), 'in' => __('Video_region in'), 'mx' => __('Video_region mx'), 'au' => __('Video_region au'), 'sg' => __('Video_region sg'), 'th' => __('Video_region th'), 'no' => __('Video_region no'), 'lu' => __('Video_region lu'), 'pe' => __('Video_region pe'), 'qt' => __('Video_region qt')];
    }

    public function getVideoTypeList()
    {
        return ['rx' => __('Video_type rx'), 'gd' => __('Video_type gd'), 'la' => __('Video_type la'), 'msn' => __('Video_type msn'), 'xy' => __('Video_type xy'), 'gx' => __('Video_type gx'), 'loli' => __('Video_type loli'), 'sm' => __('Video_type sm'), 'jz' => __('Video_type jz'), 'kh' => __('Video_type kh'), 'zr' => __('Video_type zr'), 'qc' => __('Video_type qc'), 'mf' => __('Video_type mf'), 'sh' => __('Video_type sh'), 'mx' => __('Video_type mx'), 'yd' => __('Video_type yd'), 'jj' => __('Video_type jj'), 'th' => __('Video_type th'), 'qz' => __('Video_type qz'), 'jy' => __('Video_type jy'), 'lz' => __('Video_type lz'), 'jq' => __('Video_type jq'), 'sh1' => __('Video_type sh1'), 'ls' => __('Video_type ls'), 'zz' => __('Video_type zz'), 'hg' => __('Video_type hg'), 'zy' => __('Video_type zy'), 'xxg' => __('Video_type xxg'), 'gw' => __('Video_type gw'), 'ts' => __('Video_type ts'), 'cw' => __('Video_type cw'), 'dz' => __('Video_type dz'), 'fz' => __('Video_type fz'), 'xy1' => __('Video_type xy1'), 'zc' => __('Video_type zc'), 'bh' => __('Video_type bh'), 'sn' => __('Video_type sn'), 'gz' => __('Video_type gz'), 'tl' => __('Video_type tl'), 'et' => __('Video_type et'), 'yz' => __('Video_type yz'), 'kb' => __('Video_type kb'), 'pmf' => __('Video_type pmf'), 'sz' => __('Video_type sz'), 'rz' => __('Video_type rz'), 'xj' => __('Video_type xj'), 'sh2' => __('Video_type sh2'), 'xz' => __('Video_type xz'), 'nxx' => __('Video_type nxx'), 'zn' => __('Video_type zn'), 'dm' => __('Video_type dm'), 'wx' => __('Video_type wx'), 'xh' => __('Video_type xh'), 'dp' => __('Video_type dp'), 'tr' => __('Video_type tr'), 'aq' => __('Video_type aq'), 'ms' => __('Video_type ms'), 'qq' => __('Video_type qq'), 'jt' => __('Video_type jt'), 'gt' => __('Video_type gt'), 'qg' => __('Video_type qg'), 'ox' => __('Video_type ox'), 'yc' => __('Video_type yc'), 'qt' => __('Video_type qt')];
    }

    public function getVideoIndexList()
    {
        return ['adm' => __('Video_index adm'), 'bdm' => __('Video_index bdm'), 'cdm' => __('Video_index cdm'), 'ddm' => __('Video_index ddm'), 'edm' => __('Video_index edm'), 'fdm' => __('Video_index fdm'), 'gdm' => __('Video_index gdm'), 'hdm' => __('Video_index hdm'), 'idm' => __('Video_index idm'), 'jdm' => __('Video_index jdm'), 'kdm' => __('Video_index kdm'), 'ldm' => __('Video_index ldm'), 'mdm' => __('Video_index mdm'), 'ndm' => __('Video_index ndm'), 'odm' => __('Video_index odm'), 'pdm' => __('Video_index pdm'), 'qdm' => __('Video_index qdm'), 'rdm' => __('Video_index rdm'), 'sdm' => __('Video_index sdm'), 'tdm' => __('Video_index tdm'), 'udm' => __('Video_index udm'), 'vdm' => __('Video_index vdm'), 'wdm' => __('Video_index wdm'), 'xdm' => __('Video_index xdm'), 'ydm' => __('Video_index ydm'), 'zdm' => __('Video_index zdm')];
    }

    public function getStatusList()
    {
        return ['show' => __('Status show'), 'hidden' => __('Status hidden')];
    }


    public function getVideoRegionTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['video_region']) ? $data['video_region'] : '');
        $valueArr = explode(',', $value);
        $list = $this->getVideoRegionList();
        return implode(',', array_intersect_key($list, array_flip($valueArr)));
    }


    public function getVideoTypeTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['video_type']) ? $data['video_type'] : '');
        $valueArr = explode(',', $value);
        $list = $this->getVideoTypeList();
        return implode(',', array_intersect_key($list, array_flip($valueArr)));
    }


    public function getVideoIndexTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['video_index']) ? $data['video_index'] : '');
        $list = $this->getVideoIndexList();
        return isset($list[$value]) ? $list[$value] : '';
    }


    public function getRefreshtimeTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['refreshtime']) ? $data['refreshtime'] : '');
        return is_numeric($value) ? date("Y-m-d H:i:s", $value) : $value;
    }


    public function getStatusTextAttr($value, $data)
    {
        $value = $value ? $value : (isset($data['status']) ? $data['status'] : '');
        $list = $this->getStatusList();
        return isset($list[$value]) ? $list[$value] : '';
    }

    protected function setVideoRegionAttr($value)
    {
        return is_array($value) ? implode(',', $value) : $value;
    }

    protected function setVideoTypeAttr($value)
    {
        return is_array($value) ? implode(',', $value) : $value;
    }

    protected function setRefreshtimeAttr($value)
    {
        return $value === '' ? null : ($value && !is_numeric($value) ? strtotime($value) : $value);
    }


}
