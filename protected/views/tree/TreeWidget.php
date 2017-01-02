<?php

/**
 * Created by PhpStorm.
 * User: dmitrij
 * Date: 02.01.2017
 * Time: 11:48
 */


class TreeWidget extends CWidget
{

    public $tree;
    public function run()
    {
        echo $this->_outputNode(current($this->tree));
    }

    private function _outputNode($node)
    {
        $liElements ='';
        foreach($node['items'] as $item)
        {
            $liElements .= CHtml::tag('li',[], CHtml::tag('div',[],
                CHtml::link($item['item']->name,['tree/view&id='.$item['item']->id]).'      '
                .CHtml::link('add', ['tree/create','parent_id' => $item['item']->id],['class' => 'create'])
                .CHtml::link(Chtml::image('assets/1117ecb1/gridview/view.png'),
                    ['tree/view&id='.$item['item']->id],['class' => 'view', 'title' => 'View'])
                .CHtml::link(Chtml::image('assets/1117ecb1/gridview/update.png'),
                    ['tree/update&id='.$item['item']->id],['class' => 'update', 'title' => 'Update'])
//                .CHtml::link(Chtml::image('/test/assets/1117ecb1/gridview/delete.png'),
//                    ['tree/delete&id='.$item['item']->id],[
//                        'class' => 'delete',
//                        'title' => 'Delete',
//                        ])
                .CHtml::ajaxSubmitButton('delete',
                    [
                        'delete',
                        'id' => $item['item']->id,
                        //'ajax' => 'delete',
                        'returnUrl' => 'admin_tree'
                    ],
                    ['success' => 'js:function(data, textStatus, XMLHttpRequest){location.reload(); console.log("reload")}'])
                )
            );

            if (isset($item['items']))
                $liElements .= $this->_outputNode($item);
        }

        return CHtml::tag('ul',[],$liElements);
    }
}