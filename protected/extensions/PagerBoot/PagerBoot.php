<?php

Yii::import('system.web.widgets.pagers.CLinkPager');

/**
 * Cambiar estilo de la paginación
 */
class PagerBoot extends CLinkPager {

    const CSS_FIRST_PAGE = 'first';
    const CSS_LAST_PAGE = 'last';
    const CSS_PREVIOUS_PAGE = 'previous';
    const CSS_NEXT_PAGE = 'next';
    const CSS_INTERNAL_PAGE = 'page';
    const CSS_HIDDEN_PAGE = 'disabled';
    const CSS_SELECTED_PAGE = 'active';

    /**
     * Initializes the pager by setting some default property values.
     */
    public function init() {
        if ($this->nextPageLabel === null)
            $this->nextPageLabel = Yii::t('yii', '&gt;');
        if ($this->prevPageLabel === null)
            $this->prevPageLabel = Yii::t('yii', '&lt;');
        if ($this->firstPageLabel === null)
            $this->firstPageLabel = Yii::t('yii', '&lt;&lt;');
        if ($this->lastPageLabel === null)
            $this->lastPageLabel = Yii::t('yii', '&gt;&gt;');
        if ($this->header === null)
            $this->header = Yii::t('yii', '');
        if (!isset($this->htmlOptions['id']))
            $this->htmlOptions['id'] = $this->getId();
        if (!isset($this->htmlOptions['class']))
            $this->htmlOptions['class'] = '';
    }

    /**
     * Executes the widget.
     * This overrides the parent implementation by displaying the generated page buttons.
     */
    public function run() {
        $this->registerClientScript();
        $buttons = $this->createPageButtons();
        if (empty($buttons))
            return;
        echo $this->header;
        echo CHtml::tag('div', array('class'=>'pagination pagination-right'));
        echo CHtml::tag('ul', $this->htmlOptions, implode("\n", $buttons));
        echo $this->footer;
    }

}

?>
