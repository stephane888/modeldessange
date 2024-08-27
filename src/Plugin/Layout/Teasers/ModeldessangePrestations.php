<?php

namespace Drupal\modeldessange\Plugin\Layout\Teasers;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\Plugin\Layout\Teasers\FormatageModelsTeasers;

/**
 * A very advanced custom layout.
 *
 * @Layout(
 *   id = "modeldessange_prestations",
 *   label = @Translation(" modeldessange : pretation "),
 *   category = @Translation(" modeldessange "),
 *   path = "layouts/teasers",
 *   template = "modeldessange-prestations",
 *   library = "modeldessange/modeldessange-prestations",
 *   default_region = "description",
 *   regions = {
 *     "title" = {
 *       "label" = @Translation("Title")
 *     },
 *     "body" = {
 *       "label" = @Translation("Body")
 *     },
 *     "price" = {
 *       "label" = @Translation("Price")
 *     }
 *   }
 * )
 */
class ModeldessangePrestations extends FormatageModelsTeasers {

  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'modeldessange') . "/icones/teasers/modeldessange-prestations.png");
  }

}