<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
Yii::import('system.web.helpers.CHtml');

class JCHtml extends CHtml {

    public static function radioButtonList($name, $select, $data, $htmlOptions = array()) {
        $template = isset($htmlOptions['template']) ? $htmlOptions['template'] : '{input} {label}';
        $separator = isset($htmlOptions['separator']) ? $htmlOptions['separator'] : "";
        $container = isset($htmlOptions['container']) ? $htmlOptions['container'] : NULL; //linea sobreescrita
        unset($htmlOptions['template'], $htmlOptions['separator'], $htmlOptions['container']);

        $labelOptions = isset($htmlOptions['labelOptions']) ? $htmlOptions['labelOptions'] : array();
        unset($htmlOptions['labelOptions']);

        $items = array();
        $baseID = isset($htmlOptions['baseID']) ? $htmlOptions['baseID'] : self::getIdByName($name);
        unset($htmlOptions['baseID']);
        $id = 0;
        foreach ($data as $value => $label) {
            $checked = !strcmp($value, $select);
            $htmlOptions['value'] = $value;
            $htmlOptions['id'] = $baseID . '_' . $id++;
            $option = self::radioButton($name, $checked, $htmlOptions);
            $label = self::label($label, $htmlOptions['id'], $labelOptions);
            $items[] = strtr($template, array('{input}' => $option, '{label}' => $label));
        }
//        if (empty($container))
            return implode($separator, $items);
//        else
//            return self::tag($container, array('id' => $baseID), implode($separator, $items));
    }

    public static function tag($tag, $htmlOptions = array(), $content = false, $closeTag = true) {
        $html = '<' . $tag . self::renderAttributes($htmlOptions);
        if ($content === false)
            return $closeTag && self::$closeSingleTags ? $html . ' />' : $html . '>';
        else
            return $closeTag ? $html . '>' . $content . '</' . $tag . '>' : $html . '>' . $content;
    }

    public static function activeRadioButtonList($model, $attribute, $data, $htmlOptions = array()) {
        self::resolveNameID($model, $attribute, $htmlOptions);
        $selection = self::resolveValue($model, $attribute);
        if ($model->hasErrors($attribute))
            self::addErrorCss($htmlOptions);
        $name = $htmlOptions['name'];
        unset($htmlOptions['name']);

        if (array_key_exists('uncheckValue', $htmlOptions)) {
            $uncheck = $htmlOptions['uncheckValue'];
            unset($htmlOptions['uncheckValue']);
        }
        else
            $uncheck = '';

        $hiddenOptions = isset($htmlOptions['id']) ? array('id' => self::ID_PREFIX . $htmlOptions['id']) : array('id' => false);
        $hidden = $uncheck !== null ? self::hiddenField($name, $uncheck, $hiddenOptions) : '';

        return $hidden . self::radioButtonList($name, $selection, $data, $htmlOptions);
    }

}

?>
