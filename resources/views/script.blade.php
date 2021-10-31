@if(Astrogoat\Yotpo\Settings\YotpoSettings::isEnabled())
    <script type="text/javascript">
        (function e() {
            var e = document.createElement("script");
            e.type = "text/javascript", e.async = ! 0, e.src = "//staticw2.yotpo.com/{{ settings(Astrogoat\Yotpo\Settings\YotpoSettings::class, 'app_key') }}/widget.js";
            var t = document.getElementsByTagName("script")[0];
            t.parentNode.insertBefore(e, t)
        })();
    </script>
@endif
