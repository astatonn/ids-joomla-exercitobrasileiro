<?php
defined('_JEXEC') or die;

use Joomla\CMS\Helper\ModuleHelper;

// Obtém os parâmetros do módulo
$params = json_decode(ModuleHelper::getModule('mod_links')->params, true);

$linkAmount = $params['link-amount'];

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


    <div class="links-container">
        <?php for ($i = 1; $i <= $linkAmount ; $i++) : ?>
            <div class="link-col">
                <a href="<?php echo $params['url-link-' . $i]; ?>" target="_blank" class="link-link">
                    <div class="link-card br-card">
                        <div class="link-content">
                            <h5 class="link-title"><?php echo $params['name-link-' . $i]; ?></h5>
                        </div>
                    </div>
                </a>
            </div>
        <?php endfor; ?>
    </div>


</div>