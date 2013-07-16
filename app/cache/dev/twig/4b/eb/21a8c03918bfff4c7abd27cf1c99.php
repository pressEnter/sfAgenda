<?php

/* SensioDistributionBundle:Configurator:check.html.twig */
class __TwigTemplate_4beb21a8c03918bfff4c7abd27cf1c99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
            // line 5
            echo "        <h1>Major Problems that need to be fixed now</h1>
        <p>
            We have detected <strong>";
            // line 7
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))), "html", null, true);
            echo "</strong> major problems.
            You <em>must</em> fix them before continuing:
        </p>
        <ol>
            ";
            // line 11
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 12
                echo "                <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        </ol>
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (twig_length_filter($this->env, (isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")))) {
            // line 18
            echo "        <h1>Some Recommandations</h1>

        <p>
            ";
            // line 21
            if (twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors")))) {
                // line 22
                echo "            Additionally, we
            ";
            } else {
                // line 24
                echo "            We
            ";
            }
            // line 26
            echo "            have detected some minor problems that we <em>recommend</em> you to fix to have a better Symfony
            experience:

            <ol>
                ";
            // line 30
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["minors"]) ? $context["minors"] : $this->getContext($context, "minors")));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 31
                echo "                    <li>";
                echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            </ol>
        </p>

    ";
        }
        // line 37
        echo "
    ";
        // line 38
        if ((!twig_length_filter($this->env, (isset($context["majors"]) ? $context["majors"] : $this->getContext($context, "majors"))))) {
            // line 39
            echo "        <ul class=\"symfony_list\">
            <li><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, (isset($context["url"]) ? $context["url"] : $this->getContext($context, "url")), "html", null, true);
            echo "\">Configure your Symfony Application online</a></li>
        </ul>
    ";
        }
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:check.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 38,  1357 => 388,  1348 => 387,  1346 => 386,  1343 => 385,  1327 => 381,  1320 => 380,  1318 => 379,  1315 => 378,  1292 => 374,  1267 => 373,  1265 => 372,  1262 => 371,  1250 => 366,  1245 => 365,  1243 => 364,  1240 => 363,  1231 => 357,  1225 => 355,  1222 => 354,  1217 => 353,  1215 => 352,  1212 => 351,  1205 => 346,  1196 => 344,  1192 => 343,  1189 => 342,  1186 => 341,  1184 => 340,  1181 => 339,  1173 => 335,  1171 => 334,  1168 => 333,  1162 => 329,  1156 => 327,  1153 => 326,  1151 => 325,  1148 => 324,  1139 => 319,  1137 => 318,  1114 => 317,  1111 => 316,  1108 => 315,  1105 => 314,  1102 => 313,  1099 => 312,  1096 => 311,  1094 => 310,  1091 => 309,  1084 => 305,  1080 => 304,  1075 => 303,  1073 => 302,  1070 => 301,  1063 => 296,  1060 => 295,  1052 => 290,  1049 => 289,  1047 => 288,  1044 => 287,  1036 => 282,  1032 => 281,  1028 => 280,  1025 => 279,  1023 => 278,  1020 => 277,  1012 => 273,  1010 => 269,  1008 => 268,  1005 => 267,  1000 => 263,  978 => 258,  975 => 257,  972 => 256,  969 => 255,  966 => 254,  963 => 253,  960 => 252,  957 => 251,  954 => 250,  951 => 249,  948 => 248,  946 => 247,  943 => 246,  935 => 240,  932 => 239,  930 => 238,  927 => 237,  919 => 233,  916 => 232,  914 => 231,  911 => 230,  899 => 226,  896 => 225,  893 => 224,  890 => 223,  888 => 222,  885 => 221,  877 => 217,  874 => 216,  872 => 215,  869 => 214,  861 => 210,  858 => 209,  856 => 208,  853 => 207,  845 => 203,  842 => 202,  840 => 201,  837 => 200,  829 => 196,  826 => 195,  824 => 194,  821 => 193,  813 => 189,  810 => 188,  808 => 187,  805 => 186,  797 => 182,  794 => 181,  789 => 179,  781 => 175,  779 => 174,  776 => 173,  768 => 169,  765 => 168,  763 => 167,  760 => 166,  752 => 162,  749 => 161,  747 => 160,  735 => 153,  725 => 152,  720 => 151,  717 => 150,  711 => 148,  708 => 147,  703 => 145,  695 => 139,  693 => 138,  692 => 137,  691 => 136,  685 => 134,  679 => 132,  676 => 131,  674 => 130,  671 => 129,  662 => 123,  658 => 122,  654 => 121,  650 => 120,  639 => 117,  636 => 116,  634 => 115,  631 => 114,  615 => 110,  613 => 109,  610 => 108,  594 => 104,  592 => 103,  589 => 102,  572 => 98,  560 => 96,  553 => 93,  551 => 92,  546 => 91,  543 => 90,  523 => 88,  511 => 82,  508 => 81,  505 => 80,  499 => 78,  497 => 77,  492 => 76,  489 => 75,  486 => 74,  471 => 72,  459 => 69,  456 => 68,  450 => 64,  442 => 62,  433 => 60,  428 => 59,  426 => 58,  414 => 52,  405 => 49,  403 => 48,  400 => 47,  390 => 43,  388 => 42,  385 => 41,  377 => 37,  366 => 33,  350 => 26,  316 => 16,  313 => 15,  311 => 14,  308 => 13,  299 => 8,  273 => 377,  271 => 371,  266 => 363,  260 => 360,  250 => 338,  245 => 332,  240 => 323,  238 => 309,  230 => 300,  225 => 295,  217 => 286,  215 => 277,  204 => 264,  186 => 236,  179 => 221,  159 => 193,  146 => 178,  129 => 145,  124 => 129,  20 => 1,  356 => 328,  339 => 316,  295 => 275,  357 => 123,  344 => 24,  332 => 20,  327 => 114,  324 => 113,  318 => 111,  306 => 107,  297 => 276,  291 => 102,  263 => 362,  243 => 324,  231 => 83,  212 => 276,  202 => 263,  190 => 76,  174 => 214,  389 => 160,  386 => 159,  378 => 157,  371 => 35,  367 => 155,  363 => 32,  358 => 151,  353 => 121,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  321 => 112,  307 => 128,  302 => 125,  296 => 121,  293 => 6,  290 => 5,  288 => 4,  281 => 385,  276 => 378,  274 => 97,  269 => 107,  265 => 96,  259 => 103,  255 => 350,  253 => 339,  232 => 88,  227 => 298,  222 => 294,  210 => 267,  184 => 230,  155 => 47,  152 => 46,  127 => 35,  175 => 58,  161 => 199,  118 => 49,  806 => 488,  803 => 487,  792 => 180,  788 => 484,  784 => 482,  771 => 481,  745 => 159,  742 => 158,  723 => 473,  706 => 146,  702 => 470,  698 => 469,  694 => 468,  690 => 135,  686 => 466,  682 => 465,  678 => 464,  675 => 463,  673 => 462,  656 => 461,  645 => 119,  630 => 455,  625 => 453,  621 => 452,  618 => 451,  616 => 450,  602 => 449,  565 => 414,  547 => 411,  530 => 410,  527 => 409,  525 => 89,  520 => 87,  515 => 404,  244 => 136,  188 => 90,  170 => 56,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 50,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  361 => 152,  351 => 120,  348 => 140,  342 => 23,  338 => 135,  335 => 21,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  315 => 110,  303 => 106,  300 => 105,  289 => 113,  286 => 112,  275 => 105,  270 => 102,  267 => 101,  262 => 98,  256 => 96,  248 => 333,  233 => 301,  226 => 84,  216 => 79,  213 => 78,  207 => 266,  200 => 72,  197 => 246,  194 => 245,  191 => 243,  185 => 74,  181 => 229,  178 => 59,  172 => 57,  153 => 77,  150 => 55,  134 => 158,  102 => 30,  90 => 27,  59 => 13,  113 => 48,  104 => 87,  100 => 39,  77 => 28,  65 => 17,  81 => 40,  76 => 31,  63 => 21,  58 => 14,  34 => 5,  53 => 11,  480 => 162,  474 => 161,  469 => 71,  461 => 70,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 61,  435 => 146,  430 => 144,  427 => 143,  423 => 57,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 36,  368 => 34,  365 => 111,  362 => 110,  360 => 109,  355 => 27,  341 => 118,  337 => 22,  322 => 101,  314 => 99,  312 => 109,  309 => 108,  305 => 95,  298 => 120,  294 => 90,  285 => 3,  283 => 100,  278 => 384,  268 => 370,  264 => 84,  258 => 351,  252 => 80,  247 => 78,  241 => 93,  235 => 308,  229 => 87,  224 => 81,  220 => 287,  214 => 69,  208 => 76,  169 => 207,  143 => 51,  140 => 58,  132 => 51,  128 => 49,  119 => 114,  107 => 37,  71 => 19,  177 => 65,  165 => 83,  160 => 61,  135 => 47,  126 => 144,  114 => 108,  84 => 41,  70 => 24,  67 => 18,  61 => 2,  201 => 92,  196 => 92,  183 => 70,  171 => 213,  166 => 206,  163 => 53,  158 => 62,  156 => 192,  151 => 185,  142 => 59,  138 => 57,  136 => 165,  121 => 128,  117 => 39,  105 => 25,  91 => 56,  62 => 16,  49 => 12,  38 => 7,  28 => 3,  26 => 6,  87 => 26,  21 => 2,  94 => 57,  89 => 47,  85 => 23,  75 => 24,  68 => 12,  56 => 12,  24 => 3,  31 => 4,  25 => 3,  19 => 1,  93 => 28,  88 => 30,  78 => 24,  46 => 34,  44 => 11,  27 => 7,  79 => 32,  72 => 21,  69 => 13,  47 => 9,  40 => 8,  37 => 6,  22 => 2,  246 => 96,  157 => 56,  145 => 52,  139 => 166,  131 => 157,  123 => 61,  120 => 31,  115 => 40,  111 => 107,  108 => 33,  101 => 33,  98 => 29,  96 => 67,  83 => 31,  74 => 22,  66 => 12,  55 => 12,  52 => 12,  50 => 10,  43 => 11,  41 => 7,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 73,  199 => 262,  193 => 73,  189 => 237,  187 => 75,  182 => 87,  176 => 220,  173 => 85,  168 => 61,  164 => 200,  162 => 59,  154 => 186,  149 => 179,  147 => 43,  144 => 173,  141 => 172,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 113,  112 => 39,  109 => 102,  106 => 101,  103 => 37,  99 => 68,  95 => 34,  92 => 31,  86 => 46,  82 => 26,  80 => 27,  73 => 27,  64 => 3,  60 => 20,  57 => 39,  54 => 19,  51 => 37,  48 => 16,  45 => 11,  42 => 13,  39 => 10,  36 => 5,  33 => 4,  30 => 3,);
    }
}