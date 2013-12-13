<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo Yii::app()->language; ?>" lang="<?php echo Yii::app()->language; ?>">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=<?php echo Yii::app()->charset; ?>" />
  <meta name="language" content="<?php echo Yii::app()->language; ?>" />

  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.min.css" rel="stylesheet" media="screen" />
  <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen" />
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
          <![endif]-->

          <?php
          $cs = Yii::app()->clientScript;
        // cargar siempre
          $cs->registerCoreScript('jquery');
          ?> 
          <script src="<?php echo Yii::app()->baseUrl; ?>/assets/custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
          <link rel="stylesheet" type="text/css" href=" <?php echo Yii::app()->baseUrl;?>/assets/custom-scrollbar-plugin/jquery.mCustomScrollbar.css ">
          <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.js"></script>
          <script src="<?php echo Yii::app()->baseUrl; ?>/assets/twitter-bootstrap/js/bootstrap-tooltip.js" type="text/javascript"></script>
          <script src="<?php echo Yii::app()->baseUrl; ?>/assets/twitter-bootstrap/js/bootstrap-popover.js" type="text/javascript"></script>
          <script src="<?php echo Yii::app()->baseUrl; ?>/assets/js/keyPressValidator.js" type="text/javascript"></script>
          <!-- JqueryUI -->
          <script src="<?php echo Yii::app()->baseUrl; ?>/assets/jqueryui/js/jquery-ui.js" type="text/javascript" charset="utf-8"></script>
          <script src="<?php echo Yii::app()->baseUrl; ?>/assets/jqueryui/js/jquery.ui.datepicker-es.js" type="text/javascript" charset="utf-8"></script>
          <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->baseUrl; ?>/assets/jqueryui/themes/base/jquery.ui.all.css" />
          <!-- fin JqueryUI -->
          <script>
          $(function (){ 
            $('.tooltip-demo').tooltip({
              selector: "a[data-toggle=tooltip]"
            })
            $(".ttp").tooltip();
            $("#ttp").mouseover(function(){
              $("#ttp").popover({
                animation:true,
                trigger:'hover'
              },'show');
            });
            $(".soloNumeros").keyValue(/[0-9]/); //permitir sólo numeros campo
          });
          </script>
          <script>
          $(function() {
            $( document ).tooltip();
          });
          </script>
          <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/assets/jqueryValidate/js/jquery.validate.min.js"></script>
          <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/assets/js/bootbox.js"></script>
          <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/assets/Select2/js/select2.js"></script>
          <link rel="stylesheet" type="text/css" media="screen" href="<?php echo Yii::app()->baseUrl; ?>/assets/Select2/css/select2.css">
          <!-- bootstrap form helper -->
          <script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/assets/bootstrapHelpers/js/bootstrap-formhelpers-selectbox.js"></script>
          <link href="<?php echo Yii::app()->baseUrl; ?>/assets/bootstrapHelpers/css/bootstrap-formhelpers.css" rel="stylesheet">
          <link href="<?php echo Yii::app()->baseUrl; ?>/assets/bootstrapHelpers/css/bootstrap-formhelpers-countries.flags.css" rel="stylesheet">
          <link href="<?php echo Yii::app()->baseUrl; ?>/assets/bootstrapHelpers/css/bootstrap-formhelpers-currencies.flags.css" rel="stylesheet">
          <!-- fin bootstrap form helper -->

          <!-- custom -->
          <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/custom.css" rel="stylesheet" media="screen" />
        </head>

        <body>
          <noscript>
            <div class="alert alert-error">Su navegador no tiene habilitado javascript o no lo soporta. Para que este sitio funcione correctamente, por favor actualice su navegador.</div>
            <META HTTP-EQUIV="Refresh" CONTENT="3;URL=http://centronacionaldeconsultoria.com/"></META>
          </noscript>
          <div class="navbar">
            <div class="navbar-inner">
              <div class="container">
                <div class="nav-collapse collapse">
                  <?php
                  echo Chtml::link(Yii::app()->name, array('/site/index'), array(
                    'id' => 'ttp',
                    'class' => 'brand',
                    'title' => Yii::app()->name,
                            // 'data-content' => Yii::app()->params['nombreEncuesta'],
                    'data-placement' => 'bottom',
                    )
                  );
                  ?>
                  <ul class="nav pull-right">
                    <?php if (Yii::app()->user->checkAccess("Admin2")): ?>
                    <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">Reportes<b class="caret"></b></a>
                      <?php
                      $this->widget('zii.widgets.CMenu', array(
                        'items' => array(
                          array('label' => 'Control de muestra', 'url' => array('/respuesta/controlmuestra')),
                          ),
                        'htmlOptions' => array('class' => 'dropdown-menu'),
                        ));
                        ?>  
                      </li>
                    <?php endif ?>
                    <?php if (Yii::app()->user->checkAccess("Admin1")): ?>
                    <li>
                      <?php
                      $this->widget('zii.widgets.CMenu', array(
                        'items' => array(
                          array('label' => 'Contactos', 'url' => array('/contacto/index')),
                          ),
                        'htmlOptions' => array('class' => 'nav'),
                        ));
                        ?>  
                      </li>
                      <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Administrar permisos <b class="caret"></b></a>
                        <?php
                        $this->widget('zii.widgets.CMenu', array(
                          'items' => array(
                            array('label' => 'Usuarios', 'url' => array('/user/index')),
                            array('label' => 'Items de Autorización', 'url' => array('/authitem/index')),
                            array('label' => 'Jerarquía de Ítems', 'url' => array('/authitemchild/index')),
                            array('label' => 'Asignacion de permisos', 'url' => array('/authassignment/index')),
                            ),
                          'htmlOptions' => array('class' => 'dropdown-menu')
                          )
                        );
                        ?>  
                      </li>
                    <?php endif ?>
                    <li class="divider-vertical"></li>
                    <li>
                      <?php
                      $this->widget('zii.widgets.CMenu', array(
                        'items' => array(
                          array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                          array('label' => 'Salir (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                          ),
                        'htmlOptions' => array('class' => 'nav'),
                        )
                      );
                      ?>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <header id="overview" class="subhead" style="vertical-aling: middle;">
            <div class="container">
              <div class="row-fluid">
                <img src="<?php echo Yii::app()->baseUrl; ?>/images/logo_cnc2009a.gif" />
                <img src="<?php echo Yii::app()->baseUrl; ?>/images/logo_promigas_new.png" class="pull-right"/>
              </div>
            </div>
          </header>
          <div class="container">

            <?php if (isset($this->breadcrumbs)): ?>
            <?php
            $this->widget('zii.widgets.CBreadcrumbs', array(
              'links' => $this->breadcrumbs,
              'tagName' => 'ul',
              'htmlOptions' => array('class' => 'breadcrumb')
//                                'separator' => '',
              ));
              ?><!-- breadcrumbs -->
            <?php endif ?>

            <?php echo $content; ?>

            <hr/>
            <div class="row-fluid">
              <div id="footer">
                Copyright &copy; 2013 de Centro Nacional de Consultoria.<br/>
                Todos los derechos reservados.<br/>
                <a rel="external" target="blank" href="http://centronacionaldeconsultoria.com/"><img src="<?php echo Yii::app()->baseUrl; ?>/images/logo_cnc2009a.gif" style="width: 200px;"/></a>
              </div><!-- footer -->
            </div>

          </div><!-- page -->
        </body>
        </html>
