<?php

namespace Drupal\modeldessange\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * A very advanced custom layout.
 *
 * @Layout(
 *   id = "modeldessange_prestation_choice",
 *   label = @Translation(" modeldessange : pretation choix "),
 *   category = @Translation(" modeldessange "),
 *   path = "layouts/teasers",
 *   template = "modeldessange-prestation-choice",
 *   library = "modeldessange/modeldessange-prestation-choice",
 *   default_region = "description",
 *   regions = {
 *     "title" = {
 *       "label" = @Translation("Title")
 *     },
 *     "price" = {
 *       "label" = @Translation("price")
 *     },
 *     "desc" = {
 *       "label" = @Translation("desc")
 *     },
 *     "duree" = {
 *       "label" = @Translation("duree")
 *     },
 *     "url_rdv" = {
 *       "label" = @Translation("url_rdv")
 *     }
 *   }
 * )
 */
class ModeldessangePrestationChoice extends FormatageModelsTeasers {

  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'modeldessange') . "/icones/teasers/modeldessange-prestation-choice.png");
  }

}