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

/* template.html */
class __TwigTemplate_8621af53bbbffa0db40b6eaf34216c9942316f326bbfb9448919205e053c9deb extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">

<head>
\t<meta charset=\"UTF-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
\t<title>Document</title>

\t<script src=\"https://code.jquery.com/jquery-3.6.0.min.js\"
\t\tintegrity=\"sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=\" crossorigin=\"anonymous\"></script>
\t<script src=\"https://cdnjs.cloudflare.com/ajax/libs/maphilight/1.4.2/jquery.maphilight.min.js\"
\t\tintegrity=\"sha512-1YiTT24MNHA6DRzyu+w9F5Egc8evYlyEnzSSTD4/M7q42xEb5fSpNgn0+1CPy3evubHs3xdlh8uXgae0DOhR7Q==\"
\t\tcrossorigin=\"anonymous\" referrerpolicy=\"no-referrer\"></script>

\t<script>
\t\t!function () { \"use strict\"; function r() { function e() { var r = { width: u.width / u.naturalWidth, height: u.height / u.naturalHeight }, a = { width: parseInt(window.getComputedStyle(u, null).getPropertyValue(\"padding-left\"), 10), height: parseInt(window.getComputedStyle(u, null).getPropertyValue(\"padding-top\"), 10) }; i.forEach(function (e, t) { var n = 0; o[t].coords = e.split(\",\").map(function (e) { var t = 1 == (n = 1 - n) ? \"width\" : \"height\"; return a[t] + Math.floor(Number(e) * r[t]) }).join(\",\") }) } function t(e) { return e.coords.replace(/ *, */g, \",\").replace(/ +/g, \",\") } function n() { clearTimeout(d), d = setTimeout(e, 250) } function r(e) { return document.querySelector('img[usemap=\"' + e + '\"]') } var a = this, o = null, i = null, u = null, d = null; \"function\" != typeof a._resize ? (o = a.getElementsByTagName(\"area\"), i = Array.prototype.map.call(o, t), u = r(\"#\" + a.name) || r(a.name), a._resize = e, u.addEventListener(\"load\", e, !1), window.addEventListener(\"focus\", e, !1), window.addEventListener(\"resize\", n, !1), window.addEventListener(\"readystatechange\", e, !1), document.addEventListener(\"fullscreenchange\", e, !1), u.width === u.naturalWidth && u.height === u.naturalHeight || e()) : a._resize() } function e() { function t(e) { e && (!function (e) { if (!e.tagName) throw new TypeError(\"Object is not a valid DOM element\"); if (\"MAP\" !== e.tagName.toUpperCase()) throw new TypeError(\"Expected <MAP> tag, found <\" + e.tagName + \">.\") }(e), r.call(e), n.push(e)) } var n; return function (e) { switch (n = [], typeof e) { case \"undefined\": case \"string\": Array.prototype.forEach.call(document.querySelectorAll(e || \"map\"), t); break; case \"object\": t(e); break; default: throw new TypeError(\"Unexpected data type (\" + typeof e + \").\") }return n } } \"function\" == typeof define && define.amd ? define([], e) : \"object\" == typeof module && \"object\" == typeof module.exports ? module.exports = e() : window.imageMapResize = e(), \"jQuery\" in window && (window.jQuery.fn.imageMapResize = function () { return this.filter(\"map\").each(r).end() }) }();
\t</script>

\t<style>
\t\t#wrapper {
\t\t\twidth: 1500px;
\t\t\theight: 1049px;
\t\t}

\t\t#wrapper div {
\t\t\tmargin: 0 auto;
\t\t}

\t\t#wrapper img {
\t\t\tmax-width: 1500px;
\t\t\tmax-height: 1049px;
\t\t}
\t</style>

\t<script type=\"text/javascript\">
\t\t\$(document).ready(() => {

\t\t\t// Для определения портрета
\t\t\t// let myImg = document.querySelector(\"#imgMap\");
\t\t\t// let wrapper = document.querySelector(\"#wrapper\");
\t\t\t// let realWidth = myImg.naturalWidth;
\t\t\t// let realHeight = myImg.naturalHeight;

\t\t\t// if (realWidth >= realHeight) {
\t\t\t// \tmyImg.style.maxWidth  = '1500px';
\t\t\t// \tmyImg.style.maxHeight = '1049px';
\t\t\t// \twrapper.style.maxWidth  = '1500px';
\t\t\t// \twrapper.style.maxHeight = '1049px';
\t\t\t// } else {
\t\t\t// \tmyImg.style.maxWidth  = '1049px';
\t\t\t// \tmyImg.style.maxHeight = '1500px';
\t\t\t// \twrapper.style.maxWidth  = '1049px';
\t\t\t// \twrapper.style.maxHeight = '1500px';
\t\t\t// }

\t\t\t\$('map').imageMapResize();

\t\t\t\$('#imgMap').maphilight({ alwaysOn: true });

\t\t\tlet genplan_bg_default = () => {

\t\t\t\tlet saleselector = '.sale';
\t\t\t\tlet soldselector = '.sold';
\t\t\t\tlet instockselector = '.in_stock';
\t\t\t\tlet holdselector = '.hold';
\t\t\t\t\$(saleselector).data('maphilight', {
\t\t\t\t\talwaysOn: true,
\t\t\t\t\tfillColor: 'ffff00',
\t\t\t\t\tfillOpacity: '0.5',
\t\t\t\t\tstrokeColor: 'ffff00',
\t\t\t\t\tstrokeOpacity: '0'
\t\t\t\t}).trigger('alwaysOn.maphilight');

\t\t\t\t\$(instockselector).data('maphilight', {
\t\t\t\t\talwaysOn: true,
\t\t\t\t\tfillColor: 'a7e602',
\t\t\t\t\tfillOpacity: '0.3',
\t\t\t\t\tstrokeColor: '9bff0b',
\t\t\t\t\tstrokeOpacity: '0'
\t\t\t\t}).trigger('alwaysOn.maphilight');

\t\t\t\t/*\t\$(soldselector).data('maphilight', {
\t\t\t\t\t\talwaysOn: true,
\t\t\t\t\t\tfillColor: '000000',
\t\t\t\t\t\tfillOpacity: '0.2',
\t\t\t\t\t\tstrokeColor: '000000',
\t\t\t\t\t\tstrokeOpacity: '0'
\t\t\t\t\t}).trigger('alwaysOn.maphilight');
\t\t\t\t*/
\t\t\t\t\$(holdselector).data('maphilight', {
\t\t\t\t\talwaysOn: true,
\t\t\t\t\tfillColor: '009edc',
\t\t\t\t\tfillOpacity: '0.3',
\t\t\t\t\tstrokeColor: '009edc',
\t\t\t\t\tstrokeOpacity: '0'
\t\t\t\t}).trigger('alwaysOn.maphilight');

\t\t\t\t\$('.genplan_map').maphilight({
\t\t\t\t\tfade: false,
\t\t\t\t\tfillColor: 'ffffff',
\t\t\t\t\tstrokeColor: 'ff0000',
\t\t\t\t\tstrokeOpacity: '0',
\t\t\t\t\tstrokeWidth: '0'
\t\t\t\t});
\t\t\t}
\t\t\tgenplan_bg_default();
\t\t});
\t</script>
</head>

<body>
\t<div id=\"wrapper\">
\t\t<img src=\"";
        // line 114
        echo twig_escape_filter($this->env, ($context["url"] ?? null), "html", null, true);
        echo "\" id=\"imgMap\" alt=\"background\" usemap=\"#map\">
\t\t";
        // line 115
        echo ($context["map"] ?? null);
        echo "
\t</div>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "template.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 115,  152 => 114,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "template.html", "C:\\Users\\notepc\\Sites\\teplo\\templates\\template.html");
    }
}
