<?php

namespace Drupal\modeldessange\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * A very advanced custom layout.
 *
 * @Layout(
 *   id = "modeldessange_titre_prestations",
 *   label = @Translation(" modeldessange : titre prestations "),
 *   category = @Translation(" modeldessange "),
 *   path = "layouts/sections",
 *   template = "modeldessange-titre-prestations",
 *   library = "modeldessange/modeldessange-titre-prestations",
 *   default_region = "description",
 *   regions = {
 *     "title" = {
 *       "label" = @Translation("Title")
 *     },
 *     "desc" = {
 *       "label" = @Translation("Desc")
 *     },
 *     "prestations" = {
 *       "label" = @Translation("prestations")
 *     }
 *   }
 * )
 */
class ModeldessangeTitrePrestations extends FormatageModelsSection {

  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'modeldessange') . "/icones/sections/modeldessange-sd-hero-deux.png");
  }

  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::build()
   */
  public function build(array $regions) {
    // TODO Auto-generated method stub
    $build = parent::build($regions);
    FormatageModelsThemes::formatSettingValues($build);
    return $build;
  }

  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection::defaultConfiguration()
   */
  function defaultConfiguration() {
    //
    return [
      'load_libray' => true,
      'infos' => [
        'builder-form' => true,
        'info' => [
          'title' => 'Texte information',
          'loader' => 'static'
        ],
        'fields' => [
          'title' => [
            'text_html' => [
              'value' => 'COIFFEUR DESSANGE PARIS-SEBASTOPOL',
              'label' => ' Title '
            ]
          ],
          'prestations' => [
            'text_html' => [
              'value' => '',
              'label' => ' Bloc avis '
            ]
          ]
        ]
      ]
    ] + parent::defaultConfiguration();
  }

}