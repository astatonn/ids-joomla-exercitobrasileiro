<?php

/**
 * @package     Joomla.Site
 * @subpackage  mod_articles_news
 *
 * @copyright   (C) 2006 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Layout\LayoutHelper;
use Joomla\Module\ArticlesNews\Site\Helper\ArticlesNewsHelper;

if (!$list) {
    return;
}

$colunas = "col-md-4";
if (count($list) < 5) :
    if (count($list) % 2 == 0) :
        $colunas = "col-md-6";
    endif;
endif;


?>
<div class="container">
    <div class="autofit-float autofit-row portlet-header">
        <div class="autofit-col autofit-col-expand">
            <div class="portlet-title-text">
                Últimas Notícias
            </div>
        </div>
    </div>
    <div class="links-container">
        <?php foreach ($list as $item) : ?>
            <?php if (!empty($item->imageSrc)) : ?>

                <div class="link-col br-center-articles <?php echo $colunas; ?>">
                    <div class="newsflash-container">
                        <a href="<?php echo $item->link; ?>" title="<?php echo $item->title; ?>">
                            <?php

                            echo LayoutHelper::render(
                                'joomla.html.image',
                                [
                                    'src' => $item->imageSrc,
                                    'alt' => $item->imageAlt,
                                ]
                            ); ?>

                            </figure>
                        </a>

                        <div class="text-overlay">
                            <h2 class="newsflash-title">
                                <a href="<?php echo $item->link; ?>">
                                    <?php echo $item->title; ?>
                                </a>
                            </h2>
                            <p><?php echo $item->introtext; ?></p>
                        </div>

                    </div>
                </div>

            <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>