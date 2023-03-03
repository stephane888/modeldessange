<?php

namespace Drupal\modeldessange\Plugin\Layout\Sections;

use Drupal\bootstrap_styles\StylesGroup\StylesGroupManager;
use Drupal\formatage_models\FormatageModelsThemes;
use Drupal\formatage_models\Plugin\Layout\Sections\FormatageModelsSection;

/**
 * A very advanced custom layout.
 *
 * @Layout(
 *   id = "modeldessange_salon_infos",
 *   label = @Translation(" modeldessange : salon_infos "),
 *   category = @Translation(" modeldessange "),
 *   path = "layouts/sections",
 *   template = "modeldessange-salon-infos",
 *   library = "modeldessange/modeldessange-salon-infos",
 *   default_region = "description",
 *   regions = {
 *     "title" = {
 *       "label" = @Translation("Title")
 *     },
 *     "bloc_avis" = {
 *       "label" = @Translation("bloc_avis")
 *     },
 *     "location" = {
 *       "label" = @Translation("location")
 *     },
 *     "location_maps" = {
 *       "label" = @Translation("location_maps")
 *     },
 *     "horaires" = {
 *       "label" = @Translation("horaires")
 *     },
 *     "titre_rdv" = {
 *       "label" = @Translation("titre_rdv")
 *     },
 *     "titre_for" = {
 *       "label" = @Translation("titre_for")
 *     },
 *     "titre_contact" = {
 *       "label" = @Translation("titre_contact")
 *     },
 *   }
 * )
 */
class ModeldessangeSalonInfos extends FormatageModelsSection {

  /**
   *
   * {@inheritdoc}
   * @see \Drupal\formatage_models\Plugin\Layout\FormatageModels::__construct()
   */
  public function __construct(array $configuration, $plugin_id, $plugin_definition, StylesGroupManager $styles_group_manager) {
    // TODO Auto-generated method stub
    parent::__construct($configuration, $plugin_id, $plugin_definition, $styles_group_manager);
    $this->pluginDefinition->set('icon', drupal_get_path('module', 'modeldessange') . "/icones/sections/clothingslayoutshero.png");
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
              'value' => ' COIFFEUR DESSANGE <span class="text-black">PARIS-SEBASTOPOL</span> ',
              'label' => ' Title '
            ]
          ],
          'starts' => [
            'text_html' => [
              'value' => ' <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                  d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                  d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                  d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                  d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                            <path
                                  d="M381.2 150.3L524.9 171.5C536.8 173.2 546.8 181.6 550.6 193.1C554.4 204.7 551.3 217.3 542.7 225.9L438.5 328.1L463.1 474.7C465.1 486.7 460.2 498.9 450.2 506C440.3 513.1 427.2 514 416.5 508.3L288.1 439.8L159.8 508.3C149 514 135.9 513.1 126 506C116.1 498.9 111.1 486.7 113.2 474.7L137.8 328.1L33.58 225.9C24.97 217.3 21.91 204.7 25.69 193.1C29.46 181.6 39.43 173.2 51.42 171.5L195 150.3L259.4 17.97C264.7 6.954 275.9-.0391 288.1-.0391C300.4-.0391 311.6 6.954 316.9 17.97L381.2 150.3z" />
                        </svg> ',
              'label' => ' Etoiles '
            ]
          ],
          'note' => [
            'text' => [
              'value' => '4.6',
              'label' => 'Note '
            ]
          ],
          'avis_number' => [
            'text' => [
              'value' => '17 avis',
              'label' => 'avis_number '
            ]
          ],
          'location' => [
            'text_html' => [
              'value' => '52 BOULEVARD SEBASTOPOL, 75003, PARIS',
              'label' => 'location '
            ]
          ],
          'location_maps' => [
            'text_html' => [
              'value' => 'itinéraire',
              'label' => 'location_maps '
            ]
          ],
          'phone' => [
            'text_html' => [
              'value' => ' <span class="text">Téléphone</span>  <a href="#" class="phone-number"> 01 42 71 45 23 </a> ',
              'label' => 'location '
            ]
          ],
          'titre_rdv' => [
            'text_html' => [
              'value' => ' <span> Prendre </span> <strong> Rendez-vous </strong> ',
              'label' => 'location '
            ]
          ],
          'titre_for' => [
            'text' => [
              'value' => ' Tarifs et prestations ',
              'label' => 'titre_for'
            ]
          ],
          'titre_contact' => [
            'text' => [
              'value' => ' Contactez-nous ',
              'label' => 'titre_contact'
            ]
          ],
          "horaires" => [
            'text_html' => [
              'value' => '<div class="ouverture"> Ouvert aujourd\'hui </div>
                <div class="fermeture">  jusqu\'à 19H30 </div>
                <div class="horaire-bloc">
                    <div class="horaire__list--trigger">
                        Consulter tous les horaires </div>
                    <ul class="horaire__list">
                        <li class="clearfix">
                            <span class="day">Lundi</span>
                            <span class="dotted"></span>
                            <span class="horaire">
                                <span data-yext-field="hours-monday">09:30 - 19:30</span>
                            </span>
                        </li>
                        <li class="clearfix">
                            <span class="day">Mardi</span>
                            <span class="dotted"></span>
                            <span class="horaire">
                                <span data-yext-field="hours-monday">09:30 - 19:30</span>
                            </span>
                        </li>
                        <li class="clearfix">
                            <span class="day">Mercredi</span>
                            <span class="dotted"></span>
                            <span class="horaire">
                                <span data-yext-field="hours-monday">09:30 - 19:30</span>
                            </span>
                        </li>
                        <li class="clearfix">
                            <span class="day">jeudi</span>
                            <span class="dotted"></span>
                            <span class="horaire">
                                <span data-yext-field="hours-monday">09:30 - 19:30</span>
                            </span>
                        </li>
                        <li class="clearfix">
                            <span class="day">Vendredi</span>
                            <span class="dotted"></span>
                            <span class="horaire">
                                <span data-yext-field="hours-monday">09:30 - 19:30</span>
                            </span>
                        </li>
                        <li class="clearfix">
                            <span class="day">samedi</span>
                            <span class="dotted"></span>
                            <span class="horaire">
                                <span data-yext-field="hours-monday">09:30 - 19:30</span>
                            </span>
                        </li>
                        <li class="clearfix">
                            <span class="day">Dimanche</span>
                            <span class="dotted"></span>
                            <span class="horaire">
                                <span data-yext-field="hours-sunday">Fermé</span>
                            </span>
                        </li>
                    </ul>
                </div> ',
              'label' => 'horaires '
            ]
          ]
        ]
      ]
    ] + parent::defaultConfiguration();
  }

}