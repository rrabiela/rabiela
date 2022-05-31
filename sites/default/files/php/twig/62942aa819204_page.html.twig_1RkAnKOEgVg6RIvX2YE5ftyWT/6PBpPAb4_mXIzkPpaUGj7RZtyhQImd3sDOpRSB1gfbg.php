<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/catalog_lite/templates/page.html.twig */
class __TwigTemplate_a08bcaa9d3bd060a38b2c4b098aa8e7e6e4c150d275810d6fcec036d715b7b0c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'internal_banner' => [$this, 'block_internal_banner'],
            'product_title' => [$this, 'block_product_title'],
            'main_content' => [$this, 'block_main_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 76, "block" => 251];
        $filters = ["escape" => 78];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'block'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 76
        if ($this->getAttribute(($context["page"] ?? null), "slideout", [])) {
            // line 77
            echo "  ";
            // line 78
            echo "  <div class=\"clearfix slideout ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["slideout_background_color"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["slideout_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["slideout_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
    ";
            // line 80
            echo "    <div class=\"clearfix slideout__container\">
      <div class=\"slideout__section\">
        ";
            // line 82
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "slideout", [])), "html", null, true);
            echo "
      </div>
    </div>
    ";
            // line 86
            echo "  </div>
  ";
            // line 88
            echo "
  ";
            // line 90
            echo "  <button class=\"slideout-toggle slideout-toggle--fixed\"></button>
  ";
        }
        // line 93
        echo "
";
        // line 95
        echo "<div class=\"page-container\">

  ";
        // line 97
        if ((((((($this->getAttribute(($context["page"] ?? null), "header_top_first", []) || $this->getAttribute(($context["page"] ?? null), "header_top_second", [])) || $this->getAttribute(($context["page"] ?? null), "header_first", [])) || $this->getAttribute(($context["page"] ?? null), "header", [])) || $this->getAttribute(($context["page"] ?? null), "header_third", [])) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", [])) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", []))) {
            // line 98
            echo "    ";
            // line 99
            echo "    <div class=\"header-container\">

      ";
            // line 101
            if (($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", []) || $this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", []))) {
                // line 102
                echo "        ";
                // line 103
                echo "        <div class=\"clearfix header-top-highlighted ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_background_color"] ?? null)), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 104
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_layout_container"] ?? null)), "html", null, true);
                echo "\">
            ";
                // line 106
                echo "            <div class=\"clearfix header-top-highlighted__container";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
              ";
                // line 107
                if ((($context["header_top_highlighted_animations"] ?? null) == "enabled")) {
                    // line 108
                    echo "                data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
              ";
                }
                // line 109
                echo ">
              <div class=\"row\">
                ";
                // line 111
                if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", [])) {
                    // line 112
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_first_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 114
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-first\">
                      ";
                    // line 115
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_first", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 118
                    echo "                  </div>
                ";
                }
                // line 120
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", [])) {
                    // line 121
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_highlighted_second_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 123
                    echo "                    <div class=\"clearfix header-top-highlighted__section header-top-highlighted-second\">
                      ";
                    // line 124
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_highlighted_second", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 127
                    echo "                  </div>
                ";
                }
                // line 129
                echo "              </div>
            </div>
            ";
                // line 132
                echo "          </div>
        </div>
        ";
                // line 135
                echo "      ";
            }
            // line 136
            echo "
      ";
            // line 137
            if (($this->getAttribute(($context["page"] ?? null), "header_top_first", []) || $this->getAttribute(($context["page"] ?? null), "header_top_second", []))) {
                // line 138
                echo "        ";
                // line 139
                echo "        <div class=\"clearfix header-top ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_background_color"] ?? null)), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 140
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_layout_container"] ?? null)), "html", null, true);
                echo "\">
            ";
                // line 142
                echo "            <div class=\"clearfix header-top__container";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["header_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
              ";
                // line 143
                if ((($context["header_top_animations"] ?? null) == "enabled")) {
                    // line 144
                    echo "                data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
              ";
                }
                // line 145
                echo ">
              <div class=\"row\">
                ";
                // line 147
                if ($this->getAttribute(($context["page"] ?? null), "header_top_first", [])) {
                    // line 148
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_first_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 150
                    echo "                    <div class=\"clearfix header-top__section header-top-first\">
                      ";
                    // line 151
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_first", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 154
                    echo "                  </div>
                ";
                }
                // line 156
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_top_second", [])) {
                    // line 157
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_top_second_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 159
                    echo "                    <div class=\"clearfix header-top__section header-top-second\">
                      ";
                    // line 160
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_top_second", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 163
                    echo "                  </div>
                ";
                }
                // line 165
                echo "              </div>
            </div>
            ";
                // line 168
                echo "          </div>
        </div>
        ";
                // line 171
                echo "      ";
            }
            // line 172
            echo "
      ";
            // line 173
            if ((($this->getAttribute(($context["page"] ?? null), "header_first", []) || $this->getAttribute(($context["page"] ?? null), "header", [])) || $this->getAttribute(($context["page"] ?? null), "header_third", []))) {
                // line 174
                echo "        ";
                // line 175
                echo "        <header role=\"banner\" class=\"clearfix header ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_background_color"] ?? null)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container_class"] ?? null)), "html", null, true);
                echo " ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_columns_class"] ?? null)), "html", null, true);
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["header_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
                echo "\">
          <div class=\"";
                // line 176
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_layout_container"] ?? null)), "html", null, true);
                echo "\">
            ";
                // line 178
                echo "            <div class=\"clearfix header__container\">
              <div class=\"row\">
                ";
                // line 180
                if ($this->getAttribute(($context["page"] ?? null), "header_third", [])) {
                    // line 181
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_third_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 183
                    echo "                    <div class=\"clearfix header__section header-third\">
                      ";
                    // line 184
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_third", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 187
                    echo "                  </div>
                ";
                }
                // line 189
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header_first", [])) {
                    // line 190
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_first_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 192
                    echo "                    <div class=\"clearfix header__section header-first";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["slideout_mobile_menu_display"] ?? null)) ? (" d-none d-md-block") : ("")));
                    echo "\">
                      ";
                    // line 193
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header_first", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 196
                    echo "                  </div>
                ";
                }
                // line 198
                echo "                ";
                if ($this->getAttribute(($context["page"] ?? null), "header", [])) {
                    // line 199
                    echo "                  <div class=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header_second_grid_class"] ?? null)), "html", null, true);
                    echo "\">
                    ";
                    // line 201
                    echo "                    <div class=\"clearfix header__section header-second\">
                      ";
                    // line 202
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
                    echo "
                    </div>
                    ";
                    // line 205
                    echo "                  </div>
                ";
                }
                // line 207
                echo "              </div>
            </div>
            ";
                // line 210
                echo "          </div>
        </header>
        ";
                // line 213
                echo "      ";
            }
            // line 214
            echo "
    </div>
    ";
            // line 217
            echo "  ";
        }
        // line 218
        echo "
  ";
        // line 219
        if ($this->getAttribute(($context["page"] ?? null), "banner", [])) {
            // line 220
            echo "    ";
            // line 221
            echo "    <div ";
            if (($context["banner_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix banner ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_background_color"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["banner_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 222
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["banner_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 224
            echo "        <div class=\"clearfix banner__container\">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"banner__section\">
                ";
            // line 228
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "banner", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 234
            echo "      </div>
    </div>
    ";
            // line 237
            echo "  ";
        }
        // line 238
        echo "
  ";
        // line 239
        if ($this->getAttribute(($context["page"] ?? null), "system_messages", [])) {
            // line 240
            echo "    <div class=\"system-messages clearfix\">
      <div class=\"container-fluid\">
        <div class=\"row\">
          <div class=\"col-12\">
            ";
            // line 244
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "system_messages", [])), "html", null, true);
            echo "
          </div>
        </div>
      </div>
    </div>
  ";
        }
        // line 250
        echo "
  ";
        // line 251
        $this->displayBlock('internal_banner', $context, $blocks);
        // line 253
        echo "
  ";
        // line 254
        $this->displayBlock('product_title', $context, $blocks);
        // line 256
        echo "
  ";
        // line 257
        if ($this->getAttribute(($context["page"] ?? null), "content_top", [])) {
            // line 258
            echo "    ";
            // line 259
            echo "    <div ";
            if (($context["content_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix content-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_background_color"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 260
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 262
            echo "        <div class=\"clearfix content-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 263
            if ((($context["content_top_animations"] ?? null) == "enabled")) {
                // line 264
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 265
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"content-top__section\">
                ";
            // line 269
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 275
            echo "      </div>
    </div>
    ";
            // line 278
            echo "  ";
        }
        // line 279
        echo "
  ";
        // line 280
        if ($this->getAttribute(($context["page"] ?? null), "content_top_highlighted", [])) {
            // line 281
            echo "    ";
            // line 282
            echo "    <div ";
            if (($context["content_top_highlighted_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix content-top-highlighted ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_top_highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 283
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 285
            echo "        <div class=\"clearfix content-top-highlighted__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_top_highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 286
            if ((($context["content_top_highlighted_animations"] ?? null) == "enabled")) {
                // line 287
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_top_highlighted_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 288
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"content-top-highlighted__section\">
                ";
            // line 292
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_top_highlighted", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 298
            echo "      </div>
    </div>
    ";
            // line 301
            echo "  ";
        }
        // line 302
        echo "
  ";
        // line 304
        echo "  ";
        $this->displayBlock('main_content', $context, $blocks);
        // line 350
        echo "  ";
        // line 351
        echo "
  ";
        // line 352
        if (($this->getAttribute(($context["page"] ?? null), "content_bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "content_bottom_second", []))) {
            // line 353
            echo "    ";
            // line 354
            echo "    <div ";
            if (($context["content_bottom_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix content-bottom ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["content_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 355
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 357
            echo "        <div class=\"clearfix content-bottom__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["content_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 358
            if ((($context["content_bottom_animations"] ?? null) == "enabled")) {
                // line 359
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 360
            echo ">
          <div class=\"row\">
            ";
            // line 362
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_first", [])) {
                // line 363
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 365
                echo "                <div class=\"clearfix content-bottom__section content-bottom-first\">
                  ";
                // line 366
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 369
                echo "              </div>
            ";
            }
            // line 371
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "content_bottom_second", [])) {
                // line 372
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_bottom_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 374
                echo "                <div class=\"clearfix content-bottom__section content-bottom-second\">
                  ";
                // line 375
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content_bottom_second", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 378
                echo "              </div>
            ";
            }
            // line 380
            echo "          </div>
        </div>
        ";
            // line 383
            echo "      </div>
    </div>
    ";
            // line 386
            echo "  ";
        }
        // line 387
        echo "
  ";
        // line 388
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", [])) {
            // line 389
            echo "    ";
            // line 390
            echo "    <div ";
            if (($context["featured_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix featured-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 391
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 393
            echo "        <div class=\"clearfix featured-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 394
            if ((($context["featured_top_animations"] ?? null) == "enabled")) {
                // line 395
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 396
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured-top__section\">
                ";
            // line 400
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_top", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 406
            echo "      </div>
    </div>
    ";
            // line 409
            echo "  ";
        }
        // line 410
        echo "
  ";
        // line 411
        if ($this->getAttribute(($context["page"] ?? null), "featured", [])) {
            // line 412
            echo "    ";
            // line 413
            echo "    <div ";
            if (($context["featured_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix featured ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 414
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 416
            echo "        <div class=\"clearfix featured__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 417
            if ((($context["featured_animations"] ?? null) == "enabled")) {
                // line 418
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 419
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured__section\">
                ";
            // line 423
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 429
            echo "      </div>
    </div>
    ";
            // line 432
            echo "  ";
        }
        // line 433
        echo "
  ";
        // line 434
        if ($this->getAttribute(($context["page"] ?? null), "featured_bottom", [])) {
            // line 435
            echo "    ";
            // line 436
            echo "    <div ";
            if (($context["featured_bottom_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix featured-bottom ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["featured_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 437
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 439
            echo "        <div class=\"clearfix featured-bottom__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["featured_bottom_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 440
            if ((($context["featured_bottom_animations"] ?? null) == "enabled")) {
                // line 441
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_bottom_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 442
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix featured-bottom__section\">
                ";
            // line 446
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 452
            echo "      </div>
    </div>
    ";
            // line 455
            echo "  ";
        }
        // line 456
        echo "
  ";
        // line 457
        if ($this->getAttribute(($context["page"] ?? null), "sub_featured", [])) {
            // line 458
            echo "    ";
            // line 459
            echo "    <div ";
            if (($context["sub_featured_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix sub-featured ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sub_featured_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sub_featured_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 460
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 462
            echo "        <div class=\"clearfix sub-featured__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sub_featured_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 463
            if ((($context["sub_featured_animations"] ?? null) == "enabled")) {
                // line 464
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sub_featured_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 465
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix sub-featured__section\">
                ";
            // line 469
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sub_featured", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 475
            echo "      </div>
    </div>
    ";
            // line 478
            echo "  ";
        }
        // line 479
        echo "
  ";
        // line 480
        if ($this->getAttribute(($context["page"] ?? null), "highlighted_top", [])) {
            // line 481
            echo "    ";
            // line 482
            echo "    <div ";
            if (($context["highlighted_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix highlighted-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 483
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 485
            echo "        <div class=\"clearfix highlighted-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 486
            if ((($context["highlighted_top_animations"] ?? null) == "enabled")) {
                // line 487
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 488
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix highlighted-top__section\">
                ";
            // line 492
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted_top", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 498
            echo "      </div>
    </div>
    ";
            // line 501
            echo "  ";
        }
        // line 502
        echo "
  ";
        // line 503
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 504
            echo "    ";
            // line 505
            echo "    <div ";
            if (($context["highlighted_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix highlighted ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["highlighted_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 506
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 508
            echo "        <div class=\"clearfix highlighted__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["highlighted_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 509
            if ((($context["highlighted_animations"] ?? null) == "enabled")) {
                // line 510
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["highlighted_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 511
            echo ">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix highlighted__section\">
                ";
            // line 515
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 521
            echo "      </div>
    </div>
    ";
            // line 524
            echo "  ";
        }
        // line 525
        echo "
  ";
        // line 526
        if (($this->getAttribute(($context["page"] ?? null), "footer_top_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_top_second", []))) {
            // line 527
            echo "    ";
            // line 528
            echo "    <div ";
            if (($context["footer_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix footer-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_regions"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_separator"] ?? null)), "html", null, true);
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 529
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 531
            echo "        <div class=\"clearfix footer-top__container";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_top_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo "\"
          ";
            // line 532
            if ((($context["footer_top_animations"] ?? null) == "enabled")) {
                // line 533
                echo "            data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_animation_effect"] ?? null)), "html", null, true);
                echo "\"
          ";
            }
            // line 534
            echo ">
          <div class=\"row\">
            ";
            // line 536
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_first", [])) {
                // line 537
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 539
                echo "                <div class=\"clearfix footer-top__section footer-top-first\">
                  ";
                // line 540
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 543
                echo "              </div>
            ";
            }
            // line 545
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_top_second", [])) {
                // line 546
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_top_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 548
                echo "                <div class=\"clearfix footer-top__section footer-top-second\">
                  ";
                // line 549
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_top_second", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 552
                echo "              </div>
            ";
            }
            // line 554
            echo "          </div>
        </div>
        ";
            // line 557
            echo "      </div>
    </div>
    ";
            // line 560
            echo "  ";
        }
        // line 561
        echo "
  ";
        // line 562
        if ((((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fifth", []))) {
            // line 563
            echo "    ";
            // line 564
            echo "    <footer ";
            if (($context["footer_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix footer ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_separator"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 565
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_layout_container"] ?? null)), "html", null, true);
            echo "\">
        <div class=\"clearfix footer__container\">
          <div class=\"row\">
            ";
            // line 568
            if ($this->getAttribute(($context["page"] ?? null), "footer_first", [])) {
                // line 569
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 571
                echo "                <div class=\"clearfix footer__section footer-first";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 572
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 573
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 574
                echo ">
                  ";
                // line 575
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 578
                echo "              </div>
            ";
            }
            // line 580
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_second", [])) {
                // line 581
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 583
                echo "                <div class=\"clearfix footer__section footer-second";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 584
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 585
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 586
                echo ">
                  ";
                // line 587
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_second", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 590
                echo "              </div>
            ";
            }
            // line 592
            echo "            <div class=\"clearfix ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_first"] ?? null)), "html", null, true);
            echo "\"></div>
            ";
            // line 593
            if ($this->getAttribute(($context["page"] ?? null), "footer_third", [])) {
                // line 594
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_third_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 596
                echo "                <div class=\"clearfix footer__section footer-third";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 597
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 598
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 599
                echo ">
                  ";
                // line 600
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_third", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 603
                echo "              </div>
            ";
            }
            // line 605
            echo "            <div class=\"clearfix ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_4_columns_clearfix_second"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_5_columns_clearfix"] ?? null)), "html", null, true);
            echo "\"></div>
            ";
            // line 606
            if ($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])) {
                // line 607
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fourth_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 609
                echo "                <div class=\"clearfix footer__section footer-fourth";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 610
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 611
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 612
                echo ">
                  ";
                // line 613
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fourth", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 616
                echo "              </div>
            ";
            }
            // line 618
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])) {
                // line 619
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_fifth_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 621
                echo "                <div class=\"clearfix footer__section footer-fifth";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["footer_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
                echo "\"
                  ";
                // line 622
                if ((($context["footer_animations"] ?? null) == "enabled")) {
                    // line 623
                    echo "                    data-animate-effect=\"";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_animation_effect"] ?? null)), "html", null, true);
                    echo "\"
                  ";
                }
                // line 624
                echo ">
                  ";
                // line 625
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_fifth", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 628
                echo "              </div>
            ";
            }
            // line 630
            echo "          </div>
        </div>
      </div>
    </footer>
    ";
            // line 635
            echo "  ";
        }
        // line 636
        echo "
  ";
        // line 637
        if ($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])) {
            // line 638
            echo "    ";
            // line 639
            echo "    <div ";
            if (($context["footer_bottom_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix footer-bottom ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_separator"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_bottom_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["footer_bottom_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 640
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer_bottom_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 642
            echo "        <div class=\"clearfix footer-bottom__container\">
          <div class=\"row\">
            <div class=\"col-12\">
              <div class=\"clearfix footer-bottom__section\">
                ";
            // line 646
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_bottom", [])), "html", null, true);
            echo "
              </div>
            </div>
          </div>
        </div>
        ";
            // line 652
            echo "      </div>
    </div>
    ";
            // line 655
            echo "  ";
        }
        // line 656
        echo "
  ";
        // line 657
        if ((($this->getAttribute(($context["page"] ?? null), "sub_footer_top_first", []) || $this->getAttribute(($context["page"] ?? null), "sub_footer_top_second", [])) || $this->getAttribute(($context["page"] ?? null), "sub_footer_top_third", []))) {
            // line 658
            echo "    ";
            // line 659
            echo "    <div ";
            if (($context["subfooter_top_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix subfooter-top ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_separator"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["subfooter_top_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["subfooter_top_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 660
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 662
            echo "        <div class=\"clearfix subfooter-top__container\">
          <div class=\"row\">
            ";
            // line 664
            if ($this->getAttribute(($context["page"] ?? null), "sub_footer_top_first", [])) {
                // line 665
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                <div class=\"clearfix subfooter-top__section\">
                  ";
                // line 667
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sub_footer_top_first", [])), "html", null, true);
                echo "
                </div>
              </div>
            ";
            }
            // line 671
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "sub_footer_top_second", [])) {
                // line 672
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                <div class=\"clearfix subfooter-top__section\">
                  ";
                // line 674
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sub_footer_top_second", [])), "html", null, true);
                echo "
                </div>
              </div>
            ";
            }
            // line 678
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "sub_footer_top_third", [])) {
                // line 679
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_top_third_grid_class"] ?? null)), "html", null, true);
                echo "\">
                <div class=\"clearfix subfooter-top__section\">
                  ";
                // line 681
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sub_footer_top_third", [])), "html", null, true);
                echo "
                </div>
              </div>
            ";
            }
            // line 685
            echo "          </div>
        </div>
        ";
            // line 688
            echo "      </div>
    </div>
    ";
            // line 691
            echo "  ";
        }
        // line 692
        echo "
  ";
        // line 693
        if (($this->getAttribute(($context["page"] ?? null), "sub_footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer", []))) {
            // line 694
            echo "    ";
            // line 695
            echo "    <div ";
            if (($context["subfooter_id"] ?? null)) {
                echo "id=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_id"] ?? null)), "html", null, true);
                echo "\"";
            }
            echo " class=\"clearfix subfooter ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_background_color"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_separator"] ?? null)), "html", null, true);
            echo " ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["subfooter_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["subfooter_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\">
      <div class=\"";
            // line 696
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_layout_container"] ?? null)), "html", null, true);
            echo "\">
        ";
            // line 698
            echo "        <div class=\"clearfix subfooter__container\">
          <div class=\"row\">
            ";
            // line 700
            if ($this->getAttribute(($context["page"] ?? null), "sub_footer_first", [])) {
                // line 701
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_first_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 703
                echo "                <div class=\"clearfix subfooter__section subfooter-first\">
                  ";
                // line 704
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sub_footer_first", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 707
                echo "              </div>
            ";
            }
            // line 709
            echo "            ";
            if ($this->getAttribute(($context["page"] ?? null), "footer", [])) {
                // line 710
                echo "              <div class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["subfooter_second_grid_class"] ?? null)), "html", null, true);
                echo "\">
                ";
                // line 712
                echo "                <div class=\"clearfix subfooter__section subfooter-second\">
                  ";
                // line 713
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer", [])), "html", null, true);
                echo "
                </div>
                ";
                // line 716
                echo "              </div>
            ";
            }
            // line 718
            echo "          </div>
        </div>
        ";
            // line 721
            echo "      </div>
    </div>
    ";
            // line 724
            echo "  ";
        }
        // line 725
        echo "
  ";
        // line 726
        if (($context["scroll_to_top_display"] ?? null)) {
            // line 727
            echo "  ";
            // line 728
            echo "    <div class=\"to-top\"><i class=\"fas ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["scroll_to_top_icon"] ?? null)), "html", null, true);
            echo "\"></i></div>
  ";
            // line 730
            echo "  ";
        }
        // line 731
        echo "
</div>
";
    }

    // line 251
    public function block_internal_banner($context, array $blocks = [])
    {
        // line 252
        echo "  ";
    }

    // line 254
    public function block_product_title($context, array $blocks = [])
    {
        // line 255
        echo "  ";
    }

    // line 304
    public function block_main_content($context, array $blocks = [])
    {
        // line 305
        echo "    <div ";
        if (($context["main_content_id"] ?? null)) {
            echo "id=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_id"] ?? null)), "html", null, true);
            echo "\"";
        }
        echo " class=\"clearfix main-content region--dark-typography region--white-background  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_separator"] ?? null)), "html", null, true);
        echo "\">
      <div class=\"container\">
        <div class=\"clearfix main-content__container\">
          <div class=\"row\">
            <section class=\"";
        // line 309
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_grid_class"] ?? null)), "html", null, true);
        echo "\">
              ";
        // line 311
        echo "              <div class=\"clearfix main-content__section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
        echo "\"
                ";
        // line 312
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 313
            echo "                  data-animate-effect=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_animation_effect"] ?? null)), "html", null, true);
            echo "\"
                ";
        }
        // line 314
        echo ">
                ";
        // line 315
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 316
            echo "                  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
            echo "
                ";
        }
        // line 318
        echo "              </div>
              ";
        // line 320
        echo "            </section>
            ";
        // line 321
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])) {
            // line 322
            echo "              <aside class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_grid_class"] ?? null)), "html", null, true);
            echo "\">
                ";
            // line 324
            echo "                <section class=\"sidebar__section sidebar-first clearfix";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_first_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_first_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_first_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                  ";
            // line 325
            if ((($context["sidebar_first_animations"] ?? null) == "enabled")) {
                // line 326
                echo "                    data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_first_animation_effect"] ?? null)), "html", null, true);
                echo "\"
                  ";
            }
            // line 327
            echo ">
                  ";
            // line 328
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_first", [])), "html", null, true);
            echo "
                </section>
                ";
            // line 331
            echo "              </aside>
            ";
        }
        // line 333
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])) {
            // line 334
            echo "              <aside class=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_grid_class"] ?? null)), "html", null, true);
            echo "\">
                ";
            // line 336
            echo "                <section class=\"sidebar__section sidebar-second clearfix";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["sidebar_second_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_second_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["sidebar_second_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
            echo "\"
                  ";
            // line 337
            if ((($context["sidebar_second_animations"] ?? null) == "enabled")) {
                // line 338
                echo "                    data-animate-effect=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["sidebar_second_animation_effect"] ?? null)), "html", null, true);
                echo "\"
                  ";
            }
            // line 339
            echo ">
                  ";
            // line 340
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "sidebar_second", [])), "html", null, true);
            echo "
                </section>
                ";
            // line 343
            echo "              </aside>
            ";
        }
        // line 345
        echo "          </div>
        </div>
      </div>
    </div>
  ";
    }

    public function getTemplateName()
    {
        return "themes/catalog_lite/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1712 => 345,  1708 => 343,  1703 => 340,  1700 => 339,  1694 => 338,  1692 => 337,  1685 => 336,  1680 => 334,  1677 => 333,  1673 => 331,  1668 => 328,  1665 => 327,  1659 => 326,  1657 => 325,  1650 => 324,  1645 => 322,  1643 => 321,  1640 => 320,  1637 => 318,  1631 => 316,  1629 => 315,  1626 => 314,  1620 => 313,  1618 => 312,  1611 => 311,  1607 => 309,  1593 => 305,  1590 => 304,  1586 => 255,  1583 => 254,  1579 => 252,  1576 => 251,  1570 => 731,  1567 => 730,  1562 => 728,  1560 => 727,  1558 => 726,  1555 => 725,  1552 => 724,  1548 => 721,  1544 => 718,  1540 => 716,  1535 => 713,  1532 => 712,  1527 => 710,  1524 => 709,  1520 => 707,  1515 => 704,  1512 => 703,  1507 => 701,  1505 => 700,  1501 => 698,  1497 => 696,  1481 => 695,  1479 => 694,  1477 => 693,  1474 => 692,  1471 => 691,  1467 => 688,  1463 => 685,  1456 => 681,  1450 => 679,  1447 => 678,  1440 => 674,  1434 => 672,  1431 => 671,  1424 => 667,  1418 => 665,  1416 => 664,  1412 => 662,  1408 => 660,  1392 => 659,  1390 => 658,  1388 => 657,  1385 => 656,  1382 => 655,  1378 => 652,  1370 => 646,  1364 => 642,  1360 => 640,  1344 => 639,  1342 => 638,  1340 => 637,  1337 => 636,  1334 => 635,  1328 => 630,  1324 => 628,  1319 => 625,  1316 => 624,  1310 => 623,  1308 => 622,  1303 => 621,  1298 => 619,  1295 => 618,  1291 => 616,  1286 => 613,  1283 => 612,  1277 => 611,  1275 => 610,  1270 => 609,  1265 => 607,  1263 => 606,  1256 => 605,  1252 => 603,  1247 => 600,  1244 => 599,  1238 => 598,  1236 => 597,  1231 => 596,  1226 => 594,  1224 => 593,  1219 => 592,  1215 => 590,  1210 => 587,  1207 => 586,  1201 => 585,  1199 => 584,  1194 => 583,  1189 => 581,  1186 => 580,  1182 => 578,  1177 => 575,  1174 => 574,  1168 => 573,  1166 => 572,  1161 => 571,  1156 => 569,  1154 => 568,  1148 => 565,  1132 => 564,  1130 => 563,  1128 => 562,  1125 => 561,  1122 => 560,  1118 => 557,  1114 => 554,  1110 => 552,  1105 => 549,  1102 => 548,  1097 => 546,  1094 => 545,  1090 => 543,  1085 => 540,  1082 => 539,  1077 => 537,  1075 => 536,  1071 => 534,  1065 => 533,  1063 => 532,  1058 => 531,  1054 => 529,  1037 => 528,  1035 => 527,  1033 => 526,  1030 => 525,  1027 => 524,  1023 => 521,  1015 => 515,  1009 => 511,  1003 => 510,  1001 => 509,  996 => 508,  992 => 506,  977 => 505,  975 => 504,  973 => 503,  970 => 502,  967 => 501,  963 => 498,  955 => 492,  949 => 488,  943 => 487,  941 => 486,  936 => 485,  932 => 483,  917 => 482,  915 => 481,  913 => 480,  910 => 479,  907 => 478,  903 => 475,  895 => 469,  889 => 465,  883 => 464,  881 => 463,  876 => 462,  872 => 460,  857 => 459,  855 => 458,  853 => 457,  850 => 456,  847 => 455,  843 => 452,  835 => 446,  829 => 442,  823 => 441,  821 => 440,  816 => 439,  812 => 437,  797 => 436,  795 => 435,  793 => 434,  790 => 433,  787 => 432,  783 => 429,  775 => 423,  769 => 419,  763 => 418,  761 => 417,  756 => 416,  752 => 414,  737 => 413,  735 => 412,  733 => 411,  730 => 410,  727 => 409,  723 => 406,  715 => 400,  709 => 396,  703 => 395,  701 => 394,  696 => 393,  692 => 391,  677 => 390,  675 => 389,  673 => 388,  670 => 387,  667 => 386,  663 => 383,  659 => 380,  655 => 378,  650 => 375,  647 => 374,  642 => 372,  639 => 371,  635 => 369,  630 => 366,  627 => 365,  622 => 363,  620 => 362,  616 => 360,  610 => 359,  608 => 358,  603 => 357,  599 => 355,  584 => 354,  582 => 353,  580 => 352,  577 => 351,  575 => 350,  572 => 304,  569 => 302,  566 => 301,  562 => 298,  554 => 292,  548 => 288,  542 => 287,  540 => 286,  535 => 285,  531 => 283,  516 => 282,  514 => 281,  512 => 280,  509 => 279,  506 => 278,  502 => 275,  494 => 269,  488 => 265,  482 => 264,  480 => 263,  475 => 262,  471 => 260,  458 => 259,  456 => 258,  454 => 257,  451 => 256,  449 => 254,  446 => 253,  444 => 251,  441 => 250,  432 => 244,  426 => 240,  424 => 239,  421 => 238,  418 => 237,  414 => 234,  406 => 228,  400 => 224,  396 => 222,  383 => 221,  381 => 220,  379 => 219,  376 => 218,  373 => 217,  369 => 214,  366 => 213,  362 => 210,  358 => 207,  354 => 205,  349 => 202,  346 => 201,  341 => 199,  338 => 198,  334 => 196,  329 => 193,  324 => 192,  319 => 190,  316 => 189,  312 => 187,  307 => 184,  304 => 183,  299 => 181,  297 => 180,  293 => 178,  289 => 176,  278 => 175,  276 => 174,  274 => 173,  271 => 172,  268 => 171,  264 => 168,  260 => 165,  256 => 163,  251 => 160,  248 => 159,  243 => 157,  240 => 156,  236 => 154,  231 => 151,  228 => 150,  223 => 148,  221 => 147,  217 => 145,  211 => 144,  209 => 143,  204 => 142,  200 => 140,  193 => 139,  191 => 138,  189 => 137,  186 => 136,  183 => 135,  179 => 132,  175 => 129,  171 => 127,  166 => 124,  163 => 123,  158 => 121,  155 => 120,  151 => 118,  146 => 115,  143 => 114,  138 => 112,  136 => 111,  132 => 109,  126 => 108,  124 => 107,  119 => 106,  115 => 104,  108 => 103,  106 => 102,  104 => 101,  100 => 99,  98 => 98,  96 => 97,  92 => 95,  89 => 93,  85 => 90,  82 => 88,  79 => 86,  73 => 82,  69 => 80,  62 => 78,  60 => 77,  58 => 76,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/catalog_lite/templates/page.html.twig", "/home/v053i45b1nek/public_html/rabiela.com/themes/catalog_lite/templates/page.html.twig");
    }
}
