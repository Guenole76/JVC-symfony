<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* truc/notifications.html.twig */
class __TwigTemplate_f2c8ba8b1bbb6def94952ff0e59c80f87513803cdd1a40121e6dc0022f3ce4af extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "truc/notifications.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "truc/notifications.html.twig"));

        // line 2
        echo "<link href=\"css/test.css\" rel=\"stylesheet\"> 


  <head>

    <meta charset=\"UTF-8\" />

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\" />

    <link rel=\"stylesheet\" href=\"css/style.css\" />

    <title>JeuxVideo.com</title>

  </head>
  <body>
    
    <div class=\"bandeau\">
      <div class=\"jvc\">

        <div class=\"logo\">
          <a href=\"index.html\">
              <img id=\"logo\" src=\"css/logo.jpg\" alt=\"bde\"> 
          </a>
        </div>

        <div class=boutons>
          <button class=\"bouton\"type=\"button\">Jeux</button>

          <button class=\"bouton\"type=\"button\">Actu</button>

          <button class=\"bouton\"type=\"button\">TV</button>

          <button class=\"bouton\"type=\"button\">Vidéo</button>

          <button class=\"bouton\"type=\"button\">Forum</button>
        </div>
      </div>
    </div>

    <div class=\"plateforme\">
      <div class=\"jvc2\">
        
      </div>
    </div>
    
    
    <div class=\"news\">
        
        <div class=\"bienvenu\">
          <p>Bienvenu sur jeux vidéo .com</p>
        </div>

        <div class=\"moment\">
          <p id=\"moment\">En ce moment</p>  
        </div>

      <div class=\"nouveauté\">



        <div class=\"article1\">
          <input class=\"ghost\"
          type=\"button\"
          value=\"Ghost of tsuchima\">
        </div>

        <div class=\"article2\">
          <input class=\"ghost\"
          type=\"button\"
          value=\"Cyber Punk 2077\">
        </div>

        <div class=\"article3\">
          <input class=\"ghost\"
          type=\"button\"
          value=\"PS5\">
        </div>

        <div class=\"article4\">
          <input class=\"ghost\"
          type=\"button\"
          value=\"XBOX\">
        </div>

        <div class=\"article5\">
          <input class=\"ghost\"
          type=\"button\"
          value=\"The last of us 2\">
        </div>

        <div class=\"article6\">
          <input class=\"ghost\"
          type=\"button\"
          value=\"AC valhalla\">
        </div>



      </div> 
      <div class=\"cate1\">
        <a href=\"../html-link.htm\"><img src=";
        // line 104
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 104, $this->source); })()), 3, [], "array", false, false, false, 104), "html", null, true);
        echo "\" width=\"400\" height=\"600\" title=\"Yone\" alt=\"Yone\"></a>
      </div>
      
      <div class=\"imgtheme\">

        <div class=\"cate2\">
          <a href=\"../html-link.htm\"><img src=";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 110, $this->source); })()), 4, [], "array", false, false, false, 110), "html", null, true);
        echo "\" width=\"400\" height=\"300\" title=\"Lillia\" alt=\"Lillia\"></a>
        </div>

        <div class=\"cate3\">
          <a href=\"../html-link.htm\"><img src=";
        // line 114
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 114, $this->source); })()), 5, [], "array", false, false, false, 114), "html", null, true);
        echo "\" width=\"400\" height=\"300\" title=\"Sett\" alt=\"Sett\"></a>
        </div>

        <div class=\"cate4\">
          <a href=\"../html-link.htm\"><img src=";
        // line 118
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 118, $this->source); })()), 5, [], "array", false, false, false, 118), "html", null, true);
        echo "\" width=\"400\" height=\"300\" title=\"Sett\" alt=\"Sett\"></a>
        </div>

        <div class=\"cate5\">
          <a href=\"../html-link.htm\"><img src=";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 122, $this->source); })()), 4, [], "array", false, false, false, 122), "html", null, true);
        echo "\" width=\"400\" height=\"300\" title=\"Lillia\" alt=\"Lillia\"></a>
        </div>

      </div>
    <div>
    
     <p>Article1<a href=\"https://www.w3schools.com\">Pokemon</a></p>
    </div>
    <div>
      <p>Article2<a href=\"https://www.w3schools.com\"> Yugioh</a></p>
    </div>
    <div>
     <p>Article3<a href=\"https://www.w3schools.com\">Hearthstone</a></p>
    </div>

    <p><a href=\"/actualites\">Liste des articles</a></p>

    ";
        // line 139
        echo "  
    <p><a href=\"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("actualites_articles");
        echo "\">Liste des articles</a></p>

    </div>\t

     

    </div>

  </body>

</html>






 
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "truc/notifications.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 140,  197 => 139,  177 => 122,  170 => 118,  163 => 114,  156 => 110,  147 => 104,  43 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# templates/user/notifications.html.twig #}
<link href=\"css/test.css\" rel=\"stylesheet\"> 


  <head>

    <meta charset=\"UTF-8\" />

    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\" />

    <link rel=\"stylesheet\" href=\"css/style.css\" />

    <title>JeuxVideo.com</title>

  </head>
  <body>
    
    <div class=\"bandeau\">
      <div class=\"jvc\">

        <div class=\"logo\">
          <a href=\"index.html\">
              <img id=\"logo\" src=\"css/logo.jpg\" alt=\"bde\"> 
          </a>
        </div>

        <div class=boutons>
          <button class=\"bouton\"type=\"button\">Jeux</button>

          <button class=\"bouton\"type=\"button\">Actu</button>

          <button class=\"bouton\"type=\"button\">TV</button>

          <button class=\"bouton\"type=\"button\">Vidéo</button>

          <button class=\"bouton\"type=\"button\">Forum</button>
        </div>
      </div>
    </div>

    <div class=\"plateforme\">
      <div class=\"jvc2\">
        
      </div>
    </div>
    
    
    <div class=\"news\">
        
        <div class=\"bienvenu\">
          <p>Bienvenu sur jeux vidéo .com</p>
        </div>

        <div class=\"moment\">
          <p id=\"moment\">En ce moment</p>  
        </div>

      <div class=\"nouveauté\">



        <div class=\"article1\">
          <input class=\"ghost\"
          type=\"button\"
          value=\"Ghost of tsuchima\">
        </div>

        <div class=\"article2\">
          <input class=\"ghost\"
          type=\"button\"
          value=\"Cyber Punk 2077\">
        </div>

        <div class=\"article3\">
          <input class=\"ghost\"
          type=\"button\"
          value=\"PS5\">
        </div>

        <div class=\"article4\">
          <input class=\"ghost\"
          type=\"button\"
          value=\"XBOX\">
        </div>

        <div class=\"article5\">
          <input class=\"ghost\"
          type=\"button\"
          value=\"The last of us 2\">
        </div>

        <div class=\"article6\">
          <input class=\"ghost\"
          type=\"button\"
          value=\"AC valhalla\">
        </div>



      </div> 
      <div class=\"cate1\">
        <a href=\"../html-link.htm\"><img src={{ images[3] }}\" width=\"400\" height=\"600\" title=\"Yone\" alt=\"Yone\"></a>
      </div>
      
      <div class=\"imgtheme\">

        <div class=\"cate2\">
          <a href=\"../html-link.htm\"><img src={{ images[4] }}\" width=\"400\" height=\"300\" title=\"Lillia\" alt=\"Lillia\"></a>
        </div>

        <div class=\"cate3\">
          <a href=\"../html-link.htm\"><img src={{ images[5] }}\" width=\"400\" height=\"300\" title=\"Sett\" alt=\"Sett\"></a>
        </div>

        <div class=\"cate4\">
          <a href=\"../html-link.htm\"><img src={{ images[5] }}\" width=\"400\" height=\"300\" title=\"Sett\" alt=\"Sett\"></a>
        </div>

        <div class=\"cate5\">
          <a href=\"../html-link.htm\"><img src={{ images[4] }}\" width=\"400\" height=\"300\" title=\"Lillia\" alt=\"Lillia\"></a>
        </div>

      </div>
    <div>
    
     <p>Article1<a href=\"https://www.w3schools.com\">Pokemon</a></p>
    </div>
    <div>
      <p>Article2<a href=\"https://www.w3schools.com\"> Yugioh</a></p>
    </div>
    <div>
     <p>Article3<a href=\"https://www.w3schools.com\">Hearthstone</a></p>
    </div>

    <p><a href=\"/actualites\">Liste des articles</a></p>

    {# Ce lien changera automatiquement en cas de modification des routes #}  
    <p><a href=\"{{ path('actualites_articles') }}\">Liste des articles</a></p>

    </div>\t

     

    </div>

  </body>

</html>






 
", "truc/notifications.html.twig", "C:\\wamp64\\www\\JVC\\JVC\\templates\\truc\\notifications.html.twig");
    }
}
