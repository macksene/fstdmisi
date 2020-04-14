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

/* navbar_header.html */
class __TwigTemplate_893c29e2e040853a0373c21130cb875381e699f72db35b48f7c4d251f823c3dc extends \Twig\Template
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
        // line 1
        echo "<div class=\"navbar\" role=\"navigation\">
\t<div class=\"inner\">

\t<ul id=\"nav-main\" class=\"nav-main linklist\" role=\"menubar\">

\t\t<li id=\"quick-links\" class=\"quick-links dropdown-container responsive-menu";
        // line 6
        if (( !($context["S_DISPLAY_QUICK_LINKS"] ?? null) &&  !($context["S_DISPLAY_SEARCH"] ?? null))) {
            echo " hidden";
        }
        echo "\" data-skip-responsive=\"true\">
\t\t\t<a href=\"#\" class=\"dropdown-trigger\">
\t\t\t\t<i class=\"icon fa-bars fa-fw\" aria-hidden=\"true\"></i><span>";
        // line 8
        echo $this->extensions['phpbb\template\twig\extension']->lang("QUICK_LINKS");
        echo "</span>
\t\t\t</a>
\t\t\t<div class=\"dropdown\">
\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t";
        // line 13
        // line 14
        echo "
\t\t\t\t\t";
        // line 15
        if (($context["S_DISPLAY_SEARCH"] ?? null)) {
            // line 16
            echo "\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t";
            // line 17
            if (($context["S_REGISTERED_USER"] ?? null)) {
                // line 18
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 19
                echo ($context["U_SEARCH_SELF"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
                // line 20
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_SELF");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 24
            echo "\t\t\t\t\t\t";
            if (($context["S_USER_LOGGED_IN"] ?? null)) {
                // line 25
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 26
                echo ($context["U_SEARCH_NEW"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i><span>";
                // line 27
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_NEW");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 31
            echo "\t\t\t\t\t\t";
            if (($context["S_LOAD_UNREADS"] ?? null)) {
                // line 32
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 33
                echo ($context["U_SEARCH_UNREAD"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-red\" aria-hidden=\"true\"></i><span>";
                // line 34
                echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNREAD");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 38
            echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 39
            echo ($context["U_SEARCH_UNANSWERED"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-gray\" aria-hidden=\"true\"></i><span>";
            // line 40
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_UNANSWERED");
            echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 44
            echo ($context["U_SEARCH_ACTIVE_TOPICS"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-file-o fa-fw icon-blue\" aria-hidden=\"true\"></i><span>";
            // line 45
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ACTIVE_TOPICS");
            echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 50
            echo ($context["U_SEARCH"] ?? null);
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 51
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t";
        }
        // line 55
        echo "
\t\t\t\t\t";
        // line 56
        if (( !($context["S_IS_BOT"] ?? null) && (($context["S_DISPLAY_MEMBERLIST"] ?? null) || ($context["U_TEAM"] ?? null)))) {
            // line 57
            echo "\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t";
            // line 58
            if (($context["S_DISPLAY_MEMBERLIST"] ?? null)) {
                // line 59
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 60
                echo ($context["U_MEMBERLIST"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-group fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 61
                echo $this->extensions['phpbb\template\twig\extension']->lang("MEMBERLIST");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 65
            echo "\t\t\t\t\t\t";
            if (($context["U_TEAM"] ?? null)) {
                // line 66
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 67
                echo ($context["U_TEAM"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-shield fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 68
                echo $this->extensions['phpbb\template\twig\extension']->lang("THE_TEAM");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 72
            echo "\t\t\t\t\t";
        }
        // line 73
        echo "\t\t\t\t\t<li class=\"separator\"></li>

\t\t\t\t\t";
        // line 75
        // line 76
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t</li>

\t\t";
        // line 80
        // line 81
        echo "\t\t<li ";
        if ( !($context["S_USER_LOGGED_IN"] ?? null)) {
            echo "data-skip-responsive=\"true\"";
        } else {
            echo "data-last-responsive=\"true\"";
        }
        echo ">
\t\t\t<a href=\"";
        // line 82
        echo ($context["U_FAQ"] ?? null);
        echo "\" rel=\"help\" title=\"";
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ_EXPLAIN");
        echo "\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-question-circle fa-fw\" aria-hidden=\"true\"></i><span>";
        // line 83
        echo $this->extensions['phpbb\template\twig\extension']->lang("FAQ");
        echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
        // line 86
        // line 87
        echo "\t\t";
        if (($context["U_ACP"] ?? null)) {
            // line 88
            echo "\t\t\t<li data-last-responsive=\"true\">
\t\t\t\t<a href=\"";
            // line 89
            echo ($context["U_ACP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP");
            echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-cogs fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 90
            echo $this->extensions['phpbb\template\twig\extension']->lang("ACP_SHORT");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        // line 94
        echo "\t\t";
        if (($context["U_MCP"] ?? null)) {
            // line 95
            echo "\t\t\t<li data-last-responsive=\"true\">
\t\t\t\t<a href=\"";
            // line 96
            echo ($context["U_MCP"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP");
            echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-gavel fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 97
            echo $this->extensions['phpbb\template\twig\extension']->lang("MCP_SHORT");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        // line 101
        echo "
\t";
        // line 102
        if (($context["S_REGISTERED_USER"] ?? null)) {
            // line 103
            echo "\t\t";
            // line 104
            echo "\t\t<li id=\"username_logged_in\" class=\"rightside ";
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo " no-bulletin";
            }
            echo "\" data-skip-responsive=\"true\">
\t\t\t";
            // line 105
            // line 106
            echo "\t\t\t<div class=\"header-profile dropdown-container\">
\t\t\t\t<a href=\"";
            // line 107
            echo ($context["U_PROFILE"] ?? null);
            echo "\" class=\"header-avatar dropdown-trigger\">";
            if (($context["CURRENT_USER_AVATAR"] ?? null)) {
                echo ($context["CURRENT_USER_AVATAR"] ?? null);
                echo " ";
            }
            echo " ";
            echo ($context["CURRENT_USERNAME_SIMPLE"] ?? null);
            echo "</a>
\t\t\t\t<div class=\"dropdown\">
\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t<ul class=\"dropdown-contents\" role=\"menu\">
\t\t\t\t\t\t";
            // line 111
            if (($context["U_RESTORE_PERMISSIONS"] ?? null)) {
                // line 112
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 113
                echo ($context["U_RESTORE_PERMISSIONS"] ?? null);
                echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-refresh fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 114
                echo $this->extensions['phpbb\template\twig\extension']->lang("RESTORE_PERMISSIONS");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 118
            echo "
\t\t\t\t\t";
            // line 119
            // line 120
            echo "
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 122
            echo ($context["U_PROFILE"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-sliders fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 123
            echo $this->extensions['phpbb\template\twig\extension']->lang("PROFILE");
            echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            // line 126
            if (($context["U_USER_PROFILE"] ?? null)) {
                // line 127
                echo "\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"";
                // line 128
                echo ($context["U_USER_PROFILE"] ?? null);
                echo "\" title=\"";
                echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
                echo "\" role=\"menuitem\">
\t\t\t\t\t\t\t\t\t<i class=\"icon fa-user fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 129
                echo $this->extensions['phpbb\template\twig\extension']->lang("READ_PROFILE");
                echo "</span>
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t";
            }
            // line 133
            echo "
\t\t\t\t\t\t";
            // line 134
            // line 135
            echo "
\t\t\t\t\t\t<li class=\"separator\"></li>
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<a href=\"";
            // line 138
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">
\t\t\t\t\t\t\t\t<i class=\"icon fa-power-off fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 139
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</span>
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
            // line 145
            // line 146
            echo "\t\t</li>
\t\t";
            // line 147
            if (($context["S_DISPLAY_PM"] ?? null)) {
                // line 148
                echo "\t\t\t<li class=\"rightside\" data-skip-responsive=\"true\">
\t\t\t\t<a href=\"";
                // line 149
                echo ($context["U_PRIVATEMSGS"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-inbox fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 150
                echo $this->extensions['phpbb\template\twig\extension']->lang("PRIVATE_MESSAGES");
                echo " </span><strong class=\"badge";
                if ( !($context["PRIVATE_MESSAGE_COUNT"] ?? null)) {
                    echo " hidden";
                }
                echo "\">";
                echo ($context["PRIVATE_MESSAGE_COUNT"] ?? null);
                echo "</strong>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
            }
            // line 154
            echo "\t\t";
            if (($context["S_NOTIFICATIONS_DISPLAY"] ?? null)) {
                // line 155
                echo "\t\t\t<li class=\"dropdown-container dropdown-";
                echo ($context["S_CONTENT_FLOW_END"] ?? null);
                echo " rightside\" data-skip-responsive=\"true\">
\t\t\t\t<a href=\"";
                // line 156
                echo ($context["U_VIEW_ALL_NOTIFICATIONS"] ?? null);
                echo "\" id=\"notification_list_button\" class=\"dropdown-trigger\">
\t\t\t\t\t<i class=\"icon fa-bell fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 157
                echo $this->extensions['phpbb\template\twig\extension']->lang("NOTIFICATIONS");
                echo " </span><strong class=\"badge";
                if ( !($context["NOTIFICATIONS_COUNT"] ?? null)) {
                    echo " hidden";
                }
                echo "\">";
                echo ($context["NOTIFICATIONS_COUNT"] ?? null);
                echo "</strong>
\t\t\t\t</a>
\t\t\t\t";
                // line 159
                $location = "notification_dropdown.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("notification_dropdown.html", "navbar_header.html", 159)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 160
                echo "\t\t\t</li>
\t\t";
            }
            // line 162
            echo "\t\t";
            // line 163
            echo "\t";
        } elseif ( !($context["S_IS_BOT"] ?? null)) {
            // line 164
            echo "\t\t<li class=\"rightside\"  data-skip-responsive=\"true\">
\t\t\t<a href=\"";
            // line 165
            echo ($context["U_LOGIN_LOGOUT"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "\" accesskey=\"x\" role=\"menuitem\">
\t\t\t\t<i class=\"icon fa-power-off fa-fw\" aria-hidden=\"true\"></i><span>";
            // line 166
            echo $this->extensions['phpbb\template\twig\extension']->lang("LOGIN_LOGOUT");
            echo "</span>
\t\t\t</a>
\t\t</li>
\t\t";
            // line 169
            if ((($context["S_REGISTER_ENABLED"] ?? null) &&  !(($context["S_SHOW_COPPA"] ?? null) || ($context["S_REGISTRATION"] ?? null)))) {
                // line 170
                echo "\t\t\t<li class=\"rightside\" data-skip-responsive=\"true\">
\t\t\t\t<a href=\"";
                // line 171
                echo ($context["U_REGISTER"] ?? null);
                echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-pencil-square-o  fa-fw\" aria-hidden=\"true\"></i><span>";
                // line 172
                echo $this->extensions['phpbb\template\twig\extension']->lang("REGISTER");
                echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
            }
            // line 176
            echo "\t\t";
            // line 177
            echo "\t";
        }
        // line 178
        echo "\t</ul>

\t<ul id=\"nav-breadcrumbs\" class=\"nav-breadcrumbs linklist navlinks\" role=\"menubar\">
\t\t";
        // line 181
        $value = " itemtype=\"http://schema.org/ListItem\" itemprop=\"itemListElement\" itemscope";
        $context['definition']->set('MICRODATA', $value);
        // line 182
        echo "\t\t";
        $context["navlink_position"] = 1;
        // line 183
        echo "\t\t";
        // line 184
        echo "\t\t<li class=\"breadcrumbs\" itemscope itemtype=\"http://schema.org/BreadcrumbList\">
\t\t\t";
        // line 185
        if (($context["U_SITE_HOME"] ?? null)) {
            // line 186
            echo "\t\t\t\t<span class=\"crumb\" ";
            echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "MICRODATA", [], "any", false, false, false, 186);
            echo "><a href=\"";
            echo ($context["U_SITE_HOME"] ?? null);
            echo "\" itemtype=\"https://schema.org/Thing\" itemscope itemprop=\"item\" data-navbar-reference=\"home\"><i class=\"icon fa-home fa-fw\" aria-hidden=\"true\"></i><span itemprop=\"name\">";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SITE_HOME");
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></span>
\t\t\t";
        }
        // line 188
        echo "\t\t\t";
        // line 189
        echo "\t\t\t\t<span class=\"crumb\" ";
        echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "MICRODATA", [], "any", false, false, false, 189);
        echo "><a href=\"";
        echo ($context["U_INDEX"] ?? null);
        echo "\" itemtype=\"https://schema.org/Thing\" itemscope itemprop=\"item\" accesskey=\"h\" data-navbar-reference=\"index\">";
        if ( !($context["U_SITE_HOME"] ?? null)) {
            echo "<i class=\"icon fa-home fa-fw\"></i>";
        }
        echo "<span itemprop=\"name\">";
        echo $this->extensions['phpbb\template\twig\extension']->lang("INDEX");
        echo "</span></a><meta itemprop=\"position\" content=\"";
        echo ($context["navlink_position"] ?? null);
        $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
        echo "\" /></span>

\t\t\t";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["loops"] ?? null), "navlinks", [], "any", false, false, false, 191));
        foreach ($context['_seq'] as $context["_key"] => $context["navlinks"]) {
            // line 192
            echo "\t\t\t\t";
            $context["NAVLINK_NAME"] = ((twig_get_attribute($this->env, $this->source, $context["navlinks"], "BREADCRUMB_NAME", [], "any", true, true, false, 192)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["navlinks"], "BREADCRUMB_NAME", [], "any", false, false, false, 192), twig_get_attribute($this->env, $this->source, $context["navlinks"], "FORUM_NAME", [], "any", false, false, false, 192))) : (twig_get_attribute($this->env, $this->source, $context["navlinks"], "FORUM_NAME", [], "any", false, false, false, 192)));
            // line 193
            echo "\t\t\t\t";
            $context["NAVLINK_LINK"] = ((twig_get_attribute($this->env, $this->source, $context["navlinks"], "U_BREADCRUMB", [], "any", true, true, false, 193)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["navlinks"], "U_BREADCRUMB", [], "any", false, false, false, 193), twig_get_attribute($this->env, $this->source, $context["navlinks"], "U_VIEW_FORUM", [], "any", false, false, false, 193))) : (twig_get_attribute($this->env, $this->source, $context["navlinks"], "U_VIEW_FORUM", [], "any", false, false, false, 193)));
            // line 194
            echo "\t\t\t\t";
            // line 195
            echo "\t\t\t\t<span class=\"crumb\" ";
            echo twig_get_attribute($this->env, $this->source, ($context["definition"] ?? null), "MICRODATA", [], "any", false, false, false, 195);
            if (twig_get_attribute($this->env, $this->source, $context["navlinks"], "MICRODATA", [], "any", false, false, false, 195)) {
                echo " ";
                echo twig_get_attribute($this->env, $this->source, $context["navlinks"], "MICRODATA", [], "any", false, false, false, 195);
            }
            echo "><a href=\"";
            echo ($context["NAVLINK_LINK"] ?? null);
            echo "\" itemtype=\"https://schema.org/Thing\" itemscope itemprop=\"item\"><span itemprop=\"name\">";
            echo ($context["NAVLINK_NAME"] ?? null);
            echo "</span></a><meta itemprop=\"position\" content=\"";
            echo ($context["navlink_position"] ?? null);
            $context["navlink_position"] = (($context["navlink_position"] ?? null) + 1);
            echo "\" /></span>
\t\t\t\t";
            // line 196
            // line 197
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['navlinks'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        echo "\t\t\t";
        // line 199
        echo "\t\t</li>
\t\t";
        // line 200
        // line 201
        echo "
\t\t";
        // line 202
        if ((($context["S_DISPLAY_SEARCH"] ?? null) &&  !($context["S_IN_SEARCH"] ?? null))) {
            // line 203
            echo "\t\t\t<li class=\"rightside responsive-search\">
\t\t\t\t<a href=\"";
            // line 204
            echo ($context["U_SEARCH"] ?? null);
            echo "\" title=\"";
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH_ADV_EXPLAIN");
            echo "\" role=\"menuitem\">
\t\t\t\t\t<i class=\"icon fa-search fa-fw\" aria-hidden=\"true\"></i><span class=\"sr-only\">";
            // line 205
            echo $this->extensions['phpbb\template\twig\extension']->lang("SEARCH");
            echo "</span>
\t\t\t\t</a>
\t\t\t</li>
\t\t";
        }
        // line 209
        echo "\t</ul>

\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "navbar_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  599 => 209,  592 => 205,  586 => 204,  583 => 203,  581 => 202,  578 => 201,  577 => 200,  574 => 199,  572 => 198,  566 => 197,  565 => 196,  549 => 195,  547 => 194,  544 => 193,  541 => 192,  537 => 191,  520 => 189,  518 => 188,  505 => 186,  503 => 185,  500 => 184,  498 => 183,  495 => 182,  492 => 181,  487 => 178,  484 => 177,  482 => 176,  475 => 172,  471 => 171,  468 => 170,  466 => 169,  460 => 166,  454 => 165,  451 => 164,  448 => 163,  446 => 162,  442 => 160,  430 => 159,  419 => 157,  415 => 156,  410 => 155,  407 => 154,  394 => 150,  390 => 149,  387 => 148,  385 => 147,  382 => 146,  381 => 145,  372 => 139,  366 => 138,  361 => 135,  360 => 134,  357 => 133,  350 => 129,  344 => 128,  341 => 127,  339 => 126,  333 => 123,  327 => 122,  323 => 120,  322 => 119,  319 => 118,  312 => 114,  308 => 113,  305 => 112,  303 => 111,  289 => 107,  286 => 106,  285 => 105,  278 => 104,  276 => 103,  274 => 102,  271 => 101,  264 => 97,  258 => 96,  255 => 95,  252 => 94,  245 => 90,  239 => 89,  236 => 88,  233 => 87,  232 => 86,  226 => 83,  220 => 82,  211 => 81,  210 => 80,  204 => 76,  203 => 75,  199 => 73,  196 => 72,  189 => 68,  185 => 67,  182 => 66,  179 => 65,  172 => 61,  168 => 60,  165 => 59,  163 => 58,  160 => 57,  158 => 56,  155 => 55,  148 => 51,  144 => 50,  136 => 45,  132 => 44,  125 => 40,  121 => 39,  118 => 38,  111 => 34,  107 => 33,  104 => 32,  101 => 31,  94 => 27,  90 => 26,  87 => 25,  84 => 24,  77 => 20,  73 => 19,  70 => 18,  68 => 17,  65 => 16,  63 => 15,  60 => 14,  59 => 13,  51 => 8,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "navbar_header.html", "");
    }
}
