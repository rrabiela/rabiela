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

/* themes/catalog_lite/templates/page--404.html.twig */
class __TwigTemplate_700a5979d4e0d5373520b403e1b3fceb996c4892f7bc15bcdd2b734f53d4c674 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'main_content' => [$this, 'block_main_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 3];
        $filters = ["escape" => 3, "t" => 13];
        $functions = ["url" => 16];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 't'],
                ['url']
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

    protected function doGetParent(array $context)
    {
        // line 1
        return "page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("page.html.twig", "themes/catalog_lite/templates/page--404.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main_content($context, array $blocks = [])
    {
        // line 3
        echo "  <div ";
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
          <section class=\"col-12 col-xl-8 ml-xl-auto mr-xl-auto\">
            ";
        // line 9
        echo "            <div class=\"clearfix main-content__section";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar((((($context["main_content_animations"] ?? null) == "enabled")) ? (" mt-no-opacity") : ("")));
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_blocks_paddings"] ?? null)) ? (" region--no-block-paddings") : ("")));
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(((($context["main_content_region_paddings"] ?? null)) ? (" region--no-paddings") : ("")));
        echo "\"
              ";
        // line 10
        if ((($context["main_content_animations"] ?? null) == "enabled")) {
            // line 11
            echo "                data-animate-effect=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_animation_effect"] ?? null)), "html", null, true);
            echo "\"
              ";
        }
        // line 12
        echo ">
              <h1 class=\"title page-title\">";
        // line 13
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Whooops!"));
        echo "</h1>
              <div class=\"text-center\">";
        // line 14
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("The page you are looking for was either removed or no longer exists."));
        echo "</div>
                <div class=\"text-center mt-5\">
                  <a class=\"button\" href=\"";
        // line 16
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\Core\Template\TwigExtension')->getUrl("<front>"));
        echo "\">";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Go Home"));
        echo "</a>
                </div>
              </div>
            </div>
            ";
        // line 21
        echo "          </section>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "themes/catalog_lite/templates/page--404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 21,  109 => 16,  104 => 14,  100 => 13,  97 => 12,  91 => 11,  89 => 10,  82 => 9,  67 => 3,  64 => 2,  54 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/catalog_lite/templates/page--404.html.twig", "/home/v053i45b1nek/public_html/rabiela.com/themes/catalog_lite/templates/page--404.html.twig");
    }
}
