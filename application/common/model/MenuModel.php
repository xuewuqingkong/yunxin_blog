<?php
//+--------------------------------------------------
//Author：Snow  main@glping.net
//Date:2020/3/8
//+--------------------------------------------------
//.--,       .--,
// ( (  \.---./  ) )
//  '.__/o   o\__.'
//     {=  ^  =}
//      >  -  <
//     /       \
//    //       \\
//   //|   .   |\\
//   "'\       /'"_.-~^`'-.
//      \  _  /--'         `
//    ___)( )(___
//   (((__) (__)))    高山仰止,景行行止.虽不能至,心向往之。
//+--------------------------------------------------

    namespace app\common\model;

    use think\Model;


    /*
     * 菜单
     * */
    class MenuModel extends Model
    {
        protected $name = 'menu';

        protected $pk = 'menu_id';


        /*
         * 菜单
         * @param string $type 类型
         * @param array $where 查询条件
         * @param string $field 字段
         * @param string $order 排序
         * */
        public static function lists($type = 'index', $where = [], $field = '*', $order = ''){

            $action = $type=='index'? 'select' : 'paginate';

            return self::where($where)->field($field)->order($order)->$action();
        }



    }