<?php
defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;

// Obtém os parâmetros do módulo
$params = json_decode(ModuleHelper::getModule('mod_links')->params, true);


?>
<div class="container">
    <!-- HEADER  -->

    <div class="autofit-float autofit-row portlet-header">
        <div class="autofit-col autofit-col-expand">
            <div class="portlet-title-text">
                <?php echo $params['section-name']; ?>
            </div>
        </div>
    </div>

    <div class="links-body">
        <div class="row d-flex justify-content-center">
            <div class="col-md-3 pb-4">
                <a href="#" target="_blank" class="card h-100 m-0 card-intercative card-interactive-primary card-template template-card">
                    <div class="text-center pb-5 card-content">
                        <h5 class="card-text px-3 pb-0">Teste</h5>
                    </div>
                </a>
            </div>
        </div>

    </div>


    <div class="row mx-auto px-3">
        <div class="col-md">
            <div class="br-card hover">
                <a href="#" target="_blank">
                    <div class="card-content d-flex flex-column justify-content-center align-items-center">
                        <h5 class="card-text px-3 pb-0">Teste</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md">
            <div class="br-card hover">
                <a href="#" target="_blank">
                    <div class="card-content d-flex flex-column justify-content-center align-items-center">
                        <h5 class="card-text px-3 pb-0">Teste</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md">
            <div class="br-card hover">
                <a href="#" target="_blank">
                    <div class="card-content d-flex flex-column justify-content-center align-items-center">
                        <h5 class="card-text px-3 pb-0">Teste</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md">
            <div class="br-card hover">
                <a href="#" target="_blank">
                    <div class="card-content d-flex flex-column justify-content-center align-items-center">
                        <h5 class="card-text px-3 pb-0">Teste</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md">
            <div class="br-card hover">
                <a href="#" target="_blank">
                    <div class="card-content d-flex flex-column justify-content-center align-items-center">
                        <h5 class="card-text px-3 pb-0">Teste</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-md">
            <div class="br-card hover">
                <a href="#" target="_blank">
                    <div class="card-content d-flex flex-column justify-content-center align-items-center">
                        <h5 class="card-text px-3 pb-0">Teste</h5>
                    </div>
                </a>
            </div>
        </div>

    </div>



</div>