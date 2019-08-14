define(['jquery', 'bootstrap', 'backend', 'table', 'form'], function ($, undefined, Backend, Table, Form) {

    var Controller = {
        index: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    index_url: 'video/index' + location.search,
                    add_url: 'video/add',
                    edit_url: 'video/edit',
                    del_url: 'video/del',
                    multi_url: 'video/multi',
                    table: 'video',
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: $.fn.bootstrapTable.defaults.extend.index_url,
                pk: 'video_id',
                sortName: 'weigh',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'video_id', title: __('Video_id')},
                        {field: 'video_name', title: __('Video_name')},
                        {field: 'video_aliasname', title: __('Video_aliasname')},
                        {field: 'video_updateinfo', title: __('Video_updateinfo')},
                        {field: 'video_region', title: __('Video_region'), searchList: {"jp":__('Video_region jp'),"tw":__('Video_region tw'),"cn":__('Video_region cn'),"gb":__('Video_region gb'),"us":__('Video_region us'),"eu":__('Video_region eu'),"fr":__('Video_region fr'),"ca":__('Video_region ca'),"hk":__('Video_region hk'),"kr":__('Video_region kr'),"it":__('Video_region it'),"ru":__('Video_region ru'),"es":__('Video_region es'),"pl":__('Video_region pl'),"gr":__('Video_region gr'),"ie":__('Video_region ie'),"de":__('Video_region de'),"ar":__('Video_region ar'),"cz":__('Video_region cz'),"se":__('Video_region se'),"in":__('Video_region in'),"mx":__('Video_region mx'),"au":__('Video_region au'),"sg":__('Video_region sg'),"th":__('Video_region th'),"no":__('Video_region no'),"lu":__('Video_region lu'),"pe":__('Video_region pe'),"qt":__('Video_region qt')}, operate:'FIND_IN_SET', formatter: Table.api.formatter.label},
                        {field: 'video_type', title: __('Video_type'), searchList: {"rx":__('Video_type rx'),"gd":__('Video_type gd'),"la":__('Video_type la'),"msn":__('Video_type msn'),"xy":__('Video_type xy'),"gx":__('Video_type gx'),"loli":__('Video_type loli'),"sm":__('Video_type sm'),"jz":__('Video_type jz'),"kh":__('Video_type kh'),"zr":__('Video_type zr'),"qc":__('Video_type qc'),"mf":__('Video_type mf'),"sh":__('Video_type sh'),"mx":__('Video_type mx'),"yd":__('Video_type yd'),"jj":__('Video_type jj'),"th":__('Video_type th'),"qz":__('Video_type qz'),"jy":__('Video_type jy'),"lz":__('Video_type lz'),"jq":__('Video_type jq'),"sh1":__('Video_type sh1'),"ls":__('Video_type ls'),"zz":__('Video_type zz'),"hg":__('Video_type hg'),"zy":__('Video_type zy'),"xxg":__('Video_type xxg'),"gw":__('Video_type gw'),"ts":__('Video_type ts'),"cw":__('Video_type cw'),"dz":__('Video_type dz'),"fz":__('Video_type fz'),"xy1":__('Video_type xy1'),"zc":__('Video_type zc'),"bh":__('Video_type bh'),"sn":__('Video_type sn'),"gz":__('Video_type gz'),"tl":__('Video_type tl'),"et":__('Video_type et'),"yz":__('Video_type yz'),"kb":__('Video_type kb'),"pmf":__('Video_type pmf'),"sz":__('Video_type sz'),"rz":__('Video_type rz'),"xj":__('Video_type xj'),"sh2":__('Video_type sh2'),"xz":__('Video_type xz'),"nxx":__('Video_type nxx'),"zn":__('Video_type zn'),"dm":__('Video_type dm'),"wx":__('Video_type wx'),"xh":__('Video_type xh'),"dp":__('Video_type dp'),"tr":__('Video_type tr'),"aq":__('Video_type aq'),"ms":__('Video_type ms'),"qq":__('Video_type qq'),"jt":__('Video_type jt'),"gt":__('Video_type gt'),"qg":__('Video_type qg'),"ox":__('Video_type ox'),"yc":__('Video_type yc'),"qt":__('Video_type qt')}, operate:'FIND_IN_SET', formatter: Table.api.formatter.label},
                        {field: 'video_years', title: __('Video_years')},
                        {field: 'video_tag', title: __('Video_tag')},
                        {field: 'video_index', title: __('Video_index'), searchList: {"adm":__('Video_index adm'),"bdm":__('Video_index bdm'),"cdm":__('Video_index cdm'),"ddm":__('Video_index ddm'),"edm":__('Video_index edm'),"fdm":__('Video_index fdm'),"gdm":__('Video_index gdm'),"hdm":__('Video_index hdm'),"idm":__('Video_index idm'),"jdm":__('Video_index jdm'),"kdm":__('Video_index kdm'),"ldm":__('Video_index ldm'),"mdm":__('Video_index mdm'),"ndm":__('Video_index ndm'),"odm":__('Video_index odm'),"pdm":__('Video_index pdm'),"qdm":__('Video_index qdm'),"rdm":__('Video_index rdm'),"sdm":__('Video_index sdm'),"tdm":__('Video_index tdm'),"udm":__('Video_index udm'),"vdm":__('Video_index vdm'),"wdm":__('Video_index wdm'),"xdm":__('Video_index xdm'),"ydm":__('Video_index ydm'),"zdm":__('Video_index zdm')}, formatter: Table.api.formatter.normal},
                        {field: 'video_detailurl', title: __('Video_detailurl'), formatter: Table.api.formatter.url},
                        {field: 'video_episodeurl', title: __('Video_episodeurl'), formatter: Table.api.formatter.url},
                        {field: 'video_image', title: __('Video_image'), events: Table.api.events.image, formatter: Table.api.formatter.image},
                        {field: 'video_switch', title: __('Video_switch'), formatter: Table.api.formatter.toggle},
                        {field: 'weigh', title: __('Weigh')},
                        {field: 'createtime', title: __('Createtime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'updatetime', title: __('Updatetime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'refreshtime', title: __('Refreshtime'), operate:'RANGE', addclass:'datetimerange', formatter: Table.api.formatter.datetime},
                        {field: 'status', title: __('Status'), searchList: {"show":__('Status show'),"hidden":__('Status hidden')}, formatter: Table.api.formatter.status},
                        {field: 'operate', title: __('Operate'), table: table, events: Table.api.events.operate, formatter: Table.api.formatter.operate}
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        recyclebin: function () {
            // 初始化表格参数配置
            Table.api.init({
                extend: {
                    'dragsort_url': ''
                }
            });

            var table = $("#table");

            // 初始化表格
            table.bootstrapTable({
                url: 'video/recyclebin' + location.search,
                pk: 'id',
                sortName: 'id',
                columns: [
                    [
                        {checkbox: true},
                        {field: 'id', title: __('Id')},
                        {
                            field: 'deletetime',
                            title: __('Deletetime'),
                            operate: 'RANGE',
                            addclass: 'datetimerange',
                            formatter: Table.api.formatter.datetime
                        },
                        {
                            field: 'operate',
                            width: '130px',
                            title: __('Operate'),
                            table: table,
                            events: Table.api.events.operate,
                            buttons: [
                                {
                                    name: 'Restore',
                                    text: __('Restore'),
                                    classname: 'btn btn-xs btn-info btn-ajax btn-restoreit',
                                    icon: 'fa fa-rotate-left',
                                    url: 'video/restore',
                                    refresh: true
                                },
                                {
                                    name: 'Destroy',
                                    text: __('Destroy'),
                                    classname: 'btn btn-xs btn-danger btn-ajax btn-destroyit',
                                    icon: 'fa fa-times',
                                    url: 'video/destroy',
                                    refresh: true
                                }
                            ],
                            formatter: Table.api.formatter.operate
                        }
                    ]
                ]
            });

            // 为表格绑定事件
            Table.api.bindevent(table);
        },
        add: function () {
            Controller.api.bindevent();
        },
        edit: function () {
            Controller.api.bindevent();
        },
        api: {
            bindevent: function () {
                Form.api.bindevent($("form[role=form]"));
            }
        }
    };
    return Controller;
});